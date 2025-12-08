<!-- Brand Logo -->
<div class="running-content mt-100">
    <div class="container">
        <div class="content-inner">
            <div class="content-lists running-animation">
                <div class="content-item">
                    {{-- @php
                        // Get client logos from settings
                        $clientLogosJson = setting('client_company_logos', '[]');
                        $clientLogos = json_decode($clientLogosJson, true) ?? [];
                    @endphp
                    
                    @foreach($clientLogos as $logo)
                        {{-- @if(isset($logo['path'])) --}}
                            {{-- <div class="brand-logo-wrapper">
                                <img
                                    src="{{ $logo['path'] }}"
                                    alt="{{ $logo['filename'] ?? 'Client Logo' }}"
                                    loading="lazy"
                                    class="brand-logo-image"
                                >
                            </div>
                        @endif
                    @endforeach --}} 
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
/* Brand Logo Styles */
.brand-logo-wrapper {
    display: inline-block;
    vertical-align: middle;
    margin: 0 20px;
    padding: 10px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.brand-logo-wrapper:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.brand-logo-image {
    max-height: 80px !important;
    max-width: auto !important;
    width: auto !important;
    height: auto !important;
    object-fit: contain !important;
    display: block !important;
}

/* For the running animation container */
.content-item {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-wrap: nowrap !important;
    gap: 40px !important;
    animation: marquee 30s linear infinite !important;
    white-space: nowrap !important;
}

/* Marquee animation */
@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

.content-lists.running-animation {
    overflow: hidden !important;
    position: relative !important;
    width: 100% !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .brand-logo-wrapper {
        margin: 0 10px;
        padding: 8px;
    }
    
    .brand-logo-image {
        max-height: 40px !important;
        max-width: 150px !important;
    }
    
    .content-item {
        gap: 20px !important;
    }
}

@media (max-width: 480px) {
    .brand-logo-wrapper {
        margin: 0 5px;
        padding: 5px;
    }
    
    .brand-logo-image {
        max-height: 30px !important;
        max-width: 120px !important;
    }
    
    .content-item {
        gap: 10px !important;
    }
}

/* Add loading placeholder */
/* .brand-logo-image {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
} */

@keyframes loading {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: -200% 0;
    }
}

/* Fix for broken images */
.brand-logo-image:before {
    content: "";
    display: block;
    padding-top: 25%; /* 50px / 200px = 0.25 = 25% */
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