@extends('layouts.app')

@section('content')
   <main>
        @include('components.page_banner', ['title' => 'Services Details')
        <!-- Service Details -->
      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <button class="secvice-category" onclick="showService('ui-design')">
                          <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          User Interface Design
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </button>
                      </li>
                      <li>
                        <div class="service-category" onclick="showService('ux-optimization')">
                          <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          User Experience Optimization
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </div>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Mobile & Web App Design
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Wireframing & Prototyping
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Usability Testing
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Brand & Visual Identity Design
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden"
                          >Call us at +12345.6789.333 number</span
                        >
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        +12345.6789.333
                      </a>
                    </div>
                  </div>
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <div class="service-download">
                      <h2 class="heading text-24">Download Our Brochures</h2>
                      <div class="service-download">
                        <svg
                          class="icon-50"
                          width="50"
                          height="50"
                          viewBox="0 0 50 50"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M43.2812 13.875L33.0312 3.5625L31.9375 3.125H7.8125L6.25 4.6875V21.875H9.375V6.25H28.125V17.1875L29.6875 18.75H40.625V21.875H43.75V15L43.2812 13.875ZM31.25 15.625V6.25L40.625 15.625H31.25ZM7.8125 25L6.25 26.5625V45.3125L7.8125 46.875H42.1875L43.75 45.3125V26.5625L42.1875 25H7.8125ZM40.625 40.625V43.75H9.375V28.125H40.625V40.625ZM15.625 37.5H14.625V40.625H12.5V31.25H15.8125C18.1562 31.25 19.3438 32.375 19.3438 34.375C19.3498 34.8001 19.2635 35.2214 19.0909 35.6098C18.9182 35.9983 18.6633 36.3447 18.3438 36.625C17.5693 37.2287 16.6062 37.5386 15.625 37.5ZM15.4375 32.9688H14.625V35.875H15.4375C16.5625 35.875 17.125 35.375 17.125 34.4062C17.125 33.4375 16.5625 32.9688 15.4375 32.9688ZM28.125 39.3125C28.5865 38.8579 28.9474 38.3115 29.1843 37.7085C29.4211 37.1056 29.5287 36.4597 29.5 35.8125C29.5 32.6875 27.8438 31.25 24.5 31.25H21.1875V40.625H24.5C25.161 40.657 25.8218 40.5575 26.4441 40.3322C27.0664 40.1069 27.6377 39.7603 28.125 39.3125ZM23.2812 38.9062V32.9688H24.3125C24.7111 32.9434 25.1106 32.9996 25.4868 33.134C25.8629 33.2683 26.2076 33.4779 26.5 33.75C26.7649 34.0281 26.9706 34.3571 27.1049 34.7169C27.2392 35.0768 27.2992 35.4601 27.2812 35.8438C27.3281 36.6675 27.0472 37.4763 26.5 38.0938C26.2139 38.3675 25.8754 38.5806 25.5049 38.7202C25.1343 38.8599 24.7394 38.9231 24.3438 38.9062H23.2812ZM37.1875 37H34.1562V40.625H32.0312V31.25H37.4688V32.9688H34.1562V35.2812H37.1875V37Z"
                            fill="CurrentColor"
                          />
                        </svg>
                        <div class="download-text">
                          <div class="text text-16">
                            Business is a marketing discipline focused on
                            growing visibility organ (non-paid) technic
                            required.
                          </div>
                          <a
                            href="#"
                            class="download-button text text-14 fw-600"
                            aria-label="download"
                          >
                            Click here to download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  User Interface Design
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Our UI Design focuses on creating clean, modern, and visually engaging interfaces that reflect your brand identity while ensuring ease of use. 
                  We believe that a great interface is more than just aesthetics it’s about clarity, consistency, and guiding users effortlessly through your digital products. 
                  By combining creativity with usability standards, we design interfaces that not only look appealing but also enhance functionality and improve user satisfaction.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          we believe that great design is the foundation of every successful digital product. Our UI/UX design approach goes beyond visuals—we focus on building seamless, intuitive, and engaging user experiences that connect with people and drive results. 
                          Every interface is designed with clarity, consistency, and usability in mind, ensuring that users can interact effortlessly with your product.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Future among us
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Make a Deal with Our Company
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Contact with Our Help Desk
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Ready to Use Solar Energy
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  We combine creative innovation with proven user centered design principles to craft solutions that are both beautiful and functional. From wireframing and prototyping to usability testing and brand identity design, our team ensures that every detail is carefully tailored to your business goals. 
                  With Detech, your ideas are transformed into digital solutions that inspire trust, enhance engagement, and deliver measurable value.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     How does Detech approach User Interface (UI) design?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Detech provides end-to-end technology solutions including web and mobile app development, full stack software solutions, cloud integration, AI-powered applications, and IT consulting. We also specialize in delivering tailored enterprise solutions to help businesses thrive in a digital first world.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How long has Detech been in operation?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Detech has successfully completed 16+ projects and partnered with 30+ satisfied clients across industries. Our team brings years of collective experience in software development, innovation, and consulting.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Who are your main clients?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long-term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you offer digital marketing services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  User Experience Optimization
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Transform your digital products with our comprehensive UX optimization services. 
                  We analyze user behavior, identify pain points, and implement data driven improvements to enhance user satisfaction and conversion rates.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          we believe that great design is the foundation of every successful digital product. Our UI/UX design approach goes beyond visuals we focus on building seamless, intuitive, and engaging user experiences that connect with people and drive results. 
                          Every interface is designed with clarity, consistency, and usability in mind, ensuring that users can interact effortlessly with your product.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              User Research & Analysis
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Journey Mapping
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              A/B Testing
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Performance Optimization
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Our UX optimization methodology combines behavioral analytics, user testing, and conversion optimization techniques to deliver measurable improvements in user engagement and business outcomes. 
                 We don't just redesign—we strategically enhance based on real user data.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     How do you measure UX optimization success?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We track key metrics including user engagement, conversion rates, task completion rates, and user satisfaction scores to measure the impact of our optimization efforts.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What tools do you use for UX analysis?

                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We utilize advanced tools like heatmap analysis, user session recordings, A/B testing platforms, and analytics dashboards to gather comprehensive user behavior insights.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Who are your main clients?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you offer digital marketing services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            
            
            
            
            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Mobile & Web App Design
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Create stunning mobile and web applications that work seamlessly across all devices. Our responsive design approach ensures your users have a consistent experience whether they're on desktop, tablet, or mobile.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <!-- <p class="text text-18">
                          We specialize in progressive web apps (PWAs) and native mobile experiences that deliver exceptional performance. Our designs adapt fluidly to any screen size while maintaining pixel-perfect precision and fast load times across all platforms.
                        </p> -->
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Future Proof Technology Stack
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              50% Faster Loading Times
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              99.9% Cross-Device Compatibility
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              SEO & Performance Optimized
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 We specialize in progressive web apps (PWAs) and native mobile experiences that deliver exceptional performance. Our designs adapt fluidly to any screen size while maintaining pixel perfect precision and fast load times across all platforms.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                    What's the difference between responsive and adaptive design?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Responsive design uses flexible layouts that adapt to any screen size, while adaptive design serves different layouts for specific device types. We primarily use responsive design for better maintainability and performance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you design for both iOS and Android?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we create designs that follow both iOS Human Interface Guidelines and Android Material Design principles, ensuring your app feels native on each platform while maintaining brand consistency.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Who are your main clients?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you offer digital marketing services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                 Wireframing & Prototyping
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Bring your ideas to life with detailed wireframes and interactive prototypes. We help you visualize and test your concepts before development, saving time and ensuring the final product meets your expectations.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <!-- <p class="text text-18">
                          we believe that great design is the foundation of every successful digital product. Our UI/UX design approach goes beyond visuals—we focus on building seamless, intuitive, and engaging user experiences that connect with people and drive results. 
                          Every interface is designed with clarity, consistency, and usability in mind, ensuring that users can interact effortlessly with your product.
                        </p> -->
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              80% Reduction in Development Revisions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Interactive Click Through Prototypes
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Collaborative Real Time Editing
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Direct Developer Handoff Tools
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Our wireframing process eliminates costly development changes by validating user flows, functionality, and layout early. We create high-fidelity prototypes that feel like the real product, allowing for thorough testing before a single line of code is written.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What's included in your wireframing deliverables?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We provide low fidelity sketches, detailed wireframes, interactive prototypes, user flow diagrams, and comprehensive documentation with annotations for developers.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     How do interactive prototypes save development time?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Interactive prototypes allow stakeholders to experience the product flow before development, identifying issues early when they're cheaper to fix rather than after coding has begun.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Who are your main clients?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you offer digital marketing services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Usability Testing
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Validate your design decisions through comprehensive usability testing. We conduct user sessions, analyze behavior patterns, and provide actionable insights to improve your product's usability and user satisfaction.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <!-- <p class="text text-18">
                          we believe that great design is the foundation of every successful digital product. Our UI/UX design approach goes beyond visuals—we focus on building seamless, intuitive, and engaging user experiences that connect with people and drive results. 
                          Every interface is designed with clarity, consistency, and usability in mind, ensuring that users can interact effortlessly with your product.
                        </p> -->
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              2+ Years Testing Experience
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Advanced Eye-Tracking Technology
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Accessibility Compliance Testing
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Detailed Video Analysis Reports
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  We go beyond basic testing with advanced methodologies including cognitive walkthroughs, think-aloud protocols, and biometric analysis. Our comprehensive testing approach identifies not just what users do, but why they do it and how to optimize their experience.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     How many users do you typically test with?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We typically conduct testing with 8-12 users per target demographic, which research shows identifies 85-90% of usability issues while remaining cost effective.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What makes your testing different from online surveys?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We observe actual user behavior in real-time, capturing unconscious actions and emotional responses that users can't self report in surveys. This provides deeper, more actionable insights.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Who are your main clients?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you offer digital marketing services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Brand & Visual Identity Design
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Build a strong, memorable brand identity that resonates with your target audience. From logo design to comprehensive brand guidelines, we create cohesive visual systems that communicate your brand's values and personality.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <!-- <p class="text text-18">
                          we believe that great design is the foundation of every successful digital product. Our UI/UX design approach goes beyond visuals—we focus on building seamless, intuitive, and engaging user experiences that connect with people and drive results. 
                          Every interface is designed with clarity, consistency, and usability in mind, ensuring that users can interact effortlessly with your product.
                        </p> -->
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Psychology Based Design Approach
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Trademark Research & Registration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Complete Brand Guideline Systems
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Cross Cultural Brand Validation
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Our brand identity process combines strategic thinking with creative excellence. We research your market, analyze competitors, and develop brands that not only look distinctive but also communicate your unique value proposition effectively across all touchpoints.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What's included in your brand identity package?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our comprehensive package includes logo design, color palette, typography system, brand guidelines, business card design, letterhead, and digital brand assets for social media and web use.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How do you ensure the brand works across different cultures?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We conduct cultural research and color psychology analysis to ensure your brand identity translates appropriately across different markets and doesn't inadvertently convey negative associations.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Who are your main clients?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long-term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you offer digital marketing services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


          </div>
        </div>
      </div>





      <!-- mobile & web apps -->


      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <button class="secvice-category" onclick="showService('ui-design')">
                          <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Native & cross-platform mobile apps
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </button>
                      </li>
                      <li>
                        <div class="service-category" onclick="showService('ux-optimization')">
                          <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Web applications with modern UI/UX
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </div>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Progressive Web Apps (PWAs)
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          API development & integrations
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          E-commerce & custom portals
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          App performance monitoring & optimization
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden"
                          >Call us at +12345.6789.333 number</span
                        >
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        +12345.6789.333
                      </a>
                    </div>
                  </div>
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <div class="service-download">
                      <h2 class="heading text-24">Download Our Brochures</h2>
                      <div class="service-download">
                        <svg
                          class="icon-50"
                          width="50"
                          height="50"
                          viewBox="0 0 50 50"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M43.2812 13.875L33.0312 3.5625L31.9375 3.125H7.8125L6.25 4.6875V21.875H9.375V6.25H28.125V17.1875L29.6875 18.75H40.625V21.875H43.75V15L43.2812 13.875ZM31.25 15.625V6.25L40.625 15.625H31.25ZM7.8125 25L6.25 26.5625V45.3125L7.8125 46.875H42.1875L43.75 45.3125V26.5625L42.1875 25H7.8125ZM40.625 40.625V43.75H9.375V28.125H40.625V40.625ZM15.625 37.5H14.625V40.625H12.5V31.25H15.8125C18.1562 31.25 19.3438 32.375 19.3438 34.375C19.3498 34.8001 19.2635 35.2214 19.0909 35.6098C18.9182 35.9983 18.6633 36.3447 18.3438 36.625C17.5693 37.2287 16.6062 37.5386 15.625 37.5ZM15.4375 32.9688H14.625V35.875H15.4375C16.5625 35.875 17.125 35.375 17.125 34.4062C17.125 33.4375 16.5625 32.9688 15.4375 32.9688ZM28.125 39.3125C28.5865 38.8579 28.9474 38.3115 29.1843 37.7085C29.4211 37.1056 29.5287 36.4597 29.5 35.8125C29.5 32.6875 27.8438 31.25 24.5 31.25H21.1875V40.625H24.5C25.161 40.657 25.8218 40.5575 26.4441 40.3322C27.0664 40.1069 27.6377 39.7603 28.125 39.3125ZM23.2812 38.9062V32.9688H24.3125C24.7111 32.9434 25.1106 32.9996 25.4868 33.134C25.8629 33.2683 26.2076 33.4779 26.5 33.75C26.7649 34.0281 26.9706 34.3571 27.1049 34.7169C27.2392 35.0768 27.2992 35.4601 27.2812 35.8438C27.3281 36.6675 27.0472 37.4763 26.5 38.0938C26.2139 38.3675 25.8754 38.5806 25.5049 38.7202C25.1343 38.8599 24.7394 38.9231 24.3438 38.9062H23.2812ZM37.1875 37H34.1562V40.625H32.0312V31.25H37.4688V32.9688H34.1562V35.2812H37.1875V37Z"
                            fill="CurrentColor"
                          />
                        </svg>
                        <div class="download-text">
                          <div class="text text-16">
                            Business is a marketing discipline focused on
                            growing visibility organ (non-paid) technic
                            required.
                          </div>
                          <a
                            href="#"
                            class="download-button text text-14 fw-600"
                            aria-label="download"
                          >
                            Click here to download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Native & cross-platform mobile apps
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Our Native & Cross-Platform Mobile App solutions are designed to give your business the flexibility and performance it needs. 
                  Whether it’s a fully native app for iOS or Android or a cross-platform solution that works seamlessly across multiple devices, we ensure smooth performance, intuitive UI/UX, and scalability. 
                  By leveraging the latest frameworks and tools, we help you deliver mobile experiences that engage users, boost efficiency, and create lasting value for your business.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, we understand that businesses need apps that are fast, secure, and accessible across platforms. Our expert team ensures that your app is optimized for both performance and usability, no matter the platform. 
                          With a focus on scalability, API integration, and user engagement, we create mobile apps that don’t just work they drive growth and deliver measurable results.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless User Experience
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Accelerated Time-to-Market
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Custom Feature Development
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Reliable Support & Maintenance
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <p class="text text-18" data-aos="fade-up">
                  We combine creative innovation with proven user-centered design principles to craft solutions that are both beautiful and functional. From wireframing and prototyping to usability testing and brand identity design, our team ensures that every detail is carefully tailored to your business goals. 
                  With Detech, your ideas are transformed into digital solutions that inspire trust, enhance engagement, and deliver measurable value.
                </p> -->

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is the difference between native and cross platform apps?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Native apps are built specifically for iOS or Android, ensuring maximum performance and device compatibility. Cross platform apps use a single codebase to run on multiple platforms, saving time and cost while still providing great performance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Which option is best for my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        If your goal is high performance with device specific features, native apps are ideal. If you want wider reach with faster development, cross platform apps are the best choice.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech provide post launch support for mobile apps?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We provide end to end support, including updates, bug fixes, feature enhancements, and performance monitoring to keep your app running smoothly.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What industries does Detech build mobile apps for?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We’ve developed apps for finance, healthcare, e-commerce, logistics, and enterprise solutions, tailoring each app to industry needs and user expectations.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Web applications with modern UI/UX
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we design and develop web applications that are fast, scalable, and visually engaging. Our focus is on building applications with modern UI/UX principles, ensuring seamless navigation, responsiveness across devices, and a user first design. From business portals to enterprise dashboards, we create web solutions that not only look professional but also enhance productivity and user satisfaction. 
                  By combining cutting edge technology with clean design, we deliver applications that help businesses thrive in the digital era.
                </p>

                <!-- <p class="text text-18" data-aos="fade-up">
                  Intrinsicly coordinate multifunctional functionalities
                  reliable potentialities. Objectively envisioneer high in
                  convergence through collaborative networks. Interactively
                  generate B2C e-tailers for reliabl business data restore fully
                  researched through resource maximizing results.
                </p> -->

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          We believe a successful web application should be intuitive, reliable, and future-ready. At Detech, we integrate robust functionality with elegant design to deliver apps that solve real business problems. 
                          
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Intuitive Interfaces
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Responsive Across Devices
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Brand-Aligned Design
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced User Experience
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Our team ensures every application is secure, scalable, and optimized for performance, providing businesses with solutions that drive efficiency, engagement, and measurable growth.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What kind of web applications does Detech build?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We develop a wide range of web apps, including enterprise dashboards, e-commerce platforms, SaaS applications, content management systems, and custom portals.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure a great user experience?

                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our team follows UI/UX best practices, focusing on clarity, consistency, and responsiveness. We test applications across devices to make sure users enjoy a smooth experience everywhere.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate my web app with third party systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we specialize in API development and integrations, ensuring your web app works seamlessly with CRMs, payment gateways, cloud services, and other tools.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What industries benefit from your web app solutions?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We’ve delivered web apps for finance, logistics, healthcare, education, and e-commerce. Each solution is tailored to the specific needs of the industry and business.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            
            
            
            
            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Progressive Web Apps (PWAs)
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we build Progressive Web Apps (PWAs) that combine the best of web and mobile experiences. PWAs are designed to be fast, reliable, and engaging, working seamlessly across all devices without requiring installation from app stores.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our PWAs offer offline functionality, push notifications, and app like interactions, giving businesses the ability to deliver a smooth, mobile first experience to their customers. With Detech, your business can reach users anywhere, anytime, with applications that are both lightweight and powerful.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <!-- <p class="text text-18">
                          We specialize in progressive web apps (PWAs) and native mobile experiences that deliver exceptional performance. Our designs adapt fluidly to any screen size while maintaining pixel-perfect precision and fast load times across all platforms.
                        </p> -->
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Offline Functionality
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Fast Loading Speeds
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Cross Platform Compatibility
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Push Notifications & Updates
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 We focus on future ready solutions, and PWAs are the next step in digital transformation. At Detech, we ensure your PWA is secure, scalable, and performance optimized, helping you reduce costs while increasing user engagement. Our expertise in modern UI/UX design ensures that your PWA not only looks great but also delivers native like speed and responsiveness, empowering businesses to stay ahead in an ever changing digital landscape.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                    What are the benefits of PWAs for my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        PWAs provide offline access, faster load times, push notifications, and cross device compatibility, all without requiring app store downloads.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can PWAs replace native mobile apps?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, in many cases PWAs can serve as a cost effective alternative to native apps while still delivering a mobile like experience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure PWA performance?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We optimize PWAs using modern frameworks, caching strategies, and responsive design principles, ensuring speed, reliability, and smooth user interaction.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Which industries can benefit from PWAs?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        PWAs are ideal for e-commerce, news portals, booking platforms, education, and service based businesses, enabling them to engage customers effectively across devices.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                 API development & integrations
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we specialize in API development and seamless integrations that enable your business systems, applications, and third party platforms to work together efficiently. Whether it’s building custom APIs from scratch or integrating with payment gateways, CRMs, ERPs, or cloud services, we ensure smooth data flow and real time connectivity.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our solutions are secure, scalable, and reliable, empowering businesses to streamline workflows, enhance functionality, and deliver connected digital experiences across platforms.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          We understand that integration is the backbone of digital transformation. At Detech, we don’t just build APIs—we design them with security, scalability, and long term maintainability in mind. Our team ensures that every integration reduces complexity, eliminates manual processes, and enhances operational efficiency.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Connectivity
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Custom API Solutions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Secure & Scalable
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Automation & Efficiency
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Our expertise in RESTful, GraphQL, and SOAP APIs, we deliver solutions tailored to your business ecosystem, giving you the flexibility to grow and innovate without limitations.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What types of APIs does Detech develop?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We build REST, GraphQL, and SOAP APIs, as well as custom APIs designed to integrate seamlessly with your business applications.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     Can Detech integrate with third-party services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we integrate with a wide range of platforms, including payment gateways, CRMs, ERPs, cloud solutions, and e-commerce systems.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure API security?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We follow best practices in authentication, encryption, and secure coding standards to protect sensitive business and customer data.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Why are APIs important for my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        APIs allow your systems to communicate and share data effortlessly, improving automation, efficiency, and enabling new digital capabilities.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  E-commerce & custom portals
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we design and develop E-commerce platforms and custom business portals that are secure, scalable, and tailored to your unique needs. Whether you’re a retail business looking to expand online, or an enterprise in need of a secure internal portal, our solutions focus on modern UI/UX, seamless transactions, and robust backend systems.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  We integrate features like payment gateways, inventory management, analytics, and personalized user experiences to ensure your platform is not only functional but also drives growth and customer satisfaction.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          We believe that every business deserves a digital presence that truly represents its vision. At Detech, we go beyond off the shelf solutions by building tailored e-commerce platforms and custom portals that align with your goals.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Tailored Shopping Experience
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Secure Payment Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Architecture
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Advanced Features
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Our expertise ensures that your system is fast, secure, and optimized for performance, while our focus on scalability guarantees that it grows as your business does. From startups to enterprises, we deliver solutions that empower sales, improve engagement, and enhance operations.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What platforms does Detech use for e-commerce development?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We develop on custom frameworks as well as platforms like WooCommerce, Magento, and Shopify, depending on client needs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech build custom portals for enterprises?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we specialize in enterprise portals, employee dashboards, client management systems, and secure B2B platforms.
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure e-commerce security?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We implement secure payment gateways, SSL encryption, user authentication, and regular audits to safeguard transactions and data.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you provide post launch support and maintenance?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We offer ongoing support, updates, and optimization services to ensure smooth performance and scalability over time.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  App performance monitoring & optimization
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we understand that launching an application is just the beginning. That’s why we provide App Performance Monitoring & Optimization services to ensure your mobile and web applications remain fast, stable, and reliable. From real time monitoring and error tracking to load testing and performance tuning, we identify bottlenecks and optimize every aspect of your app.

                <p class="text text-18" data-aos="fade-up">
                  Our goal is to deliver a seamless user experience that improves engagement, boosts retention, and ensures your app performs flawlessly under any conditions.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Performance can make or break a digital product. At Detech, we use advanced monitoring tools, analytics, and proactive optimization techniques to keep your apps running at peak efficiency.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Psychology Based Design Approach
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Trademark Research & Registration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Complete Brand Guideline Systems
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Cross-Cultural Brand Validation
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 We don’t just fix problems we anticipate and prevent them, ensuring your business applications remain secure, scalable, and user friendly. By continuously optimizing performance, we help you deliver superior digital experiences that strengthen customer trust and drive business growth.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What aspects of app performance does Detech monitor?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We track speed, uptime, crash reports, error logs, user engagement, and server performance to ensure your app runs smoothly.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech improve the speed of an existing app?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we specialize in code optimization, database tuning, caching strategies, and UI/UX improvements to boost app speed.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Do you provide real-time monitoring services?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We use real time monitoring tools to detect and resolve issues before they affect end users.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Why is performance optimization important?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        A high performing app improves user satisfaction, retention, and conversion rates, while reducing operational costs and downtime.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


          </div>
        </div>
      </div>






      <!-- custom paltform development -->

      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <button class="secvice-category" onclick="showService('ui-design')">
                          <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          SAI-powered analytics & reporting
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </button>
                      </li>
                      <li>
                        <div class="service-category" onclick="showService('ux-optimization')">
                          <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Predictive modeling
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </div>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          RAG (Retrieval-Augmented Generation) Automation
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Intelligent process automation
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Chatbots and virtual assistants
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Data integration & knowledge management
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden"
                          >Call us at +12345.6789.333 number</span
                        >
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        +12345.6789.333
                      </a>
                    </div>
                  </div>
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <div class="service-download">
                      <h2 class="heading text-24">Download Our Brochures</h2>
                      <div class="service-download">
                        <svg
                          class="icon-50"
                          width="50"
                          height="50"
                          viewBox="0 0 50 50"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M43.2812 13.875L33.0312 3.5625L31.9375 3.125H7.8125L6.25 4.6875V21.875H9.375V6.25H28.125V17.1875L29.6875 18.75H40.625V21.875H43.75V15L43.2812 13.875ZM31.25 15.625V6.25L40.625 15.625H31.25ZM7.8125 25L6.25 26.5625V45.3125L7.8125 46.875H42.1875L43.75 45.3125V26.5625L42.1875 25H7.8125ZM40.625 40.625V43.75H9.375V28.125H40.625V40.625ZM15.625 37.5H14.625V40.625H12.5V31.25H15.8125C18.1562 31.25 19.3438 32.375 19.3438 34.375C19.3498 34.8001 19.2635 35.2214 19.0909 35.6098C18.9182 35.9983 18.6633 36.3447 18.3438 36.625C17.5693 37.2287 16.6062 37.5386 15.625 37.5ZM15.4375 32.9688H14.625V35.875H15.4375C16.5625 35.875 17.125 35.375 17.125 34.4062C17.125 33.4375 16.5625 32.9688 15.4375 32.9688ZM28.125 39.3125C28.5865 38.8579 28.9474 38.3115 29.1843 37.7085C29.4211 37.1056 29.5287 36.4597 29.5 35.8125C29.5 32.6875 27.8438 31.25 24.5 31.25H21.1875V40.625H24.5C25.161 40.657 25.8218 40.5575 26.4441 40.3322C27.0664 40.1069 27.6377 39.7603 28.125 39.3125ZM23.2812 38.9062V32.9688H24.3125C24.7111 32.9434 25.1106 32.9996 25.4868 33.134C25.8629 33.2683 26.2076 33.4779 26.5 33.75C26.7649 34.0281 26.9706 34.3571 27.1049 34.7169C27.2392 35.0768 27.2992 35.4601 27.2812 35.8438C27.3281 36.6675 27.0472 37.4763 26.5 38.0938C26.2139 38.3675 25.8754 38.5806 25.5049 38.7202C25.1343 38.8599 24.7394 38.9231 24.3438 38.9062H23.2812ZM37.1875 37H34.1562V40.625H32.0312V31.25H37.4688V32.9688H34.1562V35.2812H37.1875V37Z"
                            fill="CurrentColor"
                          />
                        </svg>
                        <div class="download-text">
                          <div class="text text-16">
                            Business is a marketing discipline focused on
                            growing visibility organ (non paid) technic
                            required.
                          </div>
                          <a
                            href="#"
                            class="download-button text text-14 fw-600"
                            aria-label="download"
                          >
                            Click here to download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Business process analysis
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we begin every Custom Platform Development project with a thorough Business Process Analysis. 
                  By understanding your workflows, pain points, and goals, we design solutions that are not only technically robust but also aligned with your operations.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our team evaluates existing systems, identifies inefficiencies, and develops platforms that streamline processes, reduce manual effort, and enhance productivity. 
                  This ensures that every platform we deliver is tailored to your unique business model and drives measurable results.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, our approach to business process driven development ensures that every platform we build is designed to solve real problems and create long term value. By combining technical expertise with strategic analysis, we help businesses unlock efficiency and innovation.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Future among us
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Make a Deal with Our Company
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Contact with Our Help Desk
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Ready to Use Solar Energy
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Our solutions are built to be scalable, secure, and adaptable, empowering your organization to evolve seamlessly in a changing digital landscape.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is business process analysis in platform development?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It’s the practice of studying your workflows and operations to ensure the platform is designed to improve efficiency and meet your specific needs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech approach business process analysis?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We work closely with stakeholders to map processes, identify bottlenecks, and recommend digital solutions that align with your goals.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate new platforms with existing systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we specialize in seamless integrations with ERPs, CRMs, and other business tools to ensure smooth data flow and continuity.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What industries benefit most from custom platform development?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Any industry can benefit, but especially finance, logistics, healthcare, education, and retail, where unique workflows require tailored digital solutions.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Custom module development
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we understand that every business has unique needs that go beyond standard software features. That’s why we offer Custom Module Development to extend the functionality of your existing platforms and applications. Whether it’s adding new features to your ERP, CRM, e-commerce platform, or custom built system, our modules are designed to integrate seamlessly and enhance your operations.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  From workflow automation to advanced reporting and third party integrations, we ensure each module is tailored, scalable, and secure delivering the exact capabilities your business requires.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Unlike generic plug ins or off the shelf add ons, our custom modules are built specifically for your business workflows. At Detech, we combine technical expertise with a deep understanding of your requirements to deliver modules that increase efficiency, reduce manual tasks, and add measurable value.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                             Tailored Functionality
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Design
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced Performance
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 We focus on compatibility, performance, and future scalability, so your systems grow alongside your business.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is custom module development?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It’s the process of building specialized add ons or extensions that expand the functionality of your existing software systems.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech develop modules for third party platforms?

                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we develop custom modules for ERPs, CRMs, CMS platforms, e-commerce systems, and other third party applications.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure module compatibility?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We follow best coding practices, API standards, and thorough testing to make sure modules integrate smoothly with your current systems.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Why should I choose custom modules over ready made plugins?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Custom modules are tailored to your exact needs, ensuring better performance, long term scalability, and reduced dependency on generic solutions.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            
            
            
            
            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Workflow automation
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help businesses streamline operations through Workflow Automation by replacing repetitive manual tasks with intelligent, automated processes. From approvals and notifications to data processing and system integrations, our solutions are designed to increase productivity, reduce errors, and free up your team’s time for more strategic work.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  By leveraging AI-driven automation, custom modules, and integration frameworks, we ensure that your workflows are not only faster but also smarter and more efficient.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          We believe automation is the key to scaling modern businesses. At Detech, our approach goes beyond simple task automation—we focus on building end to end intelligent workflows that align with your business processes.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Automated Processes
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Improved Efficiency
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Operations
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 With expertise in process analysis, custom development, and cross platform integration, we design solutions that adapt as your business grows. Our workflow automation empowers companies to reduce costs, improve accuracy, and boost overall efficiency, making them more competitive in a digital first world.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                    What types of workflows can Detech automate?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We automate approvals, reporting, notifications, document management, data entry, and cross platform integrations across industries.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does workflow automation work with existing systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we build automation solutions that integrate seamlessly with your existing ERPs, CRMs, HR systems, and other tools.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does workflow automation improve efficiency?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It eliminates repetitive manual tasks, reduces errors, and ensures processes are faster, consistent, and scalable.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech implement AI-driven automation?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We leverage AI and machine learning to create intelligent workflows that can adapt, predict, and optimize business processes over time.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                 Third-party integrations
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we specialize in building seamless third-party integrations that connect your business systems with the tools you already use. Whether it’s payment gateways, CRMs, ERPs, analytics tools, cloud services, or marketing platforms, we ensure smooth and secure communication between different systems.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our goal is to eliminate data silos, improve accuracy, and enhance efficiency by enabling your applications to work together in harmony. With Detech, your business can unlock the full potential of technology without the hassle of managing disconnected systems.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech takes a strategic approach to integrations—focusing not only on technical connectivity but also on aligning with your business workflows and objectives. With expertise in API development, secure data handling, and scalable architecture, we create integration solutions that are reliable, future ready, and optimized for performance.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Connectivity
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Custom API Solutions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Secure & Reliable
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced Productivity
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  By choosing Detech, you get a partner who ensures your systems communicate seamlessly, allowing your business to operate smarter, faster, and with greater agility.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What types of third party integrations does Detech support?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We support integrations for payment gateways, CRM systems, ERP platforms, cloud storage, analytics, messaging services, and more.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     Are the integrations secure?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We prioritize data security and compliance, ensuring all integrations are encrypted and meet industry standards.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech build custom integrations if an API isn’t available?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. Our developers can create custom connectors or middleware to integrate even systems with limited or no APIs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does third party integration benefit my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It reduces manual work, improves data accuracy, enhances team collaboration, and helps you make better decisions with real time synced information
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Cloud based solutions
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we design and deliver scalable cloud based solutions that empower businesses to operate with agility, flexibility, and efficiency. From cloud migration and infrastructure setup to SaaS product development, data storage, and backup solutions, we help organizations harness the full potential of cloud technology.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our cloud first approach ensures your applications and data are always accessible, secure, and optimized for performance, enabling you to adapt quickly in today’s fast changing digital environment.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech stands out by combining deep technical expertise with business driven strategies for cloud adoption. We work with leading platforms like AWS, Azure, and Google Cloud to deliver solutions that are not only robust but also cost effective and tailored to your needs.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Flexible Deployment
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Infrastructure
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              High Availability & Security
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Cost Efficiency
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  With strong experience in security, scalability, and performance optimization, we ensure your business enjoys the benefits of cloud computing while minimizing risks. Choosing Detech means choosing a future ready, reliable, and secure cloud ecosystem.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What types of cloud services does Detech provide?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We provide cloud migration, SaaS product development, infrastructure management, storage solutions, backup, and disaster recovery services.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How secure are Detech’s cloud solutions?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Security is a top priority. We implement multi-layered security, encryption, compliance checks, and monitoring to protect your data.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech help us migrate from on premise systems to the cloud?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. Our team ensures a smooth, step by step migration with minimal downtime and zero data loss.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Why should my business move to the cloud?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Cloud solutions provide scalability, cost savings, flexibility, real time collaboration, and enhanced disaster recovery, making your business more agile and competitive.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Data management and analytics
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help businesses unlock the true potential of their data through smart data management and advanced analytics solutions. From data collection, cleaning, and storage to real time analytics, business intelligence dashboards, and predictive modeling, we provide end to end services that turn raw information into actionable insights.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our solutions empower organizations to make data driven decisions, optimize operations, and identify new growth opportunities with confidence.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech combines technical expertise with industry knowledge to deliver analytics solutions that are accurate, scalable, and business focused. We leverage tools like Power BI, Tableau, Python, and cloud based analytics platforms to create customized solutions for your unique needs.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Centralized Data Storage
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Advanced Analytics
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Real-Time Reporting
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Data-Driven Decisions
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 By ensuring data accuracy, security, and accessibility, we help you harness the power of data to gain a competitive edge. Choosing Detech means choosing a partner that turns your data into a strategic asset.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What data analytics services does Detech provide?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We offer data integration, visualization dashboards, real time analytics, predictive modeling, and reporting solutions.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure data accuracy?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We follow data cleaning, validation, and governance practices to maintain accuracy, consistency, and reliability.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     Can Detech handle big data projects?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we specialize in handling large scale data processing and analytics using cloud and distributed systems.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How can data analytics benefit my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Data analytics helps you understand customer behavior, improve efficiency, reduce costs, forecast trends, and make better business decisions.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


          </div>
        </div>
      </div>




      <!-- AI solutions -->



      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <button class="secvice-category" onclick="showService('ui-design')">
                          <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          SAI-powered analytics & reporting
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </button>
                      </li>
                      <li>
                        <div class="service-category" onclick="showService('ux-optimization')">
                          <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Predictive modeling
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </div>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          RAG (Retrieval-Augmented Generation) Automation
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Intelligent process automation
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Chatbots and virtual assistants
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Data integration & knowledge management
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden"
                          >Call us at +12345.6789.333 number</span
                        >
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        +12345.6789.333
                      </a>
                    </div>
                  </div>
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <div class="service-download">
                      <h2 class="heading text-24">Download Our Brochures</h2>
                      <div class="service-download">
                        <svg
                          class="icon-50"
                          width="50"
                          height="50"
                          viewBox="0 0 50 50"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M43.2812 13.875L33.0312 3.5625L31.9375 3.125H7.8125L6.25 4.6875V21.875H9.375V6.25H28.125V17.1875L29.6875 18.75H40.625V21.875H43.75V15L43.2812 13.875ZM31.25 15.625V6.25L40.625 15.625H31.25ZM7.8125 25L6.25 26.5625V45.3125L7.8125 46.875H42.1875L43.75 45.3125V26.5625L42.1875 25H7.8125ZM40.625 40.625V43.75H9.375V28.125H40.625V40.625ZM15.625 37.5H14.625V40.625H12.5V31.25H15.8125C18.1562 31.25 19.3438 32.375 19.3438 34.375C19.3498 34.8001 19.2635 35.2214 19.0909 35.6098C18.9182 35.9983 18.6633 36.3447 18.3438 36.625C17.5693 37.2287 16.6062 37.5386 15.625 37.5ZM15.4375 32.9688H14.625V35.875H15.4375C16.5625 35.875 17.125 35.375 17.125 34.4062C17.125 33.4375 16.5625 32.9688 15.4375 32.9688ZM28.125 39.3125C28.5865 38.8579 28.9474 38.3115 29.1843 37.7085C29.4211 37.1056 29.5287 36.4597 29.5 35.8125C29.5 32.6875 27.8438 31.25 24.5 31.25H21.1875V40.625H24.5C25.161 40.657 25.8218 40.5575 26.4441 40.3322C27.0664 40.1069 27.6377 39.7603 28.125 39.3125ZM23.2812 38.9062V32.9688H24.3125C24.7111 32.9434 25.1106 32.9996 25.4868 33.134C25.8629 33.2683 26.2076 33.4779 26.5 33.75C26.7649 34.0281 26.9706 34.3571 27.1049 34.7169C27.2392 35.0768 27.2992 35.4601 27.2812 35.8438C27.3281 36.6675 27.0472 37.4763 26.5 38.0938C26.2139 38.3675 25.8754 38.5806 25.5049 38.7202C25.1343 38.8599 24.7394 38.9231 24.3438 38.9062H23.2812ZM37.1875 37H34.1562V40.625H32.0312V31.25H37.4688V32.9688H34.1562V35.2812H37.1875V37Z"
                            fill="CurrentColor"
                          />
                        </svg>
                        <div class="download-text">
                          <div class="text text-16">
                            Business is a marketing discipline focused on
                            growing visibility organ (non-paid) technic
                            required.
                          </div>
                          <a
                            href="#"
                            class="download-button text text-14 fw-600"
                            aria-label="download"
                          >
                            Click here to download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  SAI-powered analytics & reporting
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we harness the power of Artificial Intelligence (AI) to transform how businesses analyze data and generate insights. Our AI-powered analytics and reporting solutions go beyond traditional dashboards by using machine learning, natural language processing, and predictive algorithms to uncover trends, automate reporting, and deliver real-time decision intelligence.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Whether it’s improving customer engagement, streamlining operations, or forecasting market shifts, our AI solutions help businesses stay ahead in today’s data-driven economy.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech’s AI solutions are designed with a business-first approach, ensuring that technology aligns with your strategic goals. Our team integrates cutting-edge AI models with secure and scalable infrastructure to deliver solutions that are not only innovative but practical.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Advanced Insights
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Real-Time Reporting
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Custom Dashboards
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Data-Driven Decisions
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Focus on accuracy, speed, and automation, we empower organizations to reduce manual work, make smarter decisions, and unlock new opportunities. Partnering with Detech means leveraging AI to gain a competitive advantage in a fast-changing digital world.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What kind of AI solutions does Detech offer?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We provide AI-powered analytics, intelligent reporting, predictive modeling, NLP-driven insights, and automation solutions.
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does AI-powered reporting benefit my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        AI eliminates manual reporting, offers real time insights, and helps you predict trends, detect anomalies, and make proactive decisions.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech customize AI models for my industry?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, we design industry specific AI solutions tailored to finance, healthcare, logistics, e-commerce, and more.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Is AI implementation secure with Detech?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We follow strict data security, compliance standards, and ethical AI practices to ensure trustworthy outcomes.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Predictive modeling
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we leverage predictive modeling to help businesses anticipate future trends, behaviors, and risks by analyzing historical and real time data. Using machine learning algorithms, statistical techniques, and AI-driven insights, we empower organizations to forecast customer needs, optimize operations, and make proactive decisions.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Whether it’s predicting demand, detecting potential risks, or identifying growth opportunities, our predictive models turn complex data into actionable business intelligence.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          We combine deep technical expertise with industry knowledge to build predictive models that are not just accurate, but also aligned with your business objectives. At Detech, we don’t just deliver data science we deliver practical solutions that drive measurable results.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Future-Focused Analytics
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Risk Management
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Customized Models
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Performance Optimization
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Our approach ensures that predictive insights are interpretable, secure, and scalable, enabling businesses to stay agile and competitive in fast-changing markets.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What industries can benefit from predictive modeling?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Detech’s predictive modeling solutions are tailored for finance, healthcare, logistics, retail, insurance, and technology, among others.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How accurate are Detech’s predictive models?

                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our models are built using advanced algorithms, robust datasets, and continuous optimization, ensuring high accuracy and reliability.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can predictive modeling improve customer experience?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. It helps businesses anticipate customer needs, personalize services, and enhance satisfaction through proactive engagement.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Is predictive modeling secure with Detech?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We implement strict data governance, encryption, and compliance frameworks to protect sensitive data throughout the process.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            
            
            
            
            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  RAG (Retrieval-Augmented Generation) Automation
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we harness the power of RAG Automation to deliver AI-driven solutions that combine real-time information retrieval with advanced generative models. Unlike traditional AI that relies only on pre-trained knowledge, RAG enables systems to fetch the most relevant and up-to-date data from trusted sources before generating responses.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  This ensures outputs are not only accurate and contextual but also highly relevant to dynamic business environments. From building intelligent chatbots and knowledge assistants to automating research and documentation, we design RAG-based solutions that enhance productivity, reduce manual effort, and accelerate decision-making.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech stands out because we blend AI expertise with enterprise-grade system design. Our RAG automation solutions are customized, secure, and scalable, ensuring seamless integration with your existing workflows. By combining retrieval accuracy with generative creativity, we help businesses unlock the true potential of knowledge-driven automation.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced Knowledge Access
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Intelligent Automation
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Improved Decision-Making
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Whether you’re looking to enhance customer support, streamline operations, or empower your workforce with intelligent tools, Detech ensures your business stays ahead with cutting-edge AI innovation.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                    What is RAG Automation and how does it benefit businesses?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        RAG combines data retrieval and AI generation to provide reliable, real-time, and contextual insights, making automation smarter and more effective.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate RAG into existing systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We design flexible APIs and integrations to embed RAG automation into CRMs, knowledge bases, chatbots, and enterprise platforms.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How secure is RAG Automation with Detech?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We ensure data encryption, compliance standards, and access control to guarantee that sensitive business data remains fully protected.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Which industries benefit most from RAG?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        RAG is highly valuable for customer service, finance, legal, healthcare, education, and IT, where real-time, accurate information retrieval is essential.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                 Intelligent process automation
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we enable businesses to achieve greater efficiency and accuracy through Intelligent Process Automation (IPA). By combining AI, machine learning, and robotic process automation (RPA), we streamline repetitive tasks, reduce human error, and optimize workflows. Our IPA solutions go beyond simple automation— they learn, adapt, and continuously improve over time.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  From document processing and data entry to customer service automation and workflow orchestration, Detech helps organizations free up valuable resources so teams can focus on strategic, high-impact initiatives.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech is more than a technology provider—we are your automation partner. We don’t just implement tools; we analyze your processes, identify optimization opportunities, and design scalable IPA solutions tailored to your business goals.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Workflow Optimization
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Reduced Manual Effort
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              AI-Driven Decisions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Solutions
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  With a strong focus on security, scalability, and measurable ROI, we ensure that automation delivers tangible results. Our mission is to help businesses embrace the future of work, where smart automation enhances productivity, reduces costs, and accelerates growth.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is Intelligent Process Automation (IPA)?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        IPA combines AI, machine learning, and robotic automation to handle complex tasks, enabling businesses to automate decisions, not just actions.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     How does Detech implement IPA?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We begin with process analysis, identify tasks suitable for automation, and then deploy custom IPA solutions integrated seamlessly into your workflows.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What benefits can my business expect from IPA?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Businesses see faster turnaround times, reduced operational costs, improved accuracy, and the ability to scale processes without additional resources.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can IPA be integrated with existing enterprise systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, our IPA solutions are designed to work with your existing ERP, CRM, HRM, and other business platforms, ensuring minimal disruption.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Chatbots and virtual assistants
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we design and develop AI-powered chatbots and virtual assistants that enhance customer engagement and streamline business operations. Our intelligent assistants are built to provide 24/7 customer support, answer queries instantly, automate routine interactions, and even guide users through complex workflows.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Whether it’s for websites, mobile apps, or enterprise platforms, our solutions are tailored to improve customer experience while reducing operational costs. By combining natural language processing (NLP) and machine learning, our chatbots adapt over time, becoming smarter and more efficient with every interaction.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech goes beyond basic chatbot development—we create intelligent virtual assistants that align with your brand voice and business objectives. Our focus is on building solutions that are scalable, multilingual, and highly customizable, ensuring they meet the unique needs of your customers.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              24/7 Customer Support
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Personalized Interactions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Improved Engagement
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  With expertise in AI integration, conversational design, and data security, we deliver chatbot solutions that not only engage but also drive measurable results. Partnering with Detech means gaining a strategic advantage in customer experience and digital transformation.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What types of chatbots does Detech build?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We build rule-based chatbots, AI-driven conversational bots, and enterprise-grade virtual assistants, depending on client needs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate chatbots with existing systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes, our chatbots can integrate with CRM, ERP, e-commerce platforms, and customer support tools to provide seamless interactions.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How do chatbots improve customer experience?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        They provide instant, 24/7 support, reduce waiting times, personalize interactions, and ensure consistent service across platforms.
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech offer multilingual chatbot support?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We build multilingual chatbots that cater to global audiences, helping businesses reach customers in their preferred language.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Data integration & knowledge management
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help businesses unlock the true potential of their data by integrating information from diverse sources into a centralized, unified system. Our solutions streamline data flow across platforms, eliminate silos, and ensure that teams have access to accurate, real-time insights.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  We also specialize in knowledge management systems that organize and deliver critical business knowledge where it’s needed most. From data migration and API integrations to enterprise knowledge bases, our goal is to empower smarter decisions, improve collaboration, and enhance operational efficiency.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech brings technical expertise and industry best practices to ensure seamless data integration and knowledge management. We focus on building solutions that are secure, scalable, and tailored to your business environment.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Centralized Knowledge
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Data Flow
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Actionable Insights
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced Collaboration
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 By combining automation, AI-driven insights, and robust data governance, we deliver platforms that not only manage information but also turn it into a strategic asset. Partnering with Detech means enabling your organization to work smarter, stay competitive, and grow with confidence.

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is data integration, and why does my business need it?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Data integration connects data from multiple systems (CRM, ERP, cloud, apps) into a single, unified view, ensuring consistency and better decision-making.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate data from legacy systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We specialize in modernizing legacy data sources and integrating them with modern platforms while ensuring smooth transitions.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does knowledge management improve business efficiency?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It helps businesses store, organize, and retrieve critical knowledge easily, improving collaboration, reducing duplication, and speeding up problem-solving.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech ensure data security in integration projects?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We follow strict data governance, compliance, and encryption standards to safeguard sensitive business information.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


          </div>
        </div>
      </div>





      <!-- cloud and devops -->


      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <button class="secvice-category" onclick="showService('ui-design')">
                          <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Cloud infrastructure design and migration
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </button>
                      </li>
                      <li>
                        <div class="service-category" onclick="showService('ux-optimization')">
                          <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          CI/CD pipeline setup and automation
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </div>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Containerization and orchestration (Docker, Kubernetes)
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Infrastructure as Code (IaC)
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Monitoring and observability
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Security and compliance automation
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden"
                          >Call us at +12345.6789.333 number</span
                        >
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        +12345.6789.333
                      </a>
                    </div>
                  </div>
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <div class="service-download">
                      <h2 class="heading text-24">Download Our Brochures</h2>
                      <div class="service-download">
                        <svg
                          class="icon-50"
                          width="50"
                          height="50"
                          viewBox="0 0 50 50"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M43.2812 13.875L33.0312 3.5625L31.9375 3.125H7.8125L6.25 4.6875V21.875H9.375V6.25H28.125V17.1875L29.6875 18.75H40.625V21.875H43.75V15L43.2812 13.875ZM31.25 15.625V6.25L40.625 15.625H31.25ZM7.8125 25L6.25 26.5625V45.3125L7.8125 46.875H42.1875L43.75 45.3125V26.5625L42.1875 25H7.8125ZM40.625 40.625V43.75H9.375V28.125H40.625V40.625ZM15.625 37.5H14.625V40.625H12.5V31.25H15.8125C18.1562 31.25 19.3438 32.375 19.3438 34.375C19.3498 34.8001 19.2635 35.2214 19.0909 35.6098C18.9182 35.9983 18.6633 36.3447 18.3438 36.625C17.5693 37.2287 16.6062 37.5386 15.625 37.5ZM15.4375 32.9688H14.625V35.875H15.4375C16.5625 35.875 17.125 35.375 17.125 34.4062C17.125 33.4375 16.5625 32.9688 15.4375 32.9688ZM28.125 39.3125C28.5865 38.8579 28.9474 38.3115 29.1843 37.7085C29.4211 37.1056 29.5287 36.4597 29.5 35.8125C29.5 32.6875 27.8438 31.25 24.5 31.25H21.1875V40.625H24.5C25.161 40.657 25.8218 40.5575 26.4441 40.3322C27.0664 40.1069 27.6377 39.7603 28.125 39.3125ZM23.2812 38.9062V32.9688H24.3125C24.7111 32.9434 25.1106 32.9996 25.4868 33.134C25.8629 33.2683 26.2076 33.4779 26.5 33.75C26.7649 34.0281 26.9706 34.3571 27.1049 34.7169C27.2392 35.0768 27.2992 35.4601 27.2812 35.8438C27.3281 36.6675 27.0472 37.4763 26.5 38.0938C26.2139 38.3675 25.8754 38.5806 25.5049 38.7202C25.1343 38.8599 24.7394 38.9231 24.3438 38.9062H23.2812ZM37.1875 37H34.1562V40.625H32.0312V31.25H37.4688V32.9688H34.1562V35.2812H37.1875V37Z"
                            fill="CurrentColor"
                          />
                        </svg>
                        <div class="download-text">
                          <div class="text text-16">
                            Business is a marketing discipline focused on
                            growing visibility organ (non-paid) technic
                            required.
                          </div>
                          <a
                            href="#"
                            class="download-button text text-14 fw-600"
                            aria-label="download"
                          >
                            Click here to download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Cloud infrastructure design and migration
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help businesses modernize their IT infrastructure by designing and implementing scalable, secure, and cost-effective cloud solutions. 
                  From cloud-native architectures to hybrid and multi-cloud environments, we ensure your business is ready to adapt and grow.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our team specializes in cloud migration, seamlessly moving applications, databases, and workloads with minimal downtime. 
                  By leveraging platforms like AWS, Azure, and Google Cloud, we deliver infrastructure that enhances performance, strengthens security, and reduces operational costs—empowering businesses to stay competitive in the digital era.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech combines deep DevOps expertise with cloud-first strategies to provide end-to-end cloud solutions tailored to your business. We don’t just move your systems to the cloud—we optimize, secure, and automate them for maximum efficiency.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Custom Cloud Architecture
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Migration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              High Availability & Reliability
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Cost Optimization
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Our focus on continuous delivery, monitoring, and scalability, we ensure your cloud infrastructure supports both present needs and future growth. Choosing Detech means building a resilient, agile, and future ready cloud environment that drives innovation and efficiency.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What cloud platforms does Detech support?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We work with all major providers including Amazon Web Services (AWS), Microsoft Azure, and Google Cloud Platform (GCP).
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does Detech ensure a smooth cloud migration?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We follow a phased migration strategy, including assessment, planning, migration, testing, and optimization, to minimize risk and downtime.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech handle hybrid and multi-cloud environments?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We design and manage hybrid and multi-cloud strategies, ensuring flexibility, cost savings, and reduced vendor lock-in.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech integrate DevOps practices with cloud migration?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. Our Cloud & DevOps approach ensures automation, CI/CD pipelines, monitoring, and scalability, helping businesses accelerate delivery while maintaining security and reliability.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  CI/CD pipeline setup and automation
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we streamline software delivery with Continuous Integration and Continuous Deployment (CI/CD) pipelines that ensure faster, more reliable releases. By automating build, test, and deployment processes, we help businesses reduce errors, accelerate delivery cycles, and improve overall software quality.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our CI/CD solutions integrate seamlessly with modern tools like Jenkins, GitHub Actions, GitLab CI, Azure DevOps, and AWS CodePipeline, enabling development teams to release features faster, safer, and with confidence.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech brings together DevOps best practices and automation expertise to design pipelines tailored to your workflows. We focus on scalability, security, and efficiency, ensuring that your deployments are smooth and your teams spend less time on manual processes.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Automated Build & Deployment
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Continuous Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Reduced Errors & Downtime
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Pipelines
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                With Detech, you gain a partner that helps you adopt automation at scale, reduce time-to-market, and maintain high-quality standards in every release.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is a CI/CD pipeline, and why is it important?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        A CI/CD pipeline automates code integration, testing, and deployment, helping teams deliver software updates faster, with fewer bugs and risks.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Which CI/CD tools does Detech support?

                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We work with leading tools including Jenkins, GitHub Actions, GitLab CI/CD, Bitbucket Pipelines, Azure DevOps, and AWS CodePipeline.
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate CI/CD with cloud infrastructure?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We integrate CI/CD pipelines with AWS, Azure, GCP, and hybrid environments to support seamless cloud-native deployments.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does CI/CD improve software quality?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        By automating testing and validation at every stage, CI/CD pipelines ensure issues are caught early, reducing risks and improving reliability in production.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            
            
            
            
            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Containerization and orchestration (Docker, Kubernetes)
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help businesses modernize their applications with containerization and orchestration solutions powered by Docker and Kubernetes. By containerizing applications, we ensure they are lightweight, portable, and consistent across environments, eliminating compatibility issues. With Kubernetes orchestration, we enable scalable, resilient, and automated deployments, ensuring your applications run smoothly whether on-premises, in the cloud, or in hybrid environments.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our approach empowers organizations to achieve faster development cycles, improved resource utilization, and highly available systems.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech combines DevOps expertise and cloud-native practices to design container and orchestration strategies tailored to your business. We go beyond deployment by focusing on security, monitoring, scaling, and automation, ensuring your infrastructure supports both current and future needs.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Efficient Resource Utilization
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Simplified Deployment
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Automated Orchestration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Consistency Across Environments
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 With Detech as your partner, you gain a reliable, cost-efficient, and future-ready application environment that drives agility and innovation.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                    What is containerization, and why does my business need it?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Containerization packages applications and dependencies into lightweight, portable units that run consistently across any environment, reducing errors and improving efficiency.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Why use Kubernetes for orchestration?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Kubernetes automates deployment, scaling, and management of containers, ensuring applications remain resilient, secure, and highly available.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech migrate existing applications to containers?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We specialize in migrating legacy and modern applications into containerized environments for better scalability and portability.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does containerization improve cost efficiency?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Containers optimize resource usage and reduce infrastructure overhead, lowering operational costs while improving performance and deployment speed.
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                 Infrastructure as Code (IaC)
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help businesses transform their infrastructure management with Infrastructure as Code (IaC) practices using tools like Terraform, Ansible, and AWS CloudFormation. With IaC, infrastructure is provisioned and managed through code instead of manual processes, making deployments faster, consistent, and error-free.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  This approach enables businesses to automate scaling, reduce downtime, improve compliance, and eliminate configuration drift, ensuring a reliable and repeatable infrastructure environment across all stages of development and production.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech brings deep expertise in automation and DevOps practices, ensuring that your infrastructure is not only defined as code but also version-controlled, tested, and secure. Our tailored IaC strategies help organizations achieve faster delivery, reduced operational costs, and improved reliability.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Automated Provisioning
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Version Control & Collaboration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Consistency & Reliability
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Infrastructure
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Partnering with Detech means gaining a team that builds future-ready, automated, and resilient infrastructure aligned with your business goals.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is Infrastructure as Code (IaC)?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        IaC is the practice of managing and provisioning IT infrastructure through machine-readable code instead of manual configuration, ensuring speed, consistency, and reliability.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     Which tools does Detech use for IaC?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We leverage leading tools such as Terraform, Ansible, AWS CloudFormation, and Azure Resource Manager to build and automate infrastructure.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does IaC benefit my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        IaC reduces human error, accelerates deployment, enhances scalability, and ensures infrastructure is repeatable and consistent across environments.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate IaC into our existing DevOps pipeline?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We specialize in integrating IaC into your CI/CD pipelines, enabling fully automated application and infrastructure deployment.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Monitoring and observability
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we enable businesses to gain real time visibility into their systems, applications, and infrastructure with advanced monitoring and observability solutions. By integrating tools like Prometheus, Grafana, ELK Stack, and Datadog, we ensure that every part of your digital ecosystem is trackable, measurable, and transparent.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our approach goes beyond simple monitoring observability helps identify root causes, performance bottlenecks, and anomalies before they impact users, ensuring proactive issue resolution and enhanced reliability.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech brings end-to-end expertise in monitoring, logging, and observability practices, ensuring that your business has deep insights and actionable intelligence across all environments.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Real-Time Performance Tracking
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Proactive Issue Detection
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Comprehensive Analytics
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Monitoring Solutions
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  With our proactive monitoring solutions, you can achieve higher uptime, better performance, and improved customer experience. Choosing Detech means partnering with a team that makes your systems not only observable but also intelligent and self-healing.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is the difference between monitoring and observability?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Monitoring focuses on tracking system metrics, while observability provides a deeper understanding of why issues occur by analyzing logs, traces, and metrics together.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Which tools does Detech use for monitoring and observability?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We utilize leading platforms like Prometheus, Grafana, ELK Stack, Datadog, and New Relic for comprehensive system insights.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How can monitoring and observability improve my business operations?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        They provide real-time performance insights, help detect issues before customers notice, and ensure higher reliability and uptime for your systems.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech provide 24/7 monitoring solutions?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We offer automated alerting and continuous monitoring to ensure your critical applications and infrastructure remain stable and performant at all times.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Security and compliance automation
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we help organizations secure their digital infrastructure while ensuring compliance with industry regulations through automated security and compliance solutions. From continuous vulnerability scanning, automated patch management, identity and access control, to compliance checks against standards like GDPR, ISO, HIPAA, and PCI-DSS, we make sure your systems remain resilient and compliant without manual overhead.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Our automation-driven approach ensures faster threat detection, reduced risks, and simplified audits—allowing businesses to focus on growth with confidence.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech delivers enterprise-grade security frameworks combined with automation-first strategies, ensuring your systems are secure, compliant, and audit-ready at all times. By integrating DevSecOps practices, automated compliance reports, and proactive security monitoring, we reduce human errors and improve overall system resilience.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Automated Security Checks
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Compliance Enforcement
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Risk Reduction
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Streamlined Audits
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 With us, your business benefits from stronger protection, streamlined compliance, and peace of mind.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is security and compliance automation?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It’s the process of using automation tools to enforce security policies and validate compliance requirements across systems, reducing manual effort and risk.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Which compliance frameworks does Detech support?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We support global standards such as GDPR, ISO 27001, HIPAA, SOC 2, and PCI-DSS, ensuring businesses meet regulatory requirements seamlessly.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does automation improve security compliance?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Automation ensures real-time checks, faster remediation of vulnerabilities, and continuous monitoring, making compliance proactive rather than reactive.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech integrate compliance automation into existing workflows?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We integrate seamlessly into your CI/CD pipelines, cloud environments, and IT workflows, ensuring security and compliance without slowing down innovation.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


          </div>
        </div>
      </div>





      <!-- ar/vr integration -->


      <div class="page-service-details mt-100">
        <div class="container">
          <drawer-opener
            class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
            data-drawer=".drawer-service-sidebar"
            data-aos="fade-up"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"
              />
            </svg>
            Filter
          </drawer-opener>
          <div class="row">
            <div class="col-12 col-lg-5">
              <div class="sidebar-filter drawer-service-sidebar">
                <div class="drawer-headings d-lg-none" data-aos="fade-up">
                  <div class="heading text-24">Filter</div>
                  <drawer-opener
                    class="svg-wrapper menu-close"
                    data-drawer=".drawer-service-sidebar"
                  >
                    <svg
                      width="30px"
                      height="30px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                        fill="currentColor"
                      ></path>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </drawer-opener>
                </div>
                <aside class="service-sidebar">
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <h2 class="sidebar-heading heading text-24">
                      Services List
                    </h2>
                    <ul class="secvice-categories list-unstyled">
                      <li>
                        <button class="secvice-category" onclick="showService('ui-design')">
                          <a
                          class="secvice-category subheading subheading-bg active text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          AR product visualization
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </button>
                      </li>
                      <li>
                        <div class="service-category" onclick="showService('ux-optimization')">
                          <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          VR-based training simulations
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                        </div>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          AR mobile applications
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          VR collaboration tools
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Mixed reality experiences
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          class="secvice-category subheading subheading-bg text-18 fw-400"
                          href="service-details.html"
                          aria-label="blog category"
                        >
                          Hardware integration & optimization
                          <svg
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z"
                              fill="currentColor"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="sidebar-widget service-contact radius18"
                    data-aos="fade-up"
                  >
                    <div class="media media-bg overlay">
                      <img
                        src="assets/img/service/secvice-contact.jpg"
                        width="1000"
                        height="929"
                        loading="lazy"
                        alt="image"
                      >
                    </div>
                    <div class="service-contact-content">
                      <h2 class="heading text-36">
                        Contact with us <br>
                        for any advice
                      </h2>
                      <a
                        class="icon-contact"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        <svg
                          width="44"
                          height="44"
                          viewBox="0 0 44 44"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                            stroke="#20282D"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        <span class="visually-hidden"
                          >Call us at +12345.6789.333 number</span
                        >
                      </a>
                      <div class="contact-text text text-16">
                        Need help? Talk to an expert
                      </div>
                      <a
                        class="contact-number heading text-24"
                        href="tel:+12345.6789.333"
                        aria-label="Call us at +12345.6789.333 number"
                      >
                        +12345.6789.333
                      </a>
                    </div>
                  </div>
                  <div class="sidebar-widget radius18" data-aos="fade-up">
                    <div class="service-download">
                      <h2 class="heading text-24">Download Our Brochures</h2>
                      <div class="service-download">
                        <svg
                          class="icon-50"
                          width="50"
                          height="50"
                          viewBox="0 0 50 50"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M43.2812 13.875L33.0312 3.5625L31.9375 3.125H7.8125L6.25 4.6875V21.875H9.375V6.25H28.125V17.1875L29.6875 18.75H40.625V21.875H43.75V15L43.2812 13.875ZM31.25 15.625V6.25L40.625 15.625H31.25ZM7.8125 25L6.25 26.5625V45.3125L7.8125 46.875H42.1875L43.75 45.3125V26.5625L42.1875 25H7.8125ZM40.625 40.625V43.75H9.375V28.125H40.625V40.625ZM15.625 37.5H14.625V40.625H12.5V31.25H15.8125C18.1562 31.25 19.3438 32.375 19.3438 34.375C19.3498 34.8001 19.2635 35.2214 19.0909 35.6098C18.9182 35.9983 18.6633 36.3447 18.3438 36.625C17.5693 37.2287 16.6062 37.5386 15.625 37.5ZM15.4375 32.9688H14.625V35.875H15.4375C16.5625 35.875 17.125 35.375 17.125 34.4062C17.125 33.4375 16.5625 32.9688 15.4375 32.9688ZM28.125 39.3125C28.5865 38.8579 28.9474 38.3115 29.1843 37.7085C29.4211 37.1056 29.5287 36.4597 29.5 35.8125C29.5 32.6875 27.8438 31.25 24.5 31.25H21.1875V40.625H24.5C25.161 40.657 25.8218 40.5575 26.4441 40.3322C27.0664 40.1069 27.6377 39.7603 28.125 39.3125ZM23.2812 38.9062V32.9688H24.3125C24.7111 32.9434 25.1106 32.9996 25.4868 33.134C25.8629 33.2683 26.2076 33.4779 26.5 33.75C26.7649 34.0281 26.9706 34.3571 27.1049 34.7169C27.2392 35.0768 27.2992 35.4601 27.2812 35.8438C27.3281 36.6675 27.0472 37.4763 26.5 38.0938C26.2139 38.3675 25.8754 38.5806 25.5049 38.7202C25.1343 38.8599 24.7394 38.9231 24.3438 38.9062H23.2812ZM37.1875 37H34.1562V40.625H32.0312V31.25H37.4688V32.9688H34.1562V35.2812H37.1875V37Z"
                            fill="CurrentColor"
                          />
                        </svg>
                        <div class="download-text">
                          <div class="text text-16">
                            Business is a marketing discipline focused on
                            growing visibility organ (non-paid) technic
                            required.
                          </div>
                          <a
                            href="#"
                            class="download-button text text-14 fw-600"
                            aria-label="download"
                          >
                            Click here to download
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  AR product visualization
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  At Detech, we bring products to life with Augmented Reality (AR) product visualization, helping businesses showcase their offerings in an interactive, immersive, and realistic way.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  Whether it’s allowing customers to see how furniture fits in their home, trying on virtual accessories, or visualizing industrial equipment in real-world environments, our AR solutions enhance customer engagement and decision-making. By blending cutting-edge AR technology with seamless UI/UX, we create memorable digital experiences that bridge the gap between imagination and reality.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          Detech is committed to helping businesses stand out in competitive markets through innovative AR solutions.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Interactive 3D Experiences
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced Customer Engagement
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Integration
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable Solutions
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Our team specializes in scalable, user-friendly, and brand-aligned AR applications that not only engage customers but also boost conversions and customer trust. With expertise in AR frameworks, 3D modeling, and interactive design, we ensure your products are experienced—not just seen.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is AR product visualization?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It’s the use of augmented reality technology to let customers interact with products in real-world settings through their devices, offering a more immersive shopping or decision-making experience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How can AR visualization benefit my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It increases customer confidence, engagement, and purchase intent by allowing users to experience products in context before making a decision.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech build AR apps for both mobile and web?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We develop native mobile AR apps, cross-platform AR solutions, and WebAR experiences that run directly in browsers.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can AR be integrated into my existing e-commerce platform?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. Detech offers seamless integration of AR visualization into e-commerce portals, mobile apps, and custom platforms, ensuring a smooth user experience.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            <div id="ux-optimization" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  VR-based training simulations
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Detech empowers organizations with Virtual Reality (VR)-based training simulations that deliver safe, engaging, and highly effective learning experiences. From employee onboarding and healthcare training to industrial safety and machinery operation, our VR simulations immerse users in realistic, risk-free environments where they can practice, experiment, and master skills.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  By combining interactive design with cutting-edge VR technology, we create training programs that are more engaging than traditional methods and drive better knowledge retention and performance.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, we believe training should be experiential and impactful. Our VR training solutions are tailored to your industry needs, offering scalability, customization, and measurable results. With expertise in VR development, 3D modeling, and user experience design, we ensure simulations are intuitive, realistic, and aligned with your organizational goals.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Immersive Learning
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Skill Development
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Customizable Scenarios
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Safe & Cost-Effective
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Choosing Detech means investing in training that not only reduces risks and costs but also accelerates workforce readiness.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What industries can benefit from VR-based training simulations?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        VR training is widely used in healthcare, manufacturing, aviation, logistics, education, and corporate training, but it can be tailored for almost any sector.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does VR training improve learning outcomes?

                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        It provides hands-on, immersive experiences that improve knowledge retention, engagement, and confidence, while eliminating risks tied to real-world training.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech create customized VR training content for my organization?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We design industry-specific, fully customized simulations to meet your unique business and training requirements.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What devices are supported for VR training?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our solutions work across major VR platforms like Oculus, HTC Vive, Meta Quest, and other headsets, ensuring flexibility and accessibility.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>

            
            
            
            
            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  AR mobile applications
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Detech specializes in developing Augmented Reality (AR) mobile applications that bring digital experiences into the real world. Whether it’s interactive product demos, retail try-ons, immersive learning apps, or AR navigation, our solutions are designed to enhance customer engagement and deliver practical business value.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  By leveraging AR technology, we create apps that blend physical and digital interactions seamlessly, offering users a more engaging, informative, and personalized mobile experience.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, we combine technical expertise, creative design, and user-centric development to build AR mobile applications that stand out in a competitive market. Our team focuses on performance, scalability, and innovation, ensuring that your AR app not only looks stunning but also delivers real-world impact.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Cross-Platform Compatibility
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Interactive Features
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              User-Centric Design
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Business Growth Focused
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 By choosing Detech, you gain a partner who can transform your ideas into engaging AR solutions that drive customer satisfaction and business growth.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                    What industries benefit the most from AR mobile applications?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        AR is widely adopted in retail, real estate, education, healthcare, travel, and entertainment, but can be applied to almost any business sector.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech build custom AR apps for both iOS and Android?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We develop native and cross-platform AR apps that work seamlessly across iOS and Android devices.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How do AR mobile applications enhance customer engagement?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        AR adds an interactive and immersive layer to the user experience, making products and services more memorable and engaging.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What technologies does Detech use for AR app development?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We use leading AR frameworks such as ARKit, ARCore, Vuforia, and Unity 3D to deliver high-quality, scalable AR applications.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                VR collaboration tools
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Detech develops VR collaboration tools that enable teams, clients, and stakeholders to connect in immersive 3D environments. Instead of relying on traditional video calls, our VR solutions create virtual meeting spaces, design review rooms, and training hubs where participants can interact with digital models, share ideas, and make decisions in real time.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  This fosters better communication, stronger engagement, and faster problem-solving, especially for businesses working remotely or across multiple locations.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, we believe collaboration should be immersive, interactive, and productive. Our VR collaboration tools are designed with scalability, security, and ease of use in mind, ensuring they fit seamlessly into your workflows.
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Virtual Meeting Spaces
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Real-Time Interaction
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Remote Work Optimization
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Customizable Environments
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  By leveraging cutting-edge VR technology, we help businesses reduce travel costs, accelerate innovation, and strengthen teamwork. Partnering with Detech means gaining a future-ready collaboration platform that enhances both efficiency and creativity.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     Who can benefit from VR collaboration tools?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Businesses in architecture, engineering, healthcare, education, IT, and remote work industries can benefit from VR collaboration for meetings, training, and design visualization.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     Can Detech customize VR environments for my business?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We design custom VR spaces that match your brand identity, workflows, and industry needs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What hardware is required to use VR collaboration tools?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        VR tools typically work with headsets like Meta Quest, HTC Vive, and Oculus Rift, but we can also enable desktop and mobile access for flexibility.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How do VR collaboration tools improve productivity?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        They allow teams to visualize complex ideas, interact with 3D data, and collaborate in real-time, leading to faster decisions and better outcomes.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>



            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Mixed reality experiences
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Detech creates Mixed Reality (MR) experiences that seamlessly blend the physical and digital worlds to deliver highly interactive and immersive solutions. MR allows users to interact with digital objects anchored in real-world environments, enabling applications in product visualization, training, design reviews, and marketing campaigns.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  By combining AR and VR technologies, we deliver experiences that are not only visually stunning but also practical and engaging, helping businesses innovate and connect with users in entirely new ways.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, we leverage cutting-edge MR technologies and human-centered design to craft experiences that are both innovative and intuitive.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Blended Reality Interactions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Interactive Training & Demos
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Scalable & Flexible
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Enhanced Engagement
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                  Our team ensures that every MR solution is scalable, interactive, and aligned with business goals, helping companies enhance engagement, improve learning outcomes, and create memorable user experiences. Choosing Detech means partnering with a team that transforms ideas into immersive, high-impact solutions.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What is mixed reality, and how does it differ from AR and VR?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Mixed Reality (MR) combines AR and VR, allowing users to interact with digital elements anchored in the real world, rather than just overlaying or immersing them.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      What industries can benefit from MR experiences?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        MR is widely used in manufacturing, education, healthcare, retail, real estate, and marketing, providing interactive, hands-on experiences.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech build MR solutions for both mobile and headset platforms?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We develop MR applications for mobile devices, AR/VR headsets, and enterprise-grade MR platforms, ensuring wide accessibility.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does MR enhance user engagement?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        MR creates immersive, interactive, and context-aware experiences that increase engagement, understanding, and retention, while allowing users to interact naturally with digital content.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


            <div id="ui-design" class="col-12 col-lg-7">
              <div class="service-details-content">
                <div class="details-media radius18" data-aos="fade-up">
                  <img
                    src="assets/img/service/s1.jpg"
                    width="1000"
                    height="596"
                    loading="lazy"
                    alt="image"
                  >
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                  Hardware integration & optimization
                </h2>

                <p class="text text-18" data-aos="fade-up">
                  Detech delivers comprehensive hardware integration and optimization solutions that ensure your systems, devices, and infrastructure work seamlessly together. From IoT devices, sensors, and industrial machinery to AR/VR peripherals and edge computing hardware, we design and implement integration strategies that maximize performance, reliability, and efficiency.
                </p>

                <p class="text text-18" data-aos="fade-up">
                  By combining hardware with smart software solutions, we enable real time data processing, automated workflows, and optimized system performance for businesses across industries.
                </p>

                <div class="service-choose-us" data-aos="fade-up">
                  <div class="row service-row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-img radius18">
                        <img
                          src="assets/img/service/sd-1.jpg"
                          width="1000"
                          height="962"
                          loading="lazy"
                          alt="image"
                        >
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                      <div class="choose-us-desc">
                        <h2 class="heading text-36">Why Choose us</h2>
                        <p class="text text-18">
                          At Detech, we bring deep technical expertise and a systems focused approach to hardware integration. Our team ensures that every component is fully compatible, secure, and optimized for performance, reducing downtime and operational bottlenecks.
                        </p>
                        <ul class="text-lists list-unstyled">
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Seamless Connectivity
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Performance Optimization
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Custom Solutions
                            </div>
                          </li>
                          <li class="text-item" data-aos="fade-up">
                            <svg
                              class="icon-24"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                fill="CurrentColor"
                              />
                            </svg>
                            <div class="text text-18 fw-600">
                              Ongoing Support
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="text text-18" data-aos="fade-up">
                 Partnering with Detech means gaining a trusted technology partner who can transform your hardware ecosystem into a cohesive, high-performing, and future-ready solution.
                </p>

                <faq-accordion class="service-faq">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                     What types of hardware can Detech integrate?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We integrate a wide range of hardware, including IoT devices, sensors, AR/VR peripherals, industrial machinery, edge computing devices, and enterprise IT systems.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      How does hardware integration improve business operations?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Integration ensures smooth communication between devices and systems, enabling automated workflows, real-time data insights, and optimized performance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Can Detech optimize existing hardware systems?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. We evaluate current setups, identify inefficiencies, and implement optimization strategies to improve reliability, speed, and scalability.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-24">
                      Does Detech provide end-to-end support for hardware solutions?
                      <svg
                        class="icon icon-24"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_9088_8345)">
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                            fill="CurrentColor"
                          />
                        </g>
                        <defs>
                          <clipPath>
                            <rect width="24" height="24" fill="CurrentColor" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. We provide design, implementation, testing, monitoring, and ongoing support to ensure your hardware ecosystem operates flawlessly.
                      </div>
                    </div>
                  </div>
                </faq-accordion>
              </div>
            </div>


          </div>
        </div>
      </div>






      
    </main>
@endsection