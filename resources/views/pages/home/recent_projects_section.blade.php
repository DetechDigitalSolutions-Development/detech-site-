      <!-- Recent Projects -->
      <project-slider class="project-slider mt-100">
        <div class="container">
          <div class="section-headings headings-width text-center">
            <div
              class="subheading text-20 subheading-bg"
              data-aos="fade-up"
              data-aos-delay="10"
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
              <span>Recent Projects</span>
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
            <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="20">
              Explore the Recent Works We Have Done!
            </h2>
          </div>
        </div>

        <div class="section-content">
          <div class="container-fluid slider-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper">
              <div class="swiper-wrapper">
                @foreach($recentProjects as $project)
                  @include('components.cards.projects_card', ['swiperSlideClass' => 'true'],['project' => $project])
                @endforeach      
              </div>
            </div>
          </div>

          <div class="container">
            <div class="swiper-nav-border" data-aos="fade-up" data-aos-delay="150">
              <div class="swiper-nav-inner">
                <div class="swiper-button-prev">
                  <svg
                    viewBox="0 0 8 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.910711 5.40903C0.754485 5.5653 0.666722 5.77723 0.666722 5.9982C0.666722 6.21917 0.754485 6.43109 0.910711 6.58736L5.62488 11.3015C5.70175 11.3811 5.7937 11.4446 5.89537 11.4883C5.99704 11.532 6.10639 11.5549 6.21704 11.5559C6.32769 11.5569 6.43742 11.5358 6.53984 11.4939C6.64225 11.452 6.7353 11.3901 6.81354 11.3119C6.89178 11.2336 6.95366 11.1406 6.99556 11.0382C7.03746 10.9357 7.05855 10.826 7.05759 10.7154C7.05662 10.6047 7.03364 10.4954 6.98996 10.3937C6.94629 10.292 6.8828 10.2001 6.80321 10.1232L2.67821 5.9982L6.80321 1.8732C6.95501 1.71603 7.039 1.50553 7.03711 1.28703C7.03521 1.06853 6.94757 0.859522 6.79306 0.705015C6.63855 0.550508 6.42954 0.462868 6.21104 0.460969C5.99255 0.45907 5.78205 0.543066 5.62488 0.694864L0.910711 5.40903Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="swiper-button-next">
                  <svg
                    viewBox="0 0 8 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </project-slider>