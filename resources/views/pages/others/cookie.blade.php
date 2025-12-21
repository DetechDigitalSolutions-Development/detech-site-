<!-- Cookie Consent Banner -->
<div class="cookie-consent" id="cookieConsent">
    <div class="cookie-container">
        <div class="cookie-content">
            <div class="cookie-text">
                <h3 class="cookie-title heading text-18">🍪 We respect your privacy</h3>
                <p class="cookie-message text text-14">
                    We use cookies to personalize your experience. Please check our 
                    <a href="{{ route('privacy') }}" class="cookie-link">Privacy Policy</a> for more information.
                </p>
            </div>
            <div class="cookie-buttons">
                <button type="button" class="button button--secondary" id="cookieReject">
                    Reject
                </button>
                <button type="button" class="button button--primary" id="cookieAcceptEssential">
                    Essential Only
                </button>
                <button type="button" class="button button--primary" id="cookieAcceptAll">
                    Accept All
                </button>
            </div>
        </div>
        <button type="button" class="cookie-close" id="cookieClose" aria-label="Close cookie consent">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </button>
    </div>
</div>

<!-- Cookie Consent JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cookieConsent = document.getElementById('cookieConsent');
        const acceptAllBtn = document.getElementById('cookieAcceptAll');
        const acceptEssentialBtn = document.getElementById('cookieAcceptEssential');
        const rejectBtn = document.getElementById('cookieReject');
        const closeBtn = document.getElementById('cookieClose');

        // Check if user has already made a choice
        const cookieChoice = localStorage.getItem('cookieConsent');

        if (!cookieChoice) {
            // Show cookie consent after a short delay
            setTimeout(() => {
                cookieConsent.classList.add('show');
            }, 1000);
        } else {
            // Apply previous choice
            applyCookieChoice(cookieChoice);
        }

        // Accept All Cookies
        acceptAllBtn.addEventListener('click', function() {
            saveCookieChoice('accepted_all');
            cookieConsent.classList.remove('show');
            setTimeout(() => {
                cookieConsent.style.display = 'none';
            }, 300);
            loadAllCookies();
            showToast('All cookies accepted', 'success');
        });

        // Accept Essential Only
        acceptEssentialBtn.addEventListener('click', function() {
            saveCookieChoice('essential_only');
            cookieConsent.classList.remove('show');
            setTimeout(() => {
                cookieConsent.style.display = 'none';
            }, 300);
            loadEssentialCookies();
            showToast('Essential cookies accepted', 'info');
        });

        // Reject All
        rejectBtn.addEventListener('click', function() {
            saveCookieChoice('rejected_all');
            cookieConsent.classList.remove('show');
            setTimeout(() => {
                cookieConsent.style.display = 'none';
            }, 300);
            removeNonEssentialCookies();
            showToast('Cookies rejected', 'warning');
        });

        // Close button
        closeBtn.addEventListener('click', function() {
            cookieConsent.classList.remove('show');
            setTimeout(() => {
                cookieConsent.style.display = 'none';
            }, 300);
            // Save as essential only if no choice made
            if (!cookieChoice) {
                saveCookieChoice('essential_only');
                loadEssentialCookies();
            }
        });

        // Save user choice
        function saveCookieChoice(choice) {
            localStorage.setItem('cookieConsent', choice);
            localStorage.setItem('cookieConsentDate', new Date().toISOString());
            document.cookie = `cookie_consent=${choice}; max-age=${365 * 24 * 60 * 60}; path=/; SameSite=Lax`;
        }

        // Apply previous choice
        function applyCookieChoice(choice) {
            switch (choice) {
                case 'accepted_all':
                    loadAllCookies();
                    break;
                case 'essential_only':
                    loadEssentialCookies();
                    break;
                case 'rejected_all':
                    removeNonEssentialCookies();
                    break;
            }
        }

        // Load all cookies (Analytics, Ads, etc.)
        function loadAllCookies() {
            // Load Google Analytics if you use it
            if (typeof gtag !== 'undefined') {
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'YOUR_GA_ID');
            }

            // Load Facebook Pixel if you use it
            if (typeof fbq !== 'undefined') {
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', 'YOUR_PIXEL_ID');
                fbq('track', 'PageView');
            }
            console.log('All cookies loaded');
        }

        // Load only essential cookies
        function loadEssentialCookies() {
            console.log('Essential cookies only loaded');
        }

        // Remove non-essential cookies
        function removeNonEssentialCookies() {
            const cookies = document.cookie.split("; ");
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i];
                const eqPos = cookie.indexOf("=");
                const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                if (name.includes('_ga') || name.includes('_gid') || name.includes('_fbp')) {
                    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                }
            }
            console.log('Non-essential cookies removed');
        }

        // Show toast notification
        function showToast(message, type) {
            const toast = document.createElement('div');
            toast.className = `cookie-toast cookie-toast--${type}`;
            toast.innerHTML = `
                <span>${message}</span>
                <button class="toast-close">×</button>
            `;

            document.body.appendChild(toast);

            setTimeout(() => {
                toast.classList.add('fade-out');
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);

            toast.querySelector('.toast-close').addEventListener('click', function() {
                toast.classList.add('fade-out');
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            });
        }
    });
</script>

<!-- Cookie Consent CSS -->
<style>
    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: white;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.08);
        z-index: 9999;
        padding: 16px 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
        border-top: 1px solid #e5e7eb;
    }

    .cookie-consent.show {
        transform: translateY(0);
    }

    .cookie-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        position: relative;
    }

    .cookie-content {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .cookie-text {
        flex: 1;
    }

    .cookie-title {
        color: #205781;
        margin-bottom: 4px;
        font-size: 16px;
        font-weight: 600;
    }

    .cookie-message {
        color: #6b7280;
        margin: 0;
        line-height: 1.4;
        font-size: 14px;
    }

    .cookie-link {
        color: #4F959D;
        text-decoration: underline;
        font-weight: 500;
    }

    .cookie-link:hover {
        color: #205781;
    }

    .cookie-buttons {
        display: flex;
        gap: 8px;
        flex-shrink: 0;
    }

    .cookie-buttons .button {
        padding: 8px 16px;
        font-size: 14px;
        min-height: 36px;
    }

    .cookie-close {
        background: none;
        border: none;
        color: #9ca3af;
        cursor: pointer;
        padding: 6px;
        border-radius: 50%;
        transition: all 0.2s;
        flex-shrink: 0;
        align-self: flex-start;
        line-height: 1;
    }

    .cookie-close:hover {
        background: #f3f4f6;
        color: #374151;
    }

    /* Toast notifications */
    .cookie-toast {
        position: fixed;
        bottom: 80px;
        right: 20px;
        background: white;
        padding: 10px 16px;
        border-radius: 6px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 10000;
        animation: slideInRight 0.3s ease;
        border-left: 3px solid;
        font-size: 14px;
    }

    .cookie-toast--success {
        border-left-color: #10b981;
    }

    .cookie-toast--info {
        border-left-color: #3b82f6;
    }

    .cookie-toast--warning {
        border-left-color: #f59e0b;
    }

    .cookie-toast.fade-out {
        opacity: 0;
        transform: translateX(100%);
        transition: all 0.3s ease;
    }

    .toast-close {
        background: none;
        border: none;
        color: #9ca3af;
        cursor: pointer;
        font-size: 18px;
        line-height: 1;
        padding: 0;
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .toast-close:hover {
        background: #f3f4f6;
        color: #374151;
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .cookie-consent {
            padding: 14px 16px;
        }
        
        .cookie-container {
            flex-direction: column;
            align-items: stretch;
            gap: 12px;
        }

        .cookie-content {
            flex-direction: column;
            align-items: stretch;
            gap: 12px;
        }

        .cookie-buttons {
            justify-content: flex-start;
            flex-wrap: wrap;
        }
        
        .cookie-buttons .button {
            flex: 1;
            min-width: 120px;
        }

        .cookie-close {
            position: absolute;
            top: 8px;
            right: 8px;
        }

        .cookie-toast {
            bottom: 70px;
            left: 16px;
            right: 16px;
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .cookie-consent {
            padding: 12px 14px;
        }
        
        .cookie-buttons {
            flex-direction: column;
        }
        
        .cookie-buttons .button {
            width: 100%;
            min-width: unset;
        }
        
        .cookie-title {
            font-size: 15px;
        }
        
        .cookie-message {
            font-size: 13px;
        }
    }
</style>