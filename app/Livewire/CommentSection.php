<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Collection;

class CommentSection extends Component
{
    public Blog $blog;
    public Collection $comments;
    public string $userName = '';
    public string $userEmail = '';
    public string $userWebsite = '';
    public string $newCommentText = '';
    public ?int $replyToCommentId = null;
    public string $replyUserName = '';
    public string $replyUserEmail = '';
    public string $replyUserWebsite = '';
    public string $replyText = '';
    public string $successMessage = '';

    protected $rules = [
        'userName' => 'required|string|min:2|max:255',
        'userEmail' => 'required|email|max:255',
        'userWebsite' => 'nullable|url|max:255',
        'newCommentText' => 'required|string|min:3',
        'replyUserName' => 'required_if:replyToCommentId,!=,null|string|min:2|max:255',
        'replyUserEmail' => 'required_if:replyToCommentId,!=,null|email|max:255',
        'replyUserWebsite' => 'nullable|url|max:255',
        'replyText' => 'required_if:replyToCommentId,!=,null|string|min:3',
    ];

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $this->loadComments();
    }

    public function loadComments()
    {
        // Load top-level comments with their replies
        $this->comments = Comment::where('blog_id', $this->blog->id)
                                ->where('is_approved', true)
                                ->with(['replies' => function($query) {
                                    $query->where('is_approved', true)
                                          ->orderBy('created_at', 'asc');
                                }])
                                ->orderBy('created_at', 'desc')
                                ->get();
    }

    public function addComment()
    {
        $this->validate([
            'userName' => 'required|string|min:2|max:255',
            'userEmail' => 'required|email|max:255',
            'userWebsite' => 'nullable|url|max:255',
            'newCommentText' => 'required|string|min:3',
        ]);

        Comment::create([
            'blog_id' => $this->blog->id,
            'user_name' => $this->userName,
            'user_email' => $this->userEmail,
            'user_website' => $this->userWebsite,
            'comment_text' => $this->newCommentText,
            'reply_id' => null,
        ]);

        $this->reset(['userName', 'userEmail', 'userWebsite', 'newCommentText']);
        $this->successMessage = 'Comment added successfully! Wait for approval.';
        $this->loadComments();
        $this->dispatch('comment-added');
    }

    public function startReply($commentId)
    {
        $this->replyToCommentId = $commentId;
        $this->reset(['replyUserName', 'replyUserEmail', 'replyUserWebsite', 'replyText']);

        // Dispatch event AFTER update (passes comment ID)
        $this->dispatch('scroll-to-reply', commentId: $commentId);
    }

    public function cancelReply()
    {
        $this->replyToCommentId = null;
        $this->reset(['replyUserName', 'replyUserEmail', 'replyUserWebsite', 'replyText']);

        // Optional: Dispatch event to scroll back
        $this->dispatch('scroll-to-comments');
    }

    public function addReply()
    {
        $this->validate([
            'replyUserName' => 'required|string|min:2|max:255',
            'replyUserEmail' => 'required|email|max:255',
            'replyUserWebsite' => 'nullable|url|max:255',
            'replyText' => 'required|string|min:3',
        ]);

        Comment::create([
            'blog_id' => $this->blog->id,
            'user_name' => $this->replyUserName,
            'user_email' => $this->replyUserEmail,
            'user_website' => $this->replyUserWebsite,
            'comment_text' => $this->replyText,
            'reply_id' => $this->replyToCommentId,
        ]);

        $this->reset(['replyToCommentId', 'replyUserName', 'replyUserEmail', 'replyUserWebsite', 'replyText']);
        $this->successMessage = 'Reply added successfully! Wait for approval.';
        $this->loadComments();
        $this->dispatch('comment-added');
    }

    public function render()
    {
        return view('livewire.comment-section');
    }
}