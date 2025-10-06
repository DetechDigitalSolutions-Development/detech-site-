<!--
    This file is used recursively to display nested replies.
    Requires: $comment (App\Models\Comment)
-->
<li class="comments-item @if($comment->reply_id) replied-item @endif"
    data-aos="fade-up"
    x-data="{ showReply: $wire.entangle('showReplyFormFor').defer }"
>
    <div class="commentator-img">
        <!-- Using a simple placeholder for the image since we don't have user avatars -->
        <img src="https://placehold.co/110x110/82b145/ffffff?text={{ strtoupper(substr($comment->user_name, 0, 1)) }}" alt="{{ $comment->user_name }}" width="110" height="110" loading="lazy">
    </div>
    <div class="comment-details">
        <div class="comments-top">
            <div class="comments-meta">
                <div class="comment-date text text-16">{{ $comment->created_at->format('jS M, Y') }}</div>
                <h2 class="commentator-name heading text-22">{{ $comment->user_name }}</h2>
            </div>
            <div class="button-reply text text-16 fw-500">
                <!-- Alpine.js click handler to toggle the reply form and set the parent comment ID in Livewire -->
                <button type="button"
                        @click="
                            if (showReply === {{ $comment->id }}) {
                                showReply = null;
                                $wire.set('replyId', null);
                            } else {
                                showReply = {{ $comment->id }};
                                $wire.set('replyId', {{ $comment->id }});
                                $nextTick(() => document.getElementById('CommentFormname').focus());
                            }
                        ">
                    <svg viewBox="0 0 18 14" fill="none"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>
                    Reply
                </button>
            </div>
        </div>
        <p class="comment-bottom text text-16">{{ $comment->comment_text }}</p>

        <!-- Reply Form - Controlled by Alpine.js/Livewire state -->
        <div class="reply-form-container mt-6"
             x-show="showReply === {{ $comment->id }}"
             x-transition:enter.duration.500ms
             x-transition:leave.duration.300ms
        >
            <!-- Render the main Livewire form, but scoped to this replyId via Livewire's $replyId property -->
            <div class="comments-form-headings">
                 <h3 class="heading text-22">Replying to {{ $comment->user_name }}</h3>
                 <p class="text text-14 text-gray-500">Submit your reply below. Click "Reply" again to close.</p>
            </div>
            
        </div>
    </div>
    
    <!-- Recursively display replies -->
    @if ($comment->replies->isNotEmpty())
        <ul class="comments-area list-unstyled ml-8 mt-6">
            @foreach ($comment->replies as $reply)
                @include('livewire.blog-comment-item', ['comment' => $reply])
            @endforeach
        </ul>
    @endif
</li>
