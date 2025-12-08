{{-- resources/views/livewire/careers-component.blade.php --}}
<div wire:ignore.self class="careers-wrapper">
    <div class="col-lg-12 col-12 form" wire:key="careers-main-container">
        <!-- Search Widget -->
        <div class="field" data-aos="fade-up">
    <form wire:submit.prevent class="form-blog-search">
        <input type="text" id="blog-search-input" name="blog-search" placeholder="Search here" class="text-18"
            wire:model.live.debounce.500ms="search" wire:keydown.enter.prevent>

        <div class="custom-select field text-18" role="combobox">
            <div class="custom-select__trigger text-18" tabindex="0">
                <span>
                    @if ($selectedType)
                        {{ ucfirst($selectedType) }}
                    @else
                        Select job type
                    @endif
                </span>
            </div>
            <div class="custom-select__options">
                <div class="custom-select__option" wire:click="$set('selectedType', '')">
                    All Job Types
                </div>
                @foreach ($jobTypes as $type)
                    <div class="custom-select__option" wire:click="$set('selectedType', '{{ $type }}')">
                        {{ ucfirst($type) }}
                    </div>
                @endforeach
            </div>
        </div>

        <button type="button" class="button button--primary" wire:click="resetFilters">
            Reset
        </button>
    </form>
</div>

<div class="field buttons" data-aos="fade-up" data-aos-delay="200">
    <button class="button button--primary {{ !$selectedCategory ? 'active' : '' }}"
        wire:click="$set('selectedCategory', '')">
        All
        <span class="svg-wrapper">{{ $totalJobsCount }}</span>
    </button>

    @foreach ($categories as $category => $count)
        <button class="button button--primary {{ $selectedCategory === $category ? 'active' : '' }}"
            wire:click="selectCategory('{{ $category }}')">
            {{ $category }}
            <span class="svg-wrapper">{{ $count }}</span>
        </button>
    @endforeach
</div>

        <div class="careers-list" data-aos="fade-up" data-aos-delay="400">
            @forelse($careers as $career)
                <div class="career-item" @if (!$search && !$selectedType && !$selectedCategory) data-aos="fade-up" @endif
                    wire:key="career-{{ $career->id }}">
                    <!-- Clickable Career Header -->
                    <a href="{{ route('careers.show', $career->id) }}" class="career-header heading text-22"
                        style="text-decoration: none; display: block;">
                        <div class="career-title-section">
                            <div class="career-title">
                                {{ $career->job_title }}
                            </div>
                        </div>
                        <div class="career-tags">
                            <div class="subheading text-18 subheading-bg">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9C5 13.17 9.42 18.92 11.24 21.11C11.64 21.59 12.37 21.59 12.77 21.11C14.58 18.92 19 13.17 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"
                                        fill="currentColor" />
                                </svg>
                                <span>{{ $career->job_location }}</span>
                            </div>
                            <div class="subheading text-18 subheading-bg">
                                @if ($career->job_type === 'onsite')
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 6H16V4C16 2.89 15.11 2 14 2H10C8.89 2 8 2.89 8 4V6H4C2.89 6 2 6.89 2 8V19C2 20.11 2.89 21 4 21H20C21.11 21 22 20.11 22 19V8C22 6.89 21.11 6 20 6ZM10 4H14V6H10V4ZM20 19H4V8H20V19Z"
                                            fill="currentColor" />
                                    </svg>
                                @elseif($career->job_type === 'hybrid')
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 16V4H3V16H21ZM21 2C22.1 2 23 2.9 23 4V16C23 17.1 22.1 18 21 18H14V20H16V22H8V20H10V18H3C1.9 18 1 17.1 1 16V4C1 2.9 1.9 2 3 2H21Z"
                                            fill="currentColor" />
                                        <path d="M5 6H19V12H5V6Z" fill="currentColor" />
                                        <path d="M7 14H9V16H7V14Z" fill="currentColor" />
                                    </svg>
                                @else
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="3" width="20" height="14" rx="1"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path d="M8 21H16" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                @endif
                                <span>{{ ucfirst($career->job_type) }}</span>
                            </div>
                        </div>
                    </a>

                    <!-- Optional: Quick preview content -->
                    <div class="career-preview text-16 mt-20" style="display: none;">
                        <div class="preview-content">
                            {{ Str::limit(strip_tags($career->job_content), 150) }}
                        </div>
                        <div class="apply-section mt-20">
                            <a href="{{ route('careers.apply', $career->id) }}" class="button button--primary">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            @empty

                <div class="career-item" data-aos="fade-up">
                    <div class="career-header heading text-22 text-center py-40">
                        @if ($search || $selectedType || $selectedCategory)
                            No job openings found matching your criteria.
                            <div class="mt-20">
                                <button class="button button--primary" wire:click="resetFilters">
                                    Clear Filters
                                </button>
                            </div>
                        @else
                            No job openings available at the moment. Please check back later.
                        @endif
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>



@script
    <script>
        Livewire.hook('morph.updated', ({
            el,
            component
        }) => {
            // This ensures AOS recalculates the positions of new elements
            // preventing them from getting stuck in an invisible state
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        });
    </script>
@endscript
