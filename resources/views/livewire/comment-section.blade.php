{{-- resources/views/livewire/show-blog-comments.blade.php --}}
<div wire:ignore.self>
    <div class="comments-section scroll-margin" id="blog-comments">
        <h2 class="comment-section-heading heading text-36" data-aos="fade-up">{{ $comments->count() }} Comments</h2>
        <ul class="comments-area list-unstyled">
            @forelse($comments as $comment)
                <li class="comments-item {{ $comment->reply_id ? 'replied-item' : '' }}" data-aos="fade-up">
                    <div class="commentator-img">
                        {{-- Placeholder image; in a real setup, use user avatar if available --}}
                        <img src="{{asset('assets/img/blog/c1.jpg')}}" alt="image" width="110" height="110" loading="lazy">
                    </div>
                    <div class="comment-details">
                        <div class="comments-top">
                            <div class="comments-meta">
                                <div class="comment-date text text-16">{{ $comment->created_at->format('M d, Y') }}</div>
                                <h2 class="commentator-name heading text-22">{{ $comment->user_name }}</h2>
                            </div>
                            <div class="button-reply text text-16 fw-500" wire:click="startReply({{ $comment->id }})">
                                <svg viewBox="0 0 18 14" fill="none"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>
                                Reply
                            </div>
                        </div>
                <p class="comment-bottom text text-16">{{ $comment->comment_text }}</p>

                </li>
            @empty
                <p class="text text-16">No comments yet.</p>
            @endforelse
        </ul>
    </div>

    <!-- Comment Form -->
    <div class="comments-form">
        <div class="comments-form-headings">
            <h2 class="heading text-36" data-aos="fade-up">Leave a reply</h2>
            <p class="text text-16" data-aos="fade-up">Your email address will not be published. Required fields are marked *</p>
        </div>
        <form wire:submit.prevent="addComment" class="form contact-form">
            <div class="field w-half" data-aos="fade-up">
                <input id="userName" class="text text-16" type="text" placeholder="Your Name*" wire:model.live="userName" required>
                @error('userName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="field w-half" data-aos="fade-up">
                <input id="userEmail" class="text text-16" type="email" placeholder="Your Email*" wire:model.live="userEmail" required>
                @error('userEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="field" data-aos="fade-up">
                <input id="userWebsite" class="text text-16" type="text" placeholder="Your Website" wire:model.live="userWebsite">
                @error('userWebsite') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="field" data-aos="fade-up">
                <textarea id="newCommentText" class="text text-16" rows="4" placeholder="Type your message" wire:model.live="newCommentText" required></textarea>
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
            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-md">
                {{ $successMessage }}
            </div>
        @endif
    </div>
</div>
