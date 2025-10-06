<div class="col-12 col-lg-6 col-contact-form">
                <div class="contact-form-wrap radius18">
                  <div class="contact-form-headings">
                    <h2 class="heading text-32" data-aos="fade-up">
                      Make an Appointment
                    </h2>
                    <p class="text text-16" data-aos="fade-up">
                      Feel free to contact with us, we don't spam your email
                    </p>
                  </div>
                  <!-- Flash message integration starts here -->
                    @if (session('success'))
                      <div class="subheading text-10 subheading-bg" role="alert" data-aos="fade-up" style="color: green; margin-bottom: 15px;">
                        <span class="font-medium">{{ session('success') }}</span> 
                      </div>
                    @endif
                  <!-- Flash message integration ends here -->
                  <form action="{{ route('appointments.store') }}" method="POST" class="form contact-form" data-aos="fade-up">
                    @csrf
                    <div class="field">
                      <label for="ContactForm-name" class="visually-hidden">
                        Your Name
                      </label>
                      <input
                        id="ContactForm-name"
                        class="text text-16"
                        type="text"
                        placeholder="Your Name *"
                        name="name"
                        required
                      >
                    </div>
                    <div class="field">
                      <label for="ContactForm-email" class="visually-hidden">
                        Email Here
                      </label>
                      <input
                        id="ContactForm-email"
                        class="text text-16"
                        type="text"
                        placeholder="Email Here *"
                        name="email"
                        required
                      >
                    </div>
                    <div class="field">
                      <label for="ContactForm-service" class="visually-hidden">
                        Service Type
                      </label>
                      <input
                        id="ContactForm-service"
                        class="text text-16"
                        type="text"
                        placeholder="Service Type *"
                        name="service"
                        required
                      >
                    </div>
                    <div class="field">
                      <label for="ContactForm-body" class="visually-hidden">
                        Your Comment
                      </label>
                      <textarea
                        id="ContactForm-body"
                        class="text text-16"
                        rows="4"
                        placeholder="Your Comment *"
                        name="message"
                        required
                      ></textarea>
                    </div>
                    <div class="form-button">
                      <button
                        type="submit"
                        class="button button--secondary"
                        aria-label="Send Message"
                      >
                        Send Message
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
                              fill="currentColor"
                            ></path>
                          </svg>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>