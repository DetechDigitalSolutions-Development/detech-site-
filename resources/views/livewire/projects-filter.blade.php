<div wire:ignore.self class="projects-wrapper">
    <div class="col-lg-12 col-12 form" wire:key="projects-main-container">
        <!-- Search and Filter Widget -->
        <div class="field" data-aos="fade-up">
            <form wire:submit.prevent class="form-blog-search">
                <input type="text" id="projects-search-input" name="projects-search" placeholder="Search projects..." 
                       class="text-18" wire:model.live.debounce.500ms="search" wire:keydown.enter.prevent>
                
                <!-- Type Filter Dropdown -->
                <div class="custom-select field text-18" role="combobox">
                    <div class="custom-select__trigger text-18" tabindex="0">
                        <span>
                            @if ($selectedType)
                                {{ ucfirst(str_replace('_', ' ', $selectedType)) }}
                            @else
                                Project Type
                            @endif
                        </span>
                    </div>
                    <div class="custom-select__options">
                        <div class="custom-select__option" wire:click="$set('selectedType', '')">
                            All Types
                        </div>
                        @foreach ($types as $type)
                            @php
                                $typeValue = strtolower(str_replace(' ', '_', $type));
                            @endphp
                            <div class="custom-select__option" wire:click="$set('selectedType', '{{ $typeValue }}')">
                                {{ $type }}
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Industry Filter Dropdown -->
                <div class="custom-select field text-18" role="combobox">
                    <div class="custom-select__trigger text-18" tabindex="0">
                        <span>
                            @if ($selectedIndustry)
                                {{ $selectedIndustry }}
                            @else
                                Industry
                            @endif
                        </span>
                    </div>
                    <div class="custom-select__options">
                        <div class="custom-select__option" wire:click="$set('selectedIndustry', '')">
                            All Industries
                        </div>
                        @foreach ($industries as $industry)
                            <div class="custom-select__option" wire:click="$set('selectedIndustry', '{{ $industry }}')">
                                {{ $industry }}
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Region Filter Dropdown -->
                <div class="custom-select field text-18" role="combobox">
                    <div class="custom-select__trigger text-18" tabindex="0">
                        <span>
                            @if ($selectedRegion)
                                {{ $selectedRegion }}
                            @else
                                Region
                            @endif
                        </span>
                    </div>
                    <div class="custom-select__options">
                        <div class="custom-select__option" wire:click="$set('selectedRegion', '')">
                            All Regions
                        </div>
                        @foreach ($regions as $region)
                            <div class="custom-select__option" wire:click="$set('selectedRegion', '{{ $region }}')">
                                {{ $region }}
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <button type="button" class="button button--primary button--reset" wire:click="resetFilters">
                    Reset
                </button>
            </form>
        </div>

        <!-- Active Filters Display -->
        @if($search || $selectedType || $selectedIndustry || $selectedRegion)
        <div class="active-filters mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="text text-16">
                <strong>Active Filters:</strong>
                @if($search)
                    <span class="filter-badge">Search: "{{ $search }}"</span>
                @endif
                @if($selectedType)
                    <span class="filter-badge">Type: {{ ucfirst(str_replace('_', ' ', $selectedType)) }}</span>
                @endif
                @if($selectedIndustry)
                    <span class="filter-badge">Industry: {{ $selectedIndustry }}</span>
                @endif
                @if($selectedRegion)
                    <span class="filter-badge">Region: {{ $selectedRegion }}</span>
                @endif
            </div>
        </div>
        @endif

        <!-- Projects Grid -->
        <div class="container-fluid">
          <div class="row project-grid">
            @forelse($projects as $project)
              @include('components.cards.projects_card',['project'=>$project])

                @empty
                    <div class="col-12">
                        <div class="no-projects text-center py-5">
                            <h3 class="heading text-24">
                                @if ($search || $selectedType || $selectedIndustry || $selectedRegion)
                                    No projects found matching your criteria.
                                    <div class="mt-3">
                                        <button class="button button--primary" wire:click="resetFilters">
                                            Clear Filters
                                        </button>
                                    </div>
                                @else
                                    No projects available at the moment.
                                @endif
                            </h3>
                        </div>
                    </div>
                @endforelse
            </div>
            
            <!-- Pagination -->
            @if($projects->hasPages())
            <div class="pagination-wrapper mt-5" data-aos="fade-up">
                <div class="pagination-container">
                    {{ $projects->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@script
<script>
    Livewire.hook('morph.updated', ({ el, component }) => {
        // This ensures AOS recalculates the positions of new elements
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });

    // Custom select functionality
    document.addEventListener('DOMContentLoaded', function() {
        const customSelects = document.querySelectorAll('.custom-select');
        
        customSelects.forEach(select => {
            const trigger = select.querySelector('.custom-select__trigger');
            const options = select.querySelector('.custom-select__options');
            
            if (trigger && options) {
                // Toggle dropdown on trigger click
                trigger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    options.style.display = options.style.display === 'block' ? 'none' : 'block';
                    
                    // Close other open dropdowns
                    customSelects.forEach(otherSelect => {
                        if (otherSelect !== select) {
                            const otherOptions = otherSelect.querySelector('.custom-select__options');
                            if (otherOptions) {
                                otherOptions.style.display = 'none';
                            }
                        }
                    });
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function() {
                    options.style.display = 'none';
                });
                
                // Prevent dropdown close when clicking inside options
                options.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
                
                // Handle keyboard navigation
                trigger.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        options.style.display = options.style.display === 'block' ? 'none' : 'block';
                    } else if (e.key === 'Escape') {
                        options.style.display = 'none';
                    }
                });
            }
        });
    });
</script>
@endscript