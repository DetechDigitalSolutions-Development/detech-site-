                    <!-- Comments Section -->
                    <div class="comments-section scroll-margin" id="blog-comments">
                        <h2 class="comment-section-heading heading text-36" data-aos="fade-up">2 Comments</h2>
                        <ul class="comments-area list-unstyled">
                            @foreach([['c1.jpg', 'Ralph Edwards'], ['c2.jpg', 'Sara Joseph'], ['c3.jpg', 'Andrew Naeem']] as $comment)
                            <li class="comments-item {{ $loop->index == 1 ? 'replied-item' : '' }}" data-aos="fade-up">
                                <div class="commentator-img">
                                    <img src="assets/img/blog/{{ $comment[0] }}" alt="image" width="110" height="110" loading="lazy">
                                </div>
                                <div class="comment-details">
                                    <div class="comments-top">
                                        <div class="comments-meta">
                                            <div class="comment-date text text-16">Aug 28, 2025</div>
                                            <h2 class="commentator-name heading text-22">{{ $comment[1] }}</h2>
                                        </div>
                                        <div class="button-reply text text-16 fw-500">
                                            <svg viewBox="0 0 18 14" fill="none"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>
                                            Reply
                                        </div>
                                    </div>
                                    <p class="comment-bottom text text-16">Our advanced energy storage solutions allow you to store excess energy generated from renewable sources like solar and wind.</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Comment Form -->
                    <div class="comments-form">
                        <div class="comments-form-headings">
                            <h2 class="heading text-36" data-aos="fade-up">Leave a reply</h2>
                            <p class="text text-16" data-aos="fade-up">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form action="#" class="form contact-form">
                            <div class="field w-half" data-aos="fade-up">
                                <input id="CommentFormname" class="text text-16" type="text" placeholder="Your Name*" name="name" required>
                            </div>
                            <div class="field w-half" data-aos="fade-up">
                                <input id="CommentFormemail" class="text text-16" type="text" placeholder="Your Email*" name="email" required>
                            </div>
                            <div class="field" data-aos="fade-up">
                                <input id="CommentFormWebsite" class="text text-16" type="text" placeholder="Your Website*" name="website">
                            </div>
                            <div class="field" data-aos="fade-up">
                                <textarea id="CommentFormbody" class="text text-16" rows="4" placeholder="Type your message" name="message" required></textarea>
                            </div>
                            <div class="form-button" data-aos="fade-up">
                                <button type="submit" class="button button--primary">Post Comment
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>