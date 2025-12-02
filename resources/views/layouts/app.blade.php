<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Detech | </title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="Red">
    <meta property="og:site_name" content="Consulo">
    <meta property="og:url" content="https://themeforest.net/user/spreethemes/portfolio">
    <meta property="og:title" content="Creative Business Consulting Template">
    <meta property="og:description"
        content="A versatile HTML template designed for corporate entities and professional businesses.">
    <meta name="description"
        content="Consulo is a creative business consulting Bootstrap 5 template designed for corporate entities and professional businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- all css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    @livewireStyles
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style>
        :root {
            /* Typography */
            --font-body--family: "Inter", sans-serif;
            --font-body--style: normal;
            --font-body--weight: 400;

            --font-heading--family: "Poppins", sans-serif;
            --font-heading--style: normal;
            --font-heading--weight: 600;

            --font-button--family: "Poppins", sans-serif;
            --font-button--style: normal;
            --font-button--weight: 600;

            /* h1-h6 */
            --font-h1--size: 60px;
            --font-h2--size: 48px;
            --font-h3--size: 36px;
            --font-h4--size: 24px;
            --font-h5--size: 20px;
            --font-h6--size: 16px;

            /* header nav */
            --font-nav-main: 16px;

            /* Colors */
            --color-background: rgba(255, 255, 255, 1);
            --color-foreground: rgba(28, 37, 57, 1);
            --color-foreground-heading: rgba(28, 37, 57, 1);
            --color-foreground-subheading: rgba(93, 102, 111, 1);
            --color-background-subheading: rgba(255, 255, 255, 0.1);
            --color-border-subheading-bg: rgba(32, 40, 45, 0.1);
            --color-primary: rgba(28, 37, 57, 1);
            --color-primary-background: rgba(28, 37, 57, 1);
            --color-primary-hover: rgba(28, 37, 57, 1);
            --color-primary-background-hover: rgba(28, 37, 57, 1);
            --color-border: rgba(255, 255, 255, 0.3);
            --color-border-hover: rgba(93, 102, 111, 0.5);
            --color-shadow: rgba(0, 0, 0, 1);
            --color-overlay: rgba(28, 37, 57, 0.6);

            /* Buttons */
            --font-button-size: 16px;
            --font-button-size-mobile: 16px;
            --style-button-height: 56px;
            --style-button-height-mobile: 48px;
            --style-button-slim-height: 52px;
            --style-button-slim-height-mobile: 40px;
            --style-cta-underline-offset: 5px;
            --style-cta-underline-thickness: 1px;

            /* Colors - Primary Button */
            --color-primary-button-text: rgba(255, 255, 255, 1);
            --color-primary-button-background: rgba(32, 40, 45, 1);
            --color-primary-button-border: rgba(32, 40, 45, 1);
            --color-primary-button-icon: rgba(28, 37, 57, 1);
            --color-primary-button-icon-background: rgba(255, 255, 255, 1);

            --color-primary-button-hover-text: rgba(32, 40, 45, 1);
            --color-primary-button-hover-background: rgba(255, 255, 255, 1);
            --color-primary-button-hover-border: rgba(32, 40, 45, 1);
            --color-primary-button-hover-icon: rgba(255, 255, 255, 1);
            --color-primary-button-hover-icon-background: rgba(28, 37, 57, 1);

            /* Colors - Secondary Button */
            --color-secondary-button-text: rgba(32, 40, 45, 1);
            --color-secondary-button-background: rgba(255, 255, 255, 1);
            --color-secondary-button-border: rgba(255, 255, 255, 1);
            --color-secondary-button-icon: rgba(255, 255, 255, 1);
            --color-secondary-button-icon-background: rgba(32, 40, 45, 1);

            --color-secondary-button-hover-text: rgba(255, 255, 255, 1);
            --color-secondary-button-hover-background: rgba(32, 40, 45, 1);
            --color-secondary-button-hover-border: rgba(32, 40, 45, 1);
            --color-secondary-button-hover-icon: rgba(28, 37, 57, 1);
            --color-secondary-button-hover-icon-background: rgba(255, 255, 255, 1);

            /* Colors - Input */
            --color-input-background: rgba(255, 255, 255, 1);
            --color-input-text: rgba(93, 102, 111, 1);
            --color-input-border: rgba(93, 102, 111, 0.2);
            --color-input-hover-background: rgba(255, 255, 255, 1);
            --color-input-hover-text: rgba(93, 102, 111, 1);
            --color-input-hover-border: rgba(93, 102, 111, 0.2);

            /* Borders */
            --style-border-width-buttons-primary: 1px;
            --style-border-width-buttons-secondary: 1px;
            --style-border-radius-buttons-primary: 40px;
            --style-border-radius-buttons-secondary: 40px;

            --style-border-width-inputs: 1px;
            --style-border-radius-inputs: 8px;
            --style-border-width: 1px;

            /* Focus */
            --focus-outline-width: 1px;
            --focus-outline-offset: 3px;

            /* Pagination */
            --style-pagination-border-width: 1px;
            --pagination-item-foreground: rgba(28, 37, 57, 1);
            --pagination-item-background: rgba(242, 242, 242, 1);
            --pagination-item-border: rgba(242, 242, 242, 1);
            --pagination-item-active-foreground: rgba(255, 255, 255, 1);
            --pagination-item-active-background: rgba(28, 37, 57, 1);
            --pagination-item-active-border: rgba(28, 37, 57, 1);

            /* Swiper */
            --swiper-navigation-size: 16px;
            --swiper-navigation-color: rgba(255, 255, 255, 1);
            --swiper-navigation-background-color: transparent;
            --swiper-navigation-hover-color: rgba(255, 255, 255, 1);
            --swiper-navigation-hover-background-color: rgba(255, 255, 255, 0.15);
            --swiper-pagination-bullet-inactive-color: rgba(242, 242, 242);
            --swiper-pagination-color: rgba(28, 37, 57, 1);
            --swiper-pagination-bullet-inactive-opacity: 1;
        }

        @media (max-width: 767px) {
            :root {
                --font-h1--size: 48px;
                --font-h2--size: 40px;
                --font-h3--size: 28px;
                --font-h4--size: 20px;
                --font-h5--size: 18px;
            }
        }

        .user-avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background-color: #001f3f;
            /* Navy blue */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 31, 63, 0.2);
            transition: all 0.3s ease;
        }

        .user-avatar--small {
            width: 90px;
            height: 90px;
            font-size: 2rem;
        }

        .user-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 31, 63, 0.3);
        }

        /* Alternative: Dynamic colors based on first letter */
        .user-avatar[data-letter="A"] {
            background-color: #001f3f;
        }

        .user-avatar[data-letter="B"] {
            background-color: #002b55;
        }

        .user-avatar[data-letter="C"] {
            background-color: #003366;
        }

        .user-avatar[data-letter="D"] {
            background-color: #004080;
        }

        .user-avatar[data-letter="E"] {
            background-color: #004d99;
        }

        .user-avatar[data-letter="F"] {
            background-color: #0059b3;
        }

        .user-avatar[data-letter="G"] {
            background-color: #0066cc;
        }

        .user-avatar[data-letter="H"] {
            background-color: #0073e6;
        }

        .user-avatar[data-letter="I"] {
            background-color: #0080ff;
        }

        .user-avatar[data-letter="J"] {
            background-color: #001f3f;
        }

        .user-avatar[data-letter="K"] {
            background-color: #002b55;
        }

        .user-avatar[data-letter="L"] {
            background-color: #003366;
        }

        .user-avatar[data-letter="M"] {
            background-color: #004080;
        }

        .user-avatar[data-letter="N"] {
            background-color: #004d99;
        }

        .user-avatar[data-letter="O"] {
            background-color: #0059b3;
        }

        .user-avatar[data-letter="P"] {
            background-color: #0066cc;
        }

        .user-avatar[data-letter="Q"] {
            background-color: #0073e6;
        }

        .user-avatar[data-letter="R"] {
            background-color: #0080ff;
        }

        .user-avatar[data-letter="S"] {
            background-color: #001f3f;
        }

        .user-avatar[data-letter="T"] {
            background-color: #002b55;
        }

        .user-avatar[data-letter="U"] {
            background-color: #003366;
        }

        .user-avatar[data-letter="V"] {
            background-color: #004080;
        }

        .user-avatar[data-letter="W"] {
            background-color: #004d99;
        }

        .user-avatar[data-letter="X"] {
            background-color: #0059b3;
        }

        .user-avatar[data-letter="Y"] {
            background-color: #0066cc;
        }

        .user-avatar[data-letter="Z"] {
            background-color: #0073e6;
        }

        /* For numbers or special characters */
        .user-avatar[data-letter="0"],
        .user-avatar[data-letter="1"],
        .user-avatar[data-letter="2"],
        .user-avatar[data-letter="3"],
        .user-avatar[data-letter="4"],
        .user-avatar[data-letter="5"],
        .user-avatar[data-letter="6"],
        .user-avatar[data-letter="7"],
        .user-avatar[data-letter="8"],
        .user-avatar[data-letter="9"] {
            background-color: #2d3748;
            /* Dark gray for numbers */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .user-avatar {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }

            .user-avatar--small {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .user-avatar {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }

            .user-avatar--small {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
        }

        /* Optional: Gradient background variant */
        .user-avatar--gradient {
            background: linear-gradient(135deg, #001f3f 0%, #003366 100%);
        }

        /* Optional: Border variant */
        .user-avatar--bordered {
            border: 3px solid #e2e8f0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Animation for new comments */
        @keyframes avatarPulse {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 8px rgba(0, 31, 63, 0.2);
            }

            50% {
                transform: scale(1.1);
                box-shadow: 0 6px 16px rgba(0, 31, 63, 0.4);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 4px 8px rgba(0, 31, 63, 0.2);
            }
        }

        .user-avatar--new {
            animation: avatarPulse 0.6s ease-in-out;
        }
        /* Typewriter animation styles */
        .typewriter-wrapper {
          display: inline-block;
          position: relative;
        }

        .typewriter-text {
          display: inline-block;
          white-space: nowrap;
          overflow: hidden;
          vertical-align: middle;
        }

        .typewriter-cursor {
          display: inline-block;
          color: inherit;
          animation: blink 1s infinite;
          font-weight: 400;
          vertical-align: middle;
        }

        @keyframes blink {
          0%, 50% { opacity: 1; }
          51%, 100% { opacity: 0; }
        }

        /* Optional: Add a gradient text effect to match your theme */
        .typewriter-text {
          background: linear-gradient(90deg, #060344ff, #488fecff);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
        }
    </style>

    <script>
        function showService(serviceId) {
            // Hide all services
            const services = document.querySelectorAll('.service-details-content');
            services.forEach(s => s.style.display = 'none');

            // Show the clicked one
            document.getElementById(serviceId).style.display = 'block';
        }

        document.addEventListener('DOMContentLoaded', function() {
        // Typewriter configuration
        const typewriterConfig = {
          text: "AI-Power Tech",
          speed: 100, // typing speed in ms per character
          delay: 500, // initial delay before starting
          eraseDelay: 2000, // delay before erasing
          eraseSpeed: 50, // erasing speed in ms per character
          loop: true, // whether to loop the animation
          loopDelay: 1000 // delay before restarting
        };

        // Get the typewriter elements
        const typewriterText = document.querySelector('.typewriter-text');
        const typewriterCursor = document.querySelector('.typewriter-cursor');
        
        if (!typewriterText || !typewriterCursor) return;

        let isErasing = false;
        let currentText = '';
        let charIndex = 0;

        function typeWriter() {
          if (!isErasing) {
            // Typing phase
            if (charIndex < typewriterConfig.text.length) {
              currentText += typewriterConfig.text.charAt(charIndex);
              typewriterText.textContent = currentText;
              charIndex++;
              setTimeout(typeWriter, typewriterConfig.speed);
            } else {
              // Finished typing, wait and start erasing
              setTimeout(() => {
                isErasing = true;
                typeWriter();
              }, typewriterConfig.eraseDelay);
            }
          } else {
            // Erasing phase
            if (currentText.length > 0) {
              currentText = currentText.substring(0, currentText.length - 1);
              typewriterText.textContent = currentText;
              setTimeout(typeWriter, typewriterConfig.eraseSpeed);
            } else {
              // Finished erasing, reset and start over if looping
              isErasing = false;
              charIndex = 0;
              if (typewriterConfig.loop) {
                setTimeout(typeWriter, typewriterConfig.loopDelay);
              }
            }
          }
        }

        // Start the animation after initial delay
        setTimeout(typeWriter, typewriterConfig.delay);
      });
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @include('components.header.index')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- all js -->
    <script src="{{ asset('assets/js/vendor.js') }}" defer></script>
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>

</html>
