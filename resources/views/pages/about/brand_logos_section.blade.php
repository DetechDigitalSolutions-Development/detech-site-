<!-- Brand Logo -->
<div class="running-content mt-100">
    <div class="container">
        <div class="content-inner">
            <div class="content-lists running-animation">
                <div class="content-item">
                    @php
                    $clientLogos = App\Models\SiteSetting::where('key', 'client_company_logos')->first();
                    $clientLogos = json_decode($clientLogos->value);
                @endphp
                @foreach($clientLogos as $logo)
                <div class="">
                    <img
                      src="{{ Storage::disk(config('public'))->url($logo ?? null) }}"
                     class="brand-logo-image"
                      loading="lazy"
                      alt="Brand Image"
                    >
                </div>
                @endforeach 
                @foreach($clientLogos as $logo)
                <div class="">
                    <img
                      src="{{ Storage::disk(config('public'))->url($logo ?? null) }}"
                     class="brand-logo-image"
                      loading="lazy"
                      alt="Brand Image"
                    >
                </div>
                @endforeach 
                    
                    {{-- Fallback if no logos --}}
                    @if(empty($clientLogos))
                        <div class="brand-logo-wrapper">
                            <img
                                src="assets/img/brand/b1.png"
                                alt="Brand Logo"
                                loading="lazy"
                                class="brand-logo-image"
                            >
                        </div>
                        <div class="brand-logo-wrapper">
                            <img
                                src="assets/img/brand/b2.png"
                                alt="Brand Logo"
                                loading="lazy"
                                class="brand-logo-image"
                            >
                        </div>
                        <div class="brand-logo-wrapper">
                            <img
                                src="assets/img/brand/b3.png"
                                alt="Brand Logo"
                                loading="lazy"
                                class="brand-logo-image"
                            >
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.brand-logo-image {
    max-height: 120px !important;
    max-width: auto !important;
    width: auto !important;
    height: auto !important;
    object-fit: contain !important;
    display: block !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .brand-logo-image {
        max-height: 40px !important;
        max-width: 150px !important;
    }

}

@media (max-width: 480px) {

    .brand-logo-image {
        max-height: 30px !important;
        max-width: 120px !important;
    }

}

.brand-logo-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
}
</style>

<script>
// Optional: Lazy loading enhancement
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.brand-logo-image');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const src = img.getAttribute('data-src') || img.src;
                
                // Preload image
                const preloadImage = new Image();
                preloadImage.src = src;
                preloadImage.onload = function() {
                    img.src = src;
                    img.classList.add('loaded');
                };
                
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px 0px',
        threshold: 0.1
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Handle image errors
    images.forEach(img => {
        img.onerror = function() {
            this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjUwIiB2aWV3Qm94PSIwIDAgMjAwIDUwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iNTAiIGZpbGw9IiNGMEYwRjAiLz48dGV4dCB4PSIxMDAiIHk9IjI1IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTIiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5Mb2dvPC90ZXh0Pjwvc3ZnPg==';
            this.alt = 'Logo placeholder';
            this.classList.add('error');
        };
    });
});
</script>