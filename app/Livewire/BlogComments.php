<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment; 

class BlogComments extends Component
{
    // Properties for the parent component's state
    // Use 'blog_id' to match the column name in your Comment model
    public int $blogId; 
    
    // Holds the collection of top-level comments
    public $comments; 

    // Properties for the 'New Comment' form
    // Use 'newCommentText' and 'newUserName' to match your model's intent
    public string $newCommentText = '';
    public string $newUserName = 'Guest'; 
    public string $newUserEmail = ''; // Assuming you want to collect this too

    // Livewire event listener to handle when an item component confirms deletion
    protected $listeners = ['commentDeleted' => 'removeCommentFromList'];

    /**
     * Called when the component is first mounted.
     * Use this to fetch the initial data (parent comments only).
     */
    public function mount(int $blogId)
    {
        $this->blogId = $blogId;
        $this->loadComments();
    }

    /**
     * Fetches top-level comments for the current post/blog.
     * It eager-loads the 'replies' relationship defined in your Comment model.
     */
    public function loadComments()
    {
        $this->comments = Comment::with('replies') // Eager load children using your model's method
            ->where('blog_id', $this->blogId)
            ->whereNull('reply_id') // Filters for top-level comments
            ->where('is_approved', true) // Assuming you only want to show approved comments
            ->latest()
            ->get();
    }

    /**
     * Handles the submission of the new comment form.
     */
    public function postComment()
    {
        // 1. Validation
        $this->validate([
            'newCommentText' => 'required|min:5',
            'newUserName' => 'required|string|max:50',
            'newUserEmail' => 'nullable|email|max:255',
        ]);

        // 2. Create and save the new comment. 
        // Note: is_approved is set to false by default for moderation, 
        // you can change this if you want instant posting.
        $newComment = Comment::create([
            'blog_id' => $this->blogId,
            'user_name' => $this->newUserName,
            'user_email' => $this->newUserEmail,
            'comment_text' => $this->newCommentText,
            'is_approved' => false, // Requires moderator approval
            'reply_id' => null, // Top-level comment
        ]);

        // 3. Clear the form content but keep the user details if they provided them
        $this->reset(['newCommentText']);

        // 4. Provide feedback (since it might need approval)
        $this->dispatch('notify', 'Your comment has been submitted for approval.');
        
        // We do NOT reload the comments here because the new comment is 'unapproved' (is_approved=false)
        // and loadComments() filters for approved comments.
    }
    
    /**
     * Listens for the 'commentDeleted' event emitted by the item component.
     * Removes the item from the collection in memory.
     */
    public function removeCommentFromList(int $commentId)
    {
        // Filter out the deleted comment from the collection in memory
        $this->comments = $this->comments->reject(fn ($comment) => $comment->id === $commentId);
    }

    public function render()
    {
        // Renders the blade file located at resources/views/livewire/blog-comments.blade.php
        return view('livewire.blog-comments');
    }
}
