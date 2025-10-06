
    <!-- Dynamic Multicolumn Section -->
    <div class="multicolumn multicolumn-page mt-100">
        <div class="container">
            <div class="multicolumn-inner">
                <div class="row product-grid">
                    @foreach($services as $index => $service)
                        <div class="col-xl-4 col-md-6 col-12" 
                             data-aos="fade-up" 
                             @if($index > 0) data-aos-delay="{{ ($index % 3) * 100 }}" @endif>
                            <a class="multicolumn-card" 
                               href="{{ route('services.show', $service['id']) }}" 
                               aria-label="View {{ $service['title'] }} Details">
                                
                                <!-- Card Icon -->
                                <div class="card-icon">
                                    {!! app('App\Http\Controllers\ServiceController')->getServiceIcon($service['id']) !!}
                                </div>

                                <!-- Service Title -->
                                <h2 class="heading text-28">{{ $service['title'] }}</h2>
                                
                                <!-- Short Description -->
                                <div class="text text-16">
                                    {{ $service['short_description'] }}
                                </div>

                                <!-- Features List -->
                                <ul class="text-lists list-unstyled">
                                    @foreach($service['features'] as $feature)
                                        <li class="text-item text text-16 fw-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M18 13H13V18C13 18.2652 12.8946 18.5196 12.7071 18.7071C12.5196 18.8946 12.2652 19 12 19C11.7348 19 11.4804 18.8946 11.2929 18.7071C11.1054 18.5196 11 18.2652 11 18V13H6C5.73478 13 5.48043 12.8946 5.29289 12.7071C5.10536 12.5196 5 12.2652 5 12C5 11.7348 5.10536 11.4804 5.29289 11.2929C5.48043 11.1054 5.73478 11 6 11H11V6C11 5.73478 11.1054 5.48043 11.2929 5.29289C11.4804 5.10536 11.7348 5 12 5C12.2652 5 12.5196 5.10536 12.7071 5.29289C12.8946 5.48043 13 5.73478 13 6V11H18C18.2652 11 18.5196 11.1054 18.7071 11.2929C18.8946 11.4804 19 11.7348 19 12C19 12.2652 18.8946 12.5196 18.7071 12.7071C18.5196 12.8946 18.2652 13 18 13Z" fill="CurrentColor"/>
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>