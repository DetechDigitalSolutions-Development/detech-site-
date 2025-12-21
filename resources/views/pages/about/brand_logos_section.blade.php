<!-- Brand Logo Marquee -->
<div class="running-content mt-100" data-aos="fade-up">
    <div class="brand-marquee-wrapper">
        <div class="content-inner">
            <div class="content-lists running-animation">
                <!-- First set of logos -->
                <div class="content-item">
                    @php
                        $clientLogos = App\Models\SiteSetting::where('key', 'client_company_logos')->first();
                        $clientLogos = json_decode($clientLogos->value ?? '[]');
                    @endphp
                    
                    @if (!empty($clientLogos))
                        @foreach ($clientLogos as $logo)
                            <div class="brand-logo-wrapper">
                                <img src="{{ Storage::disk(config('public'))->url($logo ?? null) }}"
                                    class="brand-logo-image" loading="lazy" alt="Brand Image">
                            </div>
                        @endforeach
                    @else
                        <!-- Fallback logos -->
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b1.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b2.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b3.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b4.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b5.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                    @endif
                </div>
                
                <!-- Duplicate set for seamless looping -->
                <div class="content-item" aria-hidden="true">
                    @if (!empty($clientLogos))
                        @foreach ($clientLogos as $logo)
                            <div class="brand-logo-wrapper">
                                <img src="{{ Storage::disk(config('public'))->url($logo ?? null) }}"
                                    class="brand-logo-image" loading="lazy" alt="Brand Image">
                            </div>
                        @endforeach
                    @else
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b1.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b2.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b3.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b4.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                        <div class="brand-logo-wrapper">
                            <img src="assets/img/brand/b5.png" alt="Brand Logo" loading="lazy" class="brand-logo-image">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .brand-marquee-wrapper {
        position: relative;
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
    }

    .content-lists {
        display: flex;
        width: fit-content;
        animation: marquee 30s linear infinite;
        will-change: transform;
    }

    .content-item {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        gap: 60px;
        padding: 0 30px;
    }

    .brand-logo-wrapper {
        flex-shrink: 0;
        padding: 20px 0;
    }

    .brand-logo-image {
        max-height: 80px !important;
        max-width: 180px !important;
        width: auto !important;
        height: auto !important;
        object-fit: contain !important;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .brand-logo-image:hover {
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.05);
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* Pause animation on hover */
    .content-lists:hover {
        animation-play-state: paused;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .brand-logo-image {
            max-height: 100px !important;
            max-width: 300px !important;
        }
        
        .content-item {
            gap: 50px;
        }
    }

    @media (max-width: 992px) {
        .brand-logo-image {
            max-height: 80px !important;
            max-width: 200px !important;
        }
        
        .content-item {
            gap: 40px;
        }
    }

    @media (max-width: 768px) {
        .brand-logo-image {
            max-height: 60px !important;
            max-width: 100px !important;
        }
        
        .content-item {
            gap: 30px;
        }
        
        .content-lists {
            animation: marquee 25s linear infinite;
        }
    }

    @media (max-width: 576px) {
        .brand-logo-image {
            max-height: 40px !important;
            max-width: 100px !important;
        }
        
        .content-item {
            gap: 25px;
        }
        
        .content-lists {
            animation: marquee 20s linear infinite;
        }
    }

    /* For very small screens */
    @media (max-width: 400px) {
        .brand-logo-image {
            max-height: 35px !important;
            max-width: 85px !important;
        }
        
        .content-item {
            gap: 20px;
        }
    }
</style>

<script>
    // Enhanced marquee with pause/play controls
    document.addEventListener('DOMContentLoaded', function() {
        const marquee = document.querySelector('.content-lists');
        const logoWrappers = document.querySelectorAll('.brand-logo-wrapper');
        const logos = document.querySelectorAll('.brand-logo-image');
        
        // Handle logo hover effects
        logoWrappers.forEach(wrapper => {
            wrapper.addEventListener('mouseenter', () => {
                const img = wrapper.querySelector('.brand-logo-image');
                if (img) {
                    img.style.transform = 'scale(1.05)';
                    img.style.filter = 'grayscale(0%)';
                    img.style.opacity = '1';
                }
            });
            
            wrapper.addEventListener('mouseleave', () => {
                const img = wrapper.querySelector('.brand-logo-image');
                if (img) {
                    img.style.transform = 'scale(1)';
                    img.style.filter = 'grayscale(100%)';
                    img.style.opacity = '0.7';
                }
            });
        });
        
        // Optional: Adjust animation speed based on container width
        function adjustMarqueeSpeed() {
            const containerWidth = document.querySelector('.brand-marquee-wrapper').offsetWidth;
            const logosWidth = document.querySelector('.content-item').offsetWidth;
            const totalWidth = logosWidth * 2; // Since we have duplicated content
            
            // Calculate animation duration based on total width
            const baseSpeed = 30; // Base duration for desktop
            const calculatedDuration = (totalWidth / containerWidth) * baseSpeed;
            
            // Set the animation duration
            marquee.style.animationDuration = `${calculatedDuration}s`;
        }
        
        // Call on load and resize
        window.addEventListener('load', adjustMarqueeSpeed);
        window.addEventListener('resize', adjustMarqueeSpeed);
        
        // Handle image errors
        logos.forEach(img => {
            img.onerror = function() {
                this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjgwIiB2aWV3Qm94PSIwIDAgMTUwIDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iODAiIGZpbGw9IiNGMEYwRjAiIHJ4PSI0Ii8+PHRleHQgeD0iNzUiIHk9IjQwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5Mb2dvPC90ZXh0Pjwvc3ZnPg==';
                this.alt = 'Logo placeholder';
            };
        });
        
        // Pause/play on hover
        marquee.addEventListener('mouseenter', () => {
            marquee.style.animationPlayState = 'paused';
        });
        
        marquee.addEventListener('mouseleave', () => {
            marquee.style.animationPlayState = 'running';
        });
    });
</script>