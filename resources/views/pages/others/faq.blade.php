@extends('layouts.app')

@section('content')
<main>
        <!-- Page Banner -->
            @include('components.page_banner',['title'=>'FAQ'])

      <!-- FAQ -->
      <div class="faq mt-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="section-headings">
                <div
                  class="subheading text-20 subheading-bg"
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
                  <span>Questions</span>
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
                  Frequently Asked Questions
                </h2>
                <div
                  class="text text-16"
                  data-aos="fade-up"
                  data-aos-delay="80"
                >
                  If you need immediate assistance, click the button below to
                  chat live with a Customer Service Customer live with
                  representative.
                </div>
                <div class="faq-form-wrap radius18" data-aos="fade-up">
                  <form action="#" class="faq-form">
                    <h2 class="heading text-24">Have any Question</h2>
                    <div class="field" data-aos="fade-up">
                      <label for="FaqForm-name" class="visually-hidden">
                        Your Name
                      </label>
                      <input
                        id="FaqForm-name"
                        class="text text-16"
                        type="text"
                        placeholder="Your Name"
                        name="Full name"
                        required
                      >
                    </div>
                    <div class="field" data-aos="fade-up" data-aos-delay="50">
                      <label for="FaqForm-body" class="visually-hidden">
                        Write your message
                      </label>
                      <textarea
                        id="FaqForm-body"
                        class="text text-16"
                        rows="4"
                        placeholder="Write Message.."
                        name="Message"
                        required
                      ></textarea>
                    </div>
                    <a
                      href="#"
                      data-aos="fade-up"
                      data-aos-delay="50"
                      class="button button--primary"
                      aria-label="Ask Your Question"
                    >
                      Ask Question Now
                      <span class="svg-wrapper">
                        <svg
                          class="icon-20"
                          width="20"
                          height="20"
                          viewBox="0 0 14 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.55664 2.88281L6.77097 3.66848L9.54875 6.44625H2.55664V7.55736H9.54875L6.77097 10.3351L7.55664 11.1208L11.6756 7.0018L7.55664 2.88281Z"
                            fill="CurrentColor"
                          />
                        </svg>
                      </span>
                    </a>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <faq-accordion>
                <div class="accordion-list">
                  <div class="accordion-block" data-aos="fade-up">
                    <div class="accordion-opener heading text-22">
                      What services does Detech offer?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Detech provides end-to-end technology solutions including web and mobile app development, full-stack software solutions, cloud integration, AI-powered applications, and IT consulting. We also specialize in delivering tailored enterprise solutions to help businesses thrive in a digital-first world.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="50"
                  >
                    <div class="accordion-opener heading text-22">
                      How does Detech handle data security?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We prioritize data security at every stage of development. From encryption and secure coding practices to compliance with international standards, Detech ensures your data remains protected, private, and resilient against threats.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="100"
                  >
                    <div class="accordion-opener heading text-22">
                      Can Detech support large-scale projects?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. Our team has the expertise and resources to handle projects of any scale—from startups seeking rapid growth to enterprises requiring complex, large-scale solutions.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="150"
                  >
                    <div class="accordion-opener heading text-22">
                      Does Detech offer AI solutions?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Absolutely. Detech integrates cutting-edge AI and machine learning technologies to help businesses automate processes, gain insights, and enhance customer experiences.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    <div class="accordion-opener heading text-22">
                      How experienced is the Detech team?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our team consists of skilled professionals with experience across full-stack development, cloud computing, AI, and enterprise systems. With 16+ completed projects and 30+ satisfied clients, we bring proven expertise to every engagement.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="250"
                  >
                    <div class="accordion-opener heading text-22">
                      Do you offer digital marketing services?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. In addition to software development, Detech provides digital marketing and SEO services to help businesses strengthen their online presence, generate leads, and grow their brand visibility.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="300"
                  >
                    <div class="accordion-opener heading text-22">
                      Can Detech solutions adapt to different industries?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Yes. Our solutions are scalable and customizable, allowing us to serve both niche businesses and large enterprises across multiple industries.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="350"
                  >
                    <div class="accordion-opener heading text-22">
                      Who benefits most from Detech’s services?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        We help startups, SMEs, and global enterprises that want to leverage technology for growth, efficiency, and innovation.
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-block"
                    data-aos="fade-up"
                    data-aos-delay="400"
                  >
                    <div class="accordion-opener heading text-22">
                      Who are your main clients?
                      <div class="svg-wrapper">
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
                              <rect
                                width="24"
                                height="24"
                                fill="CurrentColor"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="accordion-content">
                      <div class="accordion-content-inner text text-18">
                        Our clients range from local startups to global enterprises across industries such as finance, insurance, logistics, healthcare, and technology. We focus on building long-term partnerships by delivering measurable business value.
                      </div>
                    </div>
                  </div>
                </div>
              </faq-accordion>
            </div>
          </div>
        </div>
      </div>
    </main>
   
@endsection