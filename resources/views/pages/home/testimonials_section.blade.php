      <!-- Testimonial -->
      <testi-slider class="testi-slider team-slider mt-100">
        <div class="container">
          <div class="section-headings headings-width text-center">
            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
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
              <span>Testimonial</span>
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
            <h2 class="heading text-50" data-aos="fade-up">
              See what our customers have to say about us
            </h2>
          </div>
        </div>

        <div class="section-content" data-aos="fade-up">
          <div class="container">
            <div class="swiper">
              <div class="swiper-wrapper">
              @foreach($testimonials as $testimonial)
                <div class="swiper-slide">
                  <div
                    class="card-testimonial radius18"
                    data-aos="fade-up"
                    data-aos-delay="10"
                  >
                    <ul class="rating-list list-unstyled">
                      @for($i=0; $i < ($testimonial->rating ?? 5); $i++)
                      <li class="rating-icon">
                        <svg
                          class="icon icon-24"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                            fill="CurrentColor"
                          />
                        </svg>
                      </li>
                      @endfor
                    </ul>
                    <p class="text text-24">
                      “ {{ $testimonial->comments}} ”
                    </p>
                    <div class="user-info-wrap">
                      <div class="user-info">
                        <div class="user-img">
                          <img
                            src="{{ Storage::disk(config('public'))->url( $testimonial->profile_img ) }}"
                            width="80"
                            height="80"
                            loading="lazy"
                            alt="image"
                          >
                        </div>
                        <div class="user-name-desig">
                          <h2 class="user-name heading text-24">
                            {{ $testimonial->name}}
                          </h2>
                          <div class="user-desig text text-18">
                            {{ $testimonial->designation}}
                          </div>
                        </div>
                      </div>
                      <div class="icon-quote">
                        <svg
                          class="icon icon-62"
                          width="62"
                          height="62"
                          viewBox="0 0 62 62"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M14.5312 9.41406C6.51702 9.41406 0 15.9329 0 23.9453C0 31.2606 5.43154 37.3306 12.4771 38.3311C11.9131 42.4287 10.3486 46.3275 7.90415 49.7085C7.42874 50.3683 7.44654 51.2624 7.9538 51.9009C8.4515 52.5292 9.31635 52.7674 10.0754 52.4473C21.6088 47.6332 29.0625 36.4438 29.0625 23.9453C29.0625 15.9329 22.5455 9.41406 14.5312 9.41406ZM47.4688 9.41406C39.4545 9.41406 32.9375 15.9329 32.9375 23.9453C32.9375 31.2606 38.369 37.3306 45.4146 38.3311C44.8506 42.4287 43.2861 46.3275 40.8417 49.7085C40.3662 50.3683 40.384 51.2624 40.8913 51.9009C41.389 52.5292 42.2538 52.7674 43.0129 52.4473C54.5463 47.6332 62 36.4438 62 23.9453C62 15.9329 55.483 9.41406 47.4688 9.41406Z"
                            fill="CurrentColor"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>               
              @endforeach  
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </testi-slider>