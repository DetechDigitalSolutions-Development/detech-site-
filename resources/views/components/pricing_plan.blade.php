<!-- Pricing Plan -->
@php
    $plans = App\Models\PricingPlan::active()->ordered()->get();
    $activePlansCount = $plans->count();
@endphp

@if ($activePlansCount)
    <div class="pricing-plan mt-100">
        <div class="container">
            <div class="section-headings text-center">
                <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path
                                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                fill="CurrentColor" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Pricing Plan</span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path
                                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                fill="CurrentColor" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h2 class="heading text-50" data-aos="fade-up">
                    Choose Your Perfect Plans
                </h2>
            </div>

            <div class="section-content">
                <div class="pricing-cards">
                    <div class="row product-grid justify-content-center">


                        @foreach ($plans as $plan)
                            <div class="col-12 col-lg-12 col-xl-4">
                                <div class="card-pricing radius18 {{ $plan->is_highlighted ? 'active' : '' }}">
                                    <div class="card-pricing-headings radius18" data-aos="fade-up">
                                        <h2 class="heading text-24">{{ $plan->name }}</h2>
                                        <p class="text text-16">{{ $plan->short_description }}</p>
                                        <div class="pricing-box">
                                            <span class="subheading text-50 fw-600">{{ $plan->formatted_price }}</span>
                                            <span
                                                class="subheading subheading-monthly text-16 fw-400">{{ $plan->billing_period }}</span>

                                            @if ($plan->billing_type === 'both')
                                                <div class="yearly-price mt-2">
                                                    <small class="text-14 text-muted">
                                                        {{ $plan->currency_symbol }}{{ number_format($plan->price * 12, 2) }}/Yearly
                                                    </small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <ul class="text-lists list-unstyled">
                                        @if ($plan->features)
                                            @foreach ($plan->features as $feature)
                                                <li class="text-item text text-18" data-aos="fade-up"
                                                    data-aos-delay="{{ ($loop->index + 1) * 50 }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                        height="28" viewBox="0 0 28 28" fill="none">
                                                        <g clip-path="url(#clip0_9088_5324)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                                                                fill="white" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                                                                fill="CurrentColor" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                                                                fill="CurrentColor" />
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <rect width="28" height="28" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    {{ $feature['feature'] ?? $feature }}
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="buttons" data-aos="fade-up">
                                        <a href="{{ route('contact') }}" class="button button--primary"
                                            aria-label="Choose {{ $plan->name }} Package">
                                            Choose Package
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if ($plans->isEmpty())
                            <div class="col-12">
                                <div class="alert alert-info text-center" data-aos="fade-up">
                                    <p class="text-18">No pricing plans available at the moment.</p>
                                    <a href="{{ route('contact') }}" class="button button--primary mt-3">
                                        Contact Us for Pricing 
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
