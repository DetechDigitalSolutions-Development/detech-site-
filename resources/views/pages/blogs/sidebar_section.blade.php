                <!-- Sidebar -->
                <div class="col-12 col-lg-5">
                    <div class="sidebar-filter drawer-blog-sidebar">
                        <div class="drawer-headings d-lg-none" data-aos="fade-up">
                            <div class="heading text-24">Filter</div>
                            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-blog-sidebar">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"><path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" fill="currentColor"></path></svg>
                            </drawer-opener>
                        </div>
                        
                        <aside class="blog-sidebar">
                            <!-- Search Widget -->
                            {{-- <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Search Here</h2>
                                <form action="#" class="form-blog-search">
                                    <input type="text" id="blog-search-input" name="blog-search" placeholder="Search here" class="text-18">
                                    <button type="submit" class="button button--primary">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M2.5 8.33333C2.5 9.09938 2.65088 9.85792 2.94404 10.5657C3.23719 11.2734 3.66687 11.9164 4.20854 12.4581C4.75022 12.9998 5.39328 13.4295 6.10101 13.7226C6.80875 14.0158 7.56729 14.1667 8.33333 14.1667C9.09938 14.1667 9.85792 14.0158 10.5657 13.7226C11.2734 13.4295 11.9164 12.9998 12.4581 12.4581C12.9998 11.9164 13.4295 11.2734 13.7226 10.5657C14.0158 9.85792 14.1667 9.09938 14.1667 8.33333C14.1667 7.56729 14.0158 6.80875 13.7226 6.10101C13.4295 5.39328 12.9998 4.75022 12.4581 4.20854C11.9164 3.66687 11.2734 3.23719 10.5657 2.94404C9.85792 2.65088 9.09938 2.5 8.33333 2.5C7.56729 2.5 6.80875 2.65088 6.10101 2.94404C5.39328 3.23719 4.75022 3.66687 4.20854 4.20854C3.66687 4.75022 3.23719 5.39328 2.94404 6.10101C2.65088 6.80875 2.5 7.56729 2.5 8.33333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.5 17.5L12.5 12.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                </form>
                            </div> --}}

                            <!-- Categories Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Categories</h2>
                                <ul class="blog-categories list-unstyled">
                                    @foreach($blog->categories as $category)
                                    <li>
                                        <a class="blog-category subheading subheading-bg text-18 fw-400">
                                            {{ $category }}
                                            <svg viewBox="0 0 18 16" fill="none"><path d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z" fill="currentColor"/></svg>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Recent Posts Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Recent Post</h2>
                                <ul class="recent-post list-unstyled">
                                    @foreach($latestBlogs as $blog)
                                    <li>
                                        <div class="card-blog-list">
                                            <div class="card-blog-list-media">
                                                <a href="{{ route('blogs.show', $blog->id) }}">
                                                    <img src="{{ Storage::disk(config('public'))->url($blog->featured_img) }}" alt="blog image" width="1000" height="707" loading="lazy">
                                                </a>
                                                </div>
                                            <div class="card-blog-content">
                                                <div class="card-blog-meta">
                                                    <div class="card-blog-meta-item text text-16">{{ $blog->created_at->format('jS M, Y') }}</div>
                                                </div>
                                                <h2 class="card-blog-heading heading text-20">
                                                    <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Tags Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Tags</h2>
                                <ul class="sidebar-tags list-unstyled">
                                    @foreach($blog->tags as $tag)
                                        <li><a class="subheading subheading-bg text-18">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>