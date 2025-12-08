{{-- resources/views/livewire/show-blog-comments.blade.php --}}
<div wire:ignore.self>
    <div class="comments-section scroll-margin" id="blog-comments">
        <h2 class="comment-section-heading heading text-36" data-aos="fade-up">{{ $comments->count() }} Comments</h2>
        <ul class="comments-area list-unstyled">
            @forelse($comments->where('reply_id', null) as $comment)
                <li class="comments-item" data-aos="fade-up">
                    <div class="commentator-img">
                        <div class="user-avatar" data-letter="{{ strtoupper(substr($comment->user_name, 0, 1)) }}">
                            {{ strtoupper(substr($comment->user_name, 0, 1)) }}
                        </div>
                    </div>
                    <div class="comment-details">
                        <div class="comments-top">
                            <div class="comments-meta">
                                <div class="comment-date text text-16">{{ $comment->created_at->format('M d, Y') }}</div>
                                <h2 class="commentator-name heading text-22">{{ $comment->user_name }}</h2>
                            </div>
                            @if(!$replyToCommentId) 
                            <div class="button-reply text text-16 fw-500" wire:click="startReply({{ $comment->id }})">
                                <svg viewBox="0 0 18 14" fill="none"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>
                                Reply
                            </div>
                            @endif
                        </div>
                        <p class="comment-bottom text text-16">{{ $comment->comment_text }}</p>
                    </div>
                </li>
                
                    {{-- Display Replies for this comment --}}
                    @if($comment->replies->isNotEmpty())
                    <li class="comments-item {{ $comment->reply_id ? 'replied-item' : '' }}" data-aos="fade-up">
                        <div class="replies-container ml-16 mt-4 space-y-4 border-l-2 border-gray-200 pl-6">
                            @foreach($comment->replies as $reply)
                                <div class="comments-item replied-item" data-aos="fade-up">
                                    <div class="commentator-img">
                                        <div class="user-avatar user-avatar--small" data-letter="{{ strtoupper(substr($reply->user_name, 0, 1)) }}">
                                            {{ strtoupper(substr($reply->user_name, 0, 1)) }}
                                        </div>
                                    </div>
                                    <div class="comment-details">
                                        <div class="comments-top">
                                            <div class="comments-meta">
                                                <div class="comment-date text text-16">{{ $reply->created_at->format('M d, Y') }}</div>
                                                <h2 class="commentator-name heading text-20">{{ $reply->user_name }}</h2>
                                            </div>
                                        </div>
                                        <p class="comment-bottom text text-16">{{ $reply->comment_text }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </li>
                    @endif
                
               
                    {{-- Reply Form (shown only when replying to this comment) --}}
                    @if($replyToCommentId === $comment->id) 
                    <li class="comments-item {{ $comment->reply_id ? 'replied-item' : '' }}" data-aos="fade-up">
                        <div class="reply-form mt-4 ml-8 p-4 bg-gray-50 rounded-lg" data-aos="fade-up" id="reply-comment-{{ $comment->id }}">
                            <h3 class="heading text-20 mb-3">Replying to {{ $comment->user_name }}</h3>
                            <form wire:submit.prevent="addReply" class="form contact-form">
                                <div class="field w-half" data-aos="fade-up">
                                    <input class="text text-16" type="text" placeholder="Your Name*" wire:model="replyUserName" required>
                                    @error('replyUserName') <span class="text-danger text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="field w-half" data-aos="fade-up">
                                    <input class="text text-16" type="email" placeholder="Your Email*" wire:model="replyUserEmail" required>
                                    @error('replyUserEmail') <span class="text-danger text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="field" data-aos="fade-up">
                                    <input class="text text-16" type="text" placeholder="Your Website" wire:model="replyUserWebsite">
                                    @error('replyUserWebsite') <span class="text-danger text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="field" data-aos="fade-up">
                                    <textarea class="text text-16" rows="4" placeholder="Type your reply" wire:model="replyText" required></textarea>
                                    @error('replyText') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-button flex gap-2" data-aos="fade-up">
                                    <button type="submit" class="button button--primary">Post Reply
                                        <span class="svg-wrapper">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>
                                        </span>
                                    </button>
                                    <button type="button" class="button button--primary" wire:click="cancelReply">Cancel
                                        <span class="svg-wrapper">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M15.8334 5.34166L14.6584 4.16666L10 8.825L5.34169 4.16666L4.16669 5.34166L8.82503 10L4.16669 14.6583L5.34169 15.8333L10 11.175L14.6584 15.8333L15.8334 14.6583L11.175 10L15.8334 5.34166Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </li>
                    @endif
               
            @empty
                <p class="text text-16">No comments yet.</p>
            @endforelse
        </ul>
    </div>

    <!-- Main Comment Form (only show when not replying) -->
    @if(!$replyToCommentId)
    <div class="comments-form">
        <div class="comments-form-headings">
            <h2 class="heading text-36" data-aos="fade-up">Leave a Comment</h2>
            <p class="text text-16" data-aos="fade-up">Your email address will not be published. Required fields are marked *</p>
        </div>
        <form wire:submit.prevent="addComment" class="form contact-form">
            <div class="field w-half" data-aos="fade-up">
                <input class="text text-16" type="text" placeholder="Your Name*" wire:model="userName" required>
                @error('userName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="field w-half" data-aos="fade-up">
                <input class="text text-16" type="email" placeholder="Your Email*" wire:model="userEmail" required>
                @error('userEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="field" data-aos="fade-up">
                <input class="text text-16" type="text" placeholder="Your Website" wire:model="userWebsite">
                @error('userWebsite') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="field" data-aos="fade-up">
                <textarea class="text text-16" rows="4" placeholder="Type your message" wire:model="newCommentText" required></textarea>
                @error('newCommentText') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="form-button" data-aos="fade-up">
                <button type="submit" class="button button--primary">Post Comment
                    <span class="svg-wrapper">
                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>
                    </span>
                </button>
            </div>
        </form>

        {{-- Success Message --}}
        @if ($successMessage)
            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-md" data-aos="fade-up">
                {{ $successMessage }}
            </div>
        @endif
    </div>
    @endif
</div>
@script
<script>
    Livewire.on('scroll-to-reply', (event) => {
        setTimeout(() => {
            const form = document.getElementById('reply-comment-' + event.commentId);
            if (form) {
                form.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                    inline: 'nearest'
                });
                // Optional offset for fixed headers (adjust -80px)
                const formTop = form.getBoundingClientRect().top + window.scrollY;
                const offset = 350;  // Your header height + buffer
                window.scrollTo({
                    top: formTop - offset,
                    behavior: 'smooth'
                });
            }
        }, 200);  // 200ms delay for AOS animations to settle
    });

    Livewire.on('scroll-to-comments', () => {
        setTimeout(() => {
            const section = document.getElementById('blog-comments');
            if (section) {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }, 100);
    });
</script>
@endscript
