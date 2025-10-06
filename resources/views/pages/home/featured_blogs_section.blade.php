      <!-- Featured Blog -->
      <div class="featured-blog mt-100 section-padding">
        <div class="container">
          <div class="section-headings text-center">
            <div
              class="subheading subheading-bg text-20"
              data-aos="fade-up"
            > 
              <svg
                class="icon icon-14"
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <g clip-path="url(#clip0_9088_4143)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor"
                  />
                </g>
                <defs>
                  <clipPath>
                    <rect width="14" height="14" fill="CurrentColor" />
                  </clipPath>
                </defs>
              </svg>             
              <span>Our Blog</span>
              <svg
                class="icon icon-14"
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 14 14"
                fill="none"
              >
                <g clip-path="url(#clip0_9088_4143)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor"
                  />
                </g>
                <defs>
                  <clipPath>
                    <rect width="14" height="14" fill="CurrentColor" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h2
              class="heading text-50"
              data-aos="fade-up"
              data-aos-delay="50"
            >
              Latest News From Us
            </h2>
          </div>
          <div class="section-content">
            <div class="row product-grid justify-content-center">
              @if($latestBlogs->isNotEmpty())
                  @foreach($latestBlogs as $blog)
                      @include('components.cards.blogs_card', ['blog' => $blog])
                  @endforeach
              @else
                  {{-- You can add a fallback message here if no blogs are available --}}
                  <p class="text-center text-gray-500">No featured blogs to display.</p>
              @endif             
            </div>
            
            <div class="buttons buttons-discover" data-aos="fade-up" data-aos-delay="100">
              <a
                href="{{ route('blogs') }}"
                class="button button--primary"
                aria-label="Discover more blog posts"
              >
                Discover More
                <span class="svg-wrapper">
                  <svg
                    class="icon-20"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                      fill="CurrentColor"
                    />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>