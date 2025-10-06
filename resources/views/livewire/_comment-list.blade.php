@props(['comment'])

{{-- A single comment item. Replies are offset to the right. --}}
<li class="comments-item {{ $comment->reply_id ? 'replied-item ml-6 md:ml-12 border-l border-indigo-200 pl-4 transition-all duration-300' : '' }} py-4">
    <div class="flex items-start space-x-4">
        {{-- Commentator Image (Placeholder with initials) --}}
        <div class="commentator-img flex-shrink-0">
            @php
                $initial = strtoupper(substr($comment->user_name, 0, 1));
            @endphp
            <img src="{{ 'https://placehold.co/110x110/6366F1/ffffff?text=' . $initial }}" 
                 alt="{{ $comment->user_name }} Avatar" 
                 class="w-14 h-14 rounded-full object-cover ring-2 ring-indigo-500 ring-offset-2" 
                 width="110" height="110" loading="lazy">
        </div>
        
        <div class="comment-details flex-grow">
            <div class="comments-top flex justify-between items-center mb-1">
                <div class="comments-meta">
                    <h2 class="commentator-name text-lg font-semibold text-gray-900">{{ $comment->user_name }}</h2>
                    <div class="comment-date text-sm text-gray-500">{{ $comment->created_at->format('M d, Y \a\t H:i') }}</div>
                </div>
                <button type="button" 
                        wire:click="setReply({{ $comment->id }})"
                        class="button-reply text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors flex items-center p-2 rounded-full hover:bg-indigo-50">
                    <svg class="w-4 h-4 mr-1" viewBox="0 0 18 14" fill="none"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>
                    Reply
                </button>
            </div>
            <p class="comment-bottom text-gray-700 mt-2">{{ $comment->comment_text }}</p>

            {{-- Display Reply Form for THIS specific comment if replyId matches --}}
            @if($replyId === $comment->id)
                <div class="mt-4 border-t pt-4 bg-gray-50 p-4 rounded-lg shadow-inner">
                    <h4 class="text-md font-bold mb-2 text-gray-700">Replying to {{ $comment->user_name }}</h4>
                    <form wire:submit.prevent="postComment" class="space-y-3">
                        <div class="field">
                            <textarea wire:model.live="commentText" class="w-full p-3 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 text-sm resize-none" rows="2" placeholder="Type your reply*" required></textarea>
                            @error('commentText') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="field">
                            <input wire:model.live="userName" type="text" class="w-full p-3 border rounded-lg text-sm" placeholder="Your Name*" required>
                            @error('userName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                         <div class="field">
                            <input wire:model.live="userEmail" type="email" class="w-full p-3 border rounded-lg text-sm" placeholder="Your Email*" required>
                            @error('userEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-button flex space-x-2">
                            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-150 text-sm shadow-md"
                                wire:loading.attr="disabled">
                                <span wire:loading.remove wire:target="postComment">Post Reply</span>
                                <span wire:loading wire:target="postComment">Posting...</span>
                            </button>
                            <button type="button" wire:click="setReply(null)" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 transition duration-150 text-sm">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            @endif

            {{-- Recursively display replies --}}
            @if($comment->replies->isNotEmpty())
                <ul class="comments-area list-unstyled mt-4 space-y-4 border-t pt-4">
                    @foreach($comment->replies as $reply)
                        @include('livewire._comment-list', ['comment' => $reply])
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</li>
