<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment; 

class BlogCommentItem extends Component
{
    // Required property: the comment model instance
    // Livewire will automatically inject the Comment model based on the route or parent loop.
    public Comment $comment;

    // State properties for the item component
    public bool $isEditing = false;
    public bool $isConfirmingDeletion = false;
    
    // Uses the model's specific field name for content
    public string $newCommentText; 
    
    // Placeholder properties for interactive features (e.g., likes)
    public int $likesCount = 0; // Assuming a 'likes_count' field or similar
    public bool $isLiked = false; 
    
    // Authorization flags
    public bool $canEdit = false;
    public bool $canDelete = false;

    /**
     * Initialization logic, runs once when the component is loaded.
     */
    public function mount(Comment $comment)
    {
        $this->comment = $comment;
        
        // Initialize the editing state with the current comment_text
        $this->newCommentText = $comment->comment_text; 

        // Placeholder for initial state (e.g., fetching actual likes count)
        $this->likesCount = 0; 

        // Simplified Permission Check: 
        // We assume the Comment table has a 'user_id' for ownership tracking
        $isAuthor = auth()->check() && auth()->id() === $comment->user_id;
        $this->canEdit = $isAuthor;
        $this->canDelete = $isAuthor;
    }

    // --- Editing Methods ---

    public function edit()
    {
        if (!$this->canEdit) {
            $this->dispatch('notify', 'You do not have permission to edit this comment.');
            return;
        }
        $this->isEditing = true;
    }

    public function cancelEdit()
    {
        $this->isEditing = false;
        // Reset the content to the original state if the user cancels
        $this->newCommentText = $this->comment->comment_text;
    }

    public function save()
    {
        // 1. Validation using the specific field name
        $this->validate([
            'newCommentText' => 'required|min:5',
        ]);

        // 2. Update the model using the specific field name
        $this->comment->comment_text = $this->newCommentText;
        $this->comment->save();

        $this->isEditing = false;
        $this->dispatch('notify', 'Comment updated successfully.');
    }

    // --- Deletion Methods ---

    public function confirmDeletion()
    {
        $this->isConfirmingDeletion = true;
    }

    public function cancelDeletion()
    {
        $this->isConfirmingDeletion = false;
    }

    public function delete()
    {
        if (!$this->canDelete) {
            $this->dispatch('notify', 'You do not have permission to delete this comment.');
            return;
        }

        $commentId = $this->comment->id;

        // Delete the comment from the database
        $this->comment->delete();
        
        // Emit an event up to the parent component (BlogComments) 
        // so it can remove the item from its collection without a full reload.
        $this->dispatch('commentDeleted', $commentId);
        
        $this->dispatch('notify', 'Comment successfully deleted.');
    }

    // --- Interaction Methods (Placeholder) ---

    public function toggleLike()
    {
        // In a real app, this would involve a database transaction.
        if ($this->isLiked) {
            $this->likesCount--;
        } else {
            $this->likesCount++;
        }
        $this->isLiked = !$this->isLiked;
        // dispatching an event here to update other components that might rely on this count
        $this->dispatch('commentLiked', $this->comment->id, $this->likesCount); 
    }

    public function render()
    {
        return view('livewire.blog-comment-item');
    }
}
