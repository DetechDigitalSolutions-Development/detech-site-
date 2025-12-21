{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Monthly Salary Guide | Virtual Assistant Rates</title>
    <meta name="description" content="Free monthly salary guide for virtual assistants, executive assistants, and digital marketing professionals in PHP, AUD, and USD.">
    
    <!-- Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    
    <style>
        /* :root {
            --primary: #205781;
            --secondary: #4F959D;
            --accent: #98D2C0;
            --background: #F6F8D5;
        } */
        .from-primary { background-image: linear-gradient(to right, var(--primary), var(--secondary)); }
        .to-secondary { background-image: linear-gradient(to right, var(--primary), var(--secondary)); }
        .text-primary { color: var(--primary); }
        .text-secondary { color: var(--secondary); }
        .bg-primary { background-color: var(--primary); }
        .bg-secondary { background-color: var(--secondary); }
        .bg-accent { background-color: var(--accent); }
        .bg-background { background-color: var(--background); }
        .ring-primary { --tw-ring-color: var(--primary); }
        .hover\:text-primary:hover { color: var(--primary); }
        :root {
            --primary: #003a5e;
            --secondary: #0066a5;
            --accent: #1bb1de;
            --background: #F6F8D5;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        
        /* Print styles */
        @media print {
            .no-print {
                display: none !important;
            }
            
            table {
                break-inside: avoid;
            }
            
            tr {
                break-inside: avoid;
                break-after: auto;
            }
        }
    </style>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-[#F6F8D5]/30 to-[#98D2C0]/10 min-h-screen">
    @yield('content')
    
    <!-- JavaScript for interactivity -->
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Copy to clipboard function
            window.copyToClipboard = function(text) {
                navigator.clipboard.writeText(text).then(() => {
                    alert('Copied to clipboard!');
                });
            };
            
            // Filter functionality
            window.filterTable = function(searchTerm) {
                const rows = document.querySelectorAll('tbody tr[data-role]');
                searchTerm = searchTerm.toLowerCase();
                
                rows.forEach(row => {
                    const role = row.getAttribute('data-role').toLowerCase();
                    if (role.includes(searchTerm) || searchTerm === '') {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            };
            
            // Print functionality
            window.printPage = function() {
                window.print();
            };
            
            // Currency toggle functionality
            window.toggleCurrency = function(currencyCode) {
                const cells = document.querySelectorAll(`[data-currency="${currencyCode}"]`);
                const isHidden = cells[0].style.display === 'none';
                
                cells.forEach(cell => {
                    cell.style.display = isHidden ? '' : 'none';
                });
                
                // Update button text
                const button = document.querySelector(`[data-toggle="${currencyCode}"]`);
                if (button) {
                    button.textContent = isHidden ? `Hide ${currencyCode}` : `Show ${currencyCode}`;
                }
            };
        });
    </script> --}}
</body>
</html>