<div class="p-4 rounded-lg shadow-md bg-white/70 backdrop-blur-sm transition duration-300 hover:shadow-lg" id="comment-{{ $comment->id }}">
<!-- Comment Content Display -->
<div class="flex space-x-3">
<!-- Avatar Placeholder -->
<div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold text-sm">
{{ strtoupper(substr($comment->author_name, 0, 2)) }}
</div>

    <div class="flex-1 min-w-0">
        <!-- Author and Metadata -->
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm font-semibold text-gray-900">
                    {{ $comment->author_name }}
                    @if ($comment->is_owner)
                        <span class="ml-2 px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-indigo-100 text-indigo-800">Author</span>
                    @endif
                </p>
                <p class="text-xs text-gray-500 mt-0.5">
                    Commented <time datetime="{{ $comment->created_at->toISOString() }}">{{ $comment->created_at->diffForHumans() }}</time>
                    @if ($comment->updated_at > $comment->created_at)
                        (edited)
                    @endif
                </p>
            </div>

            <!-- User Actions Dropdown (Edit/Delete) -->
            @if ($canEdit || $canDelete)
                <div class="relative" x-data="{ open: false }">
                    <button type="button" @click="open = !open" class="text-gray-500 hover:text-gray-700 p-1 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                    </button>

                    <div x-show="open" @click.away="open = false" x-cloak
                        class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10 origin-top-right">
                        <div class="py-1">
                            @if ($canEdit)
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" wire:click.prevent="edit" @click="open = false">
                                    Edit
                                </a>
                            @endif
                            @if ($canDelete)
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50" wire:click.prevent="confirmDeletion" @click="open = false">
                                    Delete
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Comment Body: Viewing Mode -->
        @if (!$isEditing)
            <p class="mt-2 text-gray-700 text-base leading-relaxed whitespace-pre-line">
                {{ $comment->content }}
            </p>
        @endif

        <!-- Comment Body: Editing Mode -->
        @if ($isEditing)
            <form wire:submit.prevent="save" class="mt-3 space-y-3">
                <textarea wire:model.defer="newCommentContent" rows="3"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 resize-none"
                    placeholder="Edit your comment..."></textarea>

                @error('newCommentContent') <p class="text-sm text-red-600">{{ $message }}</p> @enderror

                <div class="flex justify-end space-x-2">
                    <button type="button" wire:click="cancelEdit" class="px-3 py-1 text-sm font-medium text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" class="px-3 py-1 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 disabled:opacity-50" wire:loading.attr="disabled">
                        Save Changes
                    </button>
                </div>
            </form>
        @endif

        <!-- Footer: Like & Reply Actions -->
        <div class="mt-3 flex items-center space-x-4 border-t border-gray-100 pt-3">
            <!-- Like Button (Toggles state) -->
            <button wire:click="toggleLike" class="flex items-center space-x-1 text-sm transition duration-150 ease-in-out
                @if ($isLiked) text-indigo-600 hover:text-indigo-700 @else text-gray-500 hover:text-gray-600 @endif">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                <span>{{ $likesCount }} {{ Str::plural('Like', $likesCount) }}</span>
            </button>

            <!-- Reply Placeholder (Requires a nested component structure, just a placeholder click here) -->
            <button wire:click.prevent="openReplyForm" class="flex items-center space-x-1 text-sm text-gray-500 hover:text-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a4 4 0 014 4v2a4 4 0 01-4 4H3l-4 4V4a4 4 0 014-4h18a4 4 0 014 4v4a4 4 0 01-4 4h-10z"/></svg>
                <span>Reply</span>
            </button>
        </div>
    </div>
</div>

<!-- Livewire Modal for Deletion Confirmation (requires wire:model on component property like $isConfirmingDeletion) -->
@if ($isConfirmingDeletion)
    <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-xl max-w-sm mx-auto space-y-4">
            <h3 class="text-lg font-semibold text-red-600">Confirm Deletion</h3>
            <p class="text-gray-600">Are you sure you want to delete this comment? This action cannot be undone.</p>
            <div class="flex justify-end space-x-3">
                <button wire:click="cancelDeletion" class="px-4 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100">
                    Cancel
                </button>
                <button wire:click="delete" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700">
                    Delete Comment
                </button>
            </div>
        </div>
    </div>
@endif

<!-- Nested Replies Container -->
@if ($comment->children->count())
    <div class="mt-4 pl-8 border-l-2 border-indigo-100 space-y-4">
        @foreach ($comment->children as $reply)
            <!-- IMPORTANT: Recursively call the same Livewire component for replies -->
            <!-- The Livewire component class must handle this recursion -->
            @livewire('blog-comment-item', ['comment' => $reply, 'key' => $reply->id], key($reply->id))
        @endforeach
    </div>
@endif

</div>