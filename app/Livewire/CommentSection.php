<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Collection;

class CommentSection extends Component
{
    public Blog $blog; // The blog for which comments are shown
    public Collection $comments; // Collection of comments for the blog
    public string $userName = ''; // For new comment form
    public string $userEmail = ''; // For new comment form
    public string $userWebsite = ''; // For new comment form (optional)
    public string $newCommentText = ''; // For new comment form
    public ?int $replyToCommentId = null; // ID of the comment being replied to
    public string $replyUserName = ''; // For reply form
    public string $replyUserEmail = ''; // For reply form
    public string $replyUserWebsite = ''; // For reply form (optional)
    public string $replyText = ''; // Text for the reply
    public string $successMessage = ''; // Property to hold the success message

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
        // Load only approved top-level comments and their approved replies (recursively if needed)
        $this->comments = Comment::where('blog_id', $this->blog->id)
                                //  ->whereNull('reply_id') // Get only top-level comments
                                 ->where('is_approved', true) // Only show approved comments
                                //  ->with(['replies' => function ($query) {
                                //      $query->where('is_approved', true)->with('replies'); // Eager load approved replies, recursive for nesting
                                //  }])
                                 ->orderBy('created_at', 'desc')
                                 ->get();
    }

    public function addComment()
    {
        $this->validate([
            'userName' => $this->rules['userName'],
            'userEmail' => $this->rules['userEmail'],
            'userWebsite' => $this->rules['userWebsite'],
            'newCommentText' => $this->rules['newCommentText'],
        ]);

        Comment::create([
            'blog_id' => $this->blog->id,
            'user_name' => $this->userName,
            'user_email' => $this->userEmail,
            'user_website' => $this->userWebsite, // Assuming you add 'user_website' to $fillable in the model
            'comment_text' => $this->newCommentText,
            'reply_id' => null, // Top-level comment
        ]);

        $this->reset(['userName', 'userEmail', 'userWebsite', 'newCommentText']); // Clear form
        $this->successMessage = 'Comment added successfully!'; // Or use localization if available
        $this->loadComments(); // Reload comments
    }

    public function startReply(int $commentId)
    {
        $this->replyToCommentId = $commentId;
        // Optionally pre-fill if desired, but keeping separate
    }

    public function cancelReply()
    {
        $this->reset(['replyToCommentId', 'replyUserName', 'replyUserEmail', 'replyUserWebsite', 'replyText']);
    }

    public function addReply()
    {
        $this->validate([
            'replyUserName' => $this->rules['replyUserName'],
            'replyUserEmail' => $this->rules['replyUserEmail'],
            'replyUserWebsite' => $this->rules['replyUserWebsite'],
            'replyText' => $this->rules['replyText'],
        ]);

        Comment::create([
            'blog_id' => $this->blog->id,
            'user_name' => $this->replyUserName,
            'user_email' => $this->replyUserEmail,
            'user_website' => $this->replyUserWebsite, // Assuming added to model
            'comment_text' => $this->replyText,
            'reply_id' => $this->replyToCommentId,
        ]);

        $this->reset(['replyToCommentId', 'replyUserName', 'replyUserEmail', 'replyUserWebsite', 'replyText']); // Clear reply form
        $this->successMessage = 'Reply added successfully!'; // Or use localization
        $this->loadComments(); // Reload comments
    }

    public function render()
    {
        $this->loadComments();
        return view('livewire.comment-section');
    }
}