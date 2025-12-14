{{-- resources/views/salary-guide.blade.php --}}
@extends('pages.salary-guide.app')

@section('content')
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-gradient-to-r from-[#205781] to-[#4F959D] text-white py-8 md:py-12 shadow-lg">
            <div class="container mx-auto px-4 md:px-8">
                <div class="text-center fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 tracking-tight">
                        Free Monthly Salary Guide
                    </h1>
                    <p class="text-xl md:text-2xl mb-6 opacity-90">
                        💼 40 hours per week | Monthly Rates
                    </p>

                    <!-- Stats Bar -->
                    <div class="flex flex-wrap justify-center gap-4 md:gap-8 mb-6">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                            <span class="text-sm opacity-80">Roles</span>
                            <div class="text-2xl font-bold">{{ count($salaryData) }}+</div>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                            <span class="text-sm opacity-80">Experience Levels</span>
                            <div class="text-2xl font-bold">{{ $experienceLevels->count() }}</div>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                            <span class="text-sm opacity-80">Currencies</span>
                            <div class="text-2xl font-bold">{{ $currencies->count() }}</div>
                        </div>
                    </div>

                    <!-- Experience Level Legend -->
                    <div class="flex flex-wrap justify-center gap-3 md:gap-6 mt-6">
                        @foreach ($experienceLevels as $level)
                            <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2">
                                <div class="w-3 h-3 rounded-full bg-[#98D2C0] mr-2"></div>
                                <span class="font-semibold">{{ $level->name }}</span>
                                <span class="ml-2 text-sm opacity-80">{{ $level->description }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </header>

        <!-- Controls -->
        <div class="bg-white border-b border-gray-200 py-4">
            <div class="container mx-auto px-4 md:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <!-- Search -->
                    <div class="w-full md:w-auto">
                        <div class="relative">
                            <input type="text" placeholder="Search roles (e.g., 'Virtual Assistant')..."
                                class="w-full md:w-100 px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#205781] focus:border-transparent transition-all"
                                onkeyup="filterTable(this.value)">
                            <div class="absolute left-4 top-3.5 text-gray-400">
                                🔍
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-wrap gap-3">
                        <!-- Currency Toggles as Slide Switches -->
                        <div class="flex items-center gap-4 bg-gray-50 px-4 py-2 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Show Currencies:</span>
                            <div class="flex flex-wrap gap-3">
                                @foreach ($currencies as $currency)
                                    <div class="flex items-center">
                                        <label class="flex items-center cursor-pointer">
                                            <!-- Hidden checkbox -->
                                            <input type="checkbox" class="hidden" id="toggle-{{ $currency->code }}" checked
                                                onchange="toggleCurrency('{{ $currency->code }}', this.checked)">
                                            <!-- Switch container -->
                                            <div class="relative">
                                                <!-- Track -->
                                                <div
                                                    class="ml-6 w-12 h-6 bg-gray-300 rounded-full shadow-inner toggle-track-{{ $currency->code }}">
                                                </div>
                                                <!-- Thumb -->
                                                <div
                                                    class=" absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow toggle-thumb-{{ $currency->code }} transition-transform duration-300 translate-x-6">
                                                </div>
                                            </div>
                                            <!-- Label -->
                                            <span
                                                class="ml-2 text-sm font-medium text-gray-700 toggle-label-{{ $currency->code }}">
                                                {{ $currency->code }}
                                            </span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- <!-- Print Button -->
                    <button 
                        onclick="printPage()"
                        class="px-4 py-2 border-2 border-[#205781] text-[#205781] hover:bg-[#205781] hover:text-white rounded-lg font-medium transition-colors no-print"
                    >
                        🖨️ Print Guide
                    </button>
                    
                    <!-- Download JSON -->
                    <a 
                        href="/api/salary-guide"
                        target="_blank"
                        class="px-4 py-2 bg-[#4F959D] hover:bg-[#205781] text-white rounded-lg font-medium transition-colors no-print"
                    >
                        📊 Get Data (JSON)
                    </a> --}}
                    </div>
                </div>

                <!-- Info Message -->
                <div class="mt-4 text-center text-gray-600 text-sm">
                    <p>💡 <strong>Note:</strong> Rates are based on 40-hour work weeks. Click on any rate to copy it.</p>
                    <p class="mt-1">💡 <strong>Toggle:</strong> Use switches above to show/hide currency columns</p>
                </div>
            </div>
        </div>

        <!-- Main Table -->
        <main class="py-8">
            <div class="container mx-auto px-4 md:px-8">
                <!-- Desktop Table -->
                <div class="hidden md:block overflow-hidden rounded-2xl shadow-xl border border-gray-200 bg-white">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-[#205781] to-[#4F959D] text-white">
                                <th
                                    class="py-6 px-6 text-left text-lg font-bold border-r border-white/20 sticky left-0 bg-[#205781] z-10 min-w-[250px]">
                                    <div class="flex items-center">
                                        <span class="mr-2">👔</span>
                                        <span>ROLES & EXPERIENCE</span>
                                    </div>
                                </th>

                                <!-- Dynamic Currency Columns -->
                                @foreach ($currencies as $currency)
                                    <th class="py-6 px-6 text-left text-lg font-bold border-r border-white/20 min-w-[180px] currency-column currency-{{ $currency->code }}"
                                        data-currency="{{ $currency->code }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="mr-2">{{ $currency->symbol }}</span>
                                                <span>{{ $currency->label }}</span>
                                                @if ($currency->code === $baseCurrencyCode)
                                                    <span
                                                        class="ml-2 text-xs bg-white/30 px-2 py-1 rounded-full">BASE</span>
                                                @endif
                                            </div>
                                            <!-- Toggle indicator -->
                                            <div
                                                class="w-3 h-3 rounded-full bg-green-400 ml-2 toggle-indicator-{{ $currency->code }}">
                                            </div>
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($salaryData as $guide)
                                @foreach ($guide['rates'] as $index => $rate)
                                    <tr class="transition-all duration-200 hover:bg-[#F6F8D5]/50"
                                        data-role="{{ strtolower($guide['role']) }}">
                                        <!-- Role and Experience Column -->
                                        @if ($index === 0)
                                            <td class="p-6 border-t border-gray-100 align-top sticky left-0 bg-white z-10 min-w-[250px] border-r"
                                                rowspan="{{ count($guide['rates']) }}">
                                                <div class="flex flex-col h-full justify-center">
                                                    <h3 class="text-xl font-bold text-[#205781] mb-2">{{ $guide['role'] }}
                                                    </h3>
                                                    <div class="space-y-2">
                                                        @foreach ($guide['rates'] as $subRate)
                                                            <div class="flex items-center py-1">
                                                                <div class="w-2 h-2 rounded-full bg-[#98D2C0] mr-3"></div>
                                                                <div>
                                                                    <span
                                                                        class="font-semibold text-gray-800">{{ $subRate['level'] }}</span>
                                                                    <span
                                                                        class="text-sm text-gray-600 ml-2">{{ $subRate['description'] }}</span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </td>
                                        @endif

                                        <!-- Dynamic Currency Rates -->
                                        @foreach ($currencies as $currency)
                                            <td class="p-6 border-t border-gray-100 border-r currency-column currency-{{ $currency->code }}"
                                                data-currency="{{ $currency->code }}">
                                                @if (isset($rate['converted_rates'][$currency->code]))
                                                    @php $convRate = $rate['converted_rates'][$currency->code]; @endphp
                                                    <div class="cursor-pointer group"
                                                        onclick="copyToClipboard('{{ $guide['role'] }} - {{ $rate['level'] }}: {{ $convRate['symbol'] }}{{ $convRate['min'] }} - {{ $convRate['symbol'] }}{{ $convRate['max'] }}')"
                                                        title="Click to copy">
                                                        <div
                                                            class="text-2xl font-bold text-[#4F959D] group-hover:text-[#205781] transition-colors">
                                                            {{ $convRate['symbol'] }}{{ $convRate['min'] }} -
                                                            {{ $convRate['symbol'] }}{{ $convRate['max'] }}
                                                        </div>
                                                        <div
                                                            class="text-sm text-gray-500 mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                                            Click to copy
                                                        </div>
                                                    </div>
                                                    @if ($currency->code !== $baseCurrencyCode)
                                                        <div class="text-sm text-gray-600 mt-2">
                                                            @ {{ number_format($currency->exchange_rate * 100, 4) }}% of
                                                            {{ $baseCurrencyCode }}
                                                        </div>
                                                    @else
                                                        <div class="text-sm text-gray-600 mt-2">
                                                            Base Currency
                                                        </div>
                                                    @endif
                                                @endif
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach

                                <!-- Separator -->
                                @if (!$loop->last)
                                    <tr>
                                        <td colspan="{{ 1 + $currencies->count() }}" class="border-b border-gray-200"></td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Cards -->
                <div class="md:hidden space-y-6">
                    @foreach ($salaryData as $guide)
                        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
                            <!-- Card Header -->
                            <div class="bg-gradient-to-r from-[#205781] to-[#4F959D] text-white p-6">
                                <h3 class="text-2xl font-bold">{{ $guide['role'] }}</h3>
                                <p class="text-sm opacity-80 mt-1">Base Currency: {{ $baseCurrencyLabel }}
                                    ({{ $baseCurrencyCode }})</p>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6">
                                @foreach ($guide['rates'] as $rate)
                                    <div class="mb-6 pb-6 border-b border-gray-100 last:border-b-0 last:mb-0 last:pb-0">
                                        <!-- Experience Level -->
                                        <div class="flex items-center mb-4">
                                            <div class="w-3 h-3 rounded-full bg-[#98D2C0] mr-3"></div>
                                            <div>
                                                <h4 class="font-bold text-lg text-gray-800">{{ $rate['level'] }}</h4>
                                                <p class="text-sm text-gray-600">{{ $rate['description'] }}</p>
                                            </div>
                                        </div>

                                        <!-- Base Rate (First currency in order) -->
                                        <div
                                            class="mb-4 p-4 bg-gradient-to-br from-[#205781]/10 to-[#4F959D]/5 rounded-lg border border-[#205781]/20">
                                            <div class="flex items-center justify-between mb-2">
                                                <div class="text-sm font-semibold text-[#205781]">
                                                    {{ $rate['base_rate']['currency_label'] }} (Base)</div>
                                                <div class="text-xs bg-[#205781] text-white px-2 py-1 rounded-full">BASE
                                                </div>
                                            </div>
                                            <div class="text-2xl font-bold text-[#205781]">
                                                {{ $rate['base_rate']['formatted'] }}
                                            </div>
                                            <button
                                                onclick="copyToClipboard('{{ $guide['role'] }} - {{ $rate['level'] }}: {{ $rate['base_rate']['formatted'] }}')"
                                                class="mt-2 text-sm text-[#205781] hover:text-[#4F959D] transition-colors">
                                                📋 Copy Base Rate
                                            </button>
                                        </div>

                                        <!-- Other Currencies -->
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            @foreach ($currencies as $currency)
                                                @if ($currency->code !== $baseCurrencyCode)
                                                    @php $convRate = $rate['converted_rates'][$currency->code]; @endphp
                                                    <div
                                                        class="bg-gradient-to-br from-[#98D2C0]/10 to-[#98D2C0]/5 p-4 rounded-lg border border-gray-200">
                                                        <div class="text-sm font-semibold text-gray-600 mb-1">
                                                            {{ $currency->label }}</div>
                                                        <div class="text-xl font-bold text-[#4F959D]">
                                                            {{ $convRate['symbol'] }}{{ $convRate['min'] }} -
                                                            {{ $convRate['symbol'] }}{{ $convRate['max'] }}
                                                        </div>
                                                        <button
                                                            onclick="copyToClipboard('{{ $guide['role'] }} - {{ $rate['level'] }}: {{ $convRate['symbol'] }}{{ $convRate['min'] }} - {{ $convRate['symbol'] }}{{ $convRate['max'] }}')"
                                                            class="mt-2 text-sm text-[#205781] hover:text-[#4F959D] transition-colors">
                                                            📋 Copy
                                                        </button>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Information Section -->
                <div
                    class="mt-12 bg-gradient-to-r from-[#F6F8D5] to-[#98D2C0]/20 rounded-2xl p-8 border border-[#98D2C0]/30">
                    <h3 class="text-2xl font-bold text-[#205781] mb-6 flex items-center">
                        <span class="mr-3">📋</span>
                        How to Use This Salary Guide
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="text-3xl mb-4">💼</div>
                            <h4 class="font-bold text-lg text-[#205781] mb-2">For Employers</h4>
                            <p class="text-gray-600">
                                Use these benchmarks to set competitive salaries for remote roles based in the Philippines.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="text-3xl mb-4">👨‍💻</div>
                            <h4 class="font-bold text-lg text-[#205781] mb-2">For Employees</h4>
                            <p class="text-gray-600">
                                Understand market rates for your experience level and negotiate better compensation.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="text-3xl mb-4">🔄</div>
                            <h4 class="font-bold text-lg text-[#205781] mb-2">Updated Rates</h4>
                            <p class="text-gray-600">
                                Rates are updated monthly based on market trends. Last updated: {{ date('F j, Y') }}
                            </p>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <div class="mt-8 pt-6 border-t border-gray-300">
                        <p class="text-sm text-gray-600">
                            <strong>Disclaimer:</strong> These salary ranges are for guidance only. Actual salaries may vary
                            based on specific skills, company size, location, and other factors. Rates are for full-time
                            positions (40 hours/week).
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gradient-to-r from-[#205781] to-[#4F959D] text-white py-8 mt-12">
            <div class="container mx-auto px-4 md:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Free Monthly Salary Guide</h3>
                        <p class="opacity-80">Transparent salary data for remote teams</p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="mailto:info@example.com?subject=Salary%20Guide%20Inquiry"
                            class="px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            📧 Contact Us
                        </a>
                        <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            ⬆️ Back to Top
                        </a>
                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-white/20 text-center text-sm opacity-80">
                    <p>© {{ date('Y') }} Free Monthly Salary Guide. All rights reserved.</p>
                    <p class="mt-2">Data is updated monthly. Use responsibly.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Add CSS for toggle switches -->
    <style>
        /* Toggle Switch Styles */
        .toggle-switch-container {
            position: relative;
            display: inline-block;
        }

        .toggle-switch-checkbox {
            display: none;
        }

        .toggle-switch-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }

        .toggle-switch-track {
            width: 48px;
            height: 24px;
            background: #e5e7eb;
            border-radius: 24px;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .toggle-switch-thumb {
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            position: absolute;
            top: 2px;
            left: 2px;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .toggle-switch-checkbox:checked+.toggle-switch-label .toggle-switch-track {
            background: #10b981;
        }

        .toggle-switch-checkbox:checked+.toggle-switch-label .toggle-switch-thumb {
            transform: translateX(24px);
        }

        .toggle-switch-text {
            margin-left: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        /* Currency column visibility */
        .currency-column.hidden {
            display: none !important;
        }

        /* Toggle indicator */
        .toggle-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-left: 8px;
        }

        .toggle-indicator.active {
            background: #10b981;
        }

        .toggle-indicator.inactive {
            background: #9ca3af;
        }
    </style>

    <!-- Updated JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Copy to clipboard function
            window.copyToClipboard = function(text) {
                navigator.clipboard.writeText(text).then(() => {
                    // Show a small notification instead of alert
                    const notification = document.createElement('div');
                    notification.className =
                        'fixed top-4 right-4 bg-green-800 text-white px-4 py-2 rounded-lg shadow-lg z-50 animate-fade-in-out';
                    notification.textContent = '✓ Copied to clipboard!';
                    document.body.appendChild(notification);

                    setTimeout(() => {
                        notification.remove();
                    }, 2000);
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

            // Currency toggle functionality with slide switch
            window.toggleCurrency = function(currencyCode, isChecked) {
                const cells = document.querySelectorAll(`[data-currency="${currencyCode}"]`);
                const columns = document.querySelectorAll(`.currency-${currencyCode}`);

                if (isChecked) {
                    // Show currency
                    cells.forEach(cell => {
                        cell.style.display = '';
                        cell.classList.remove('hidden');
                    });
                    columns.forEach(col => {
                        col.style.display = '';
                        col.classList.remove('hidden');
                    });

                    // Update toggle styles
                    document.querySelector(`.toggle-track-${currencyCode}`).style.backgroundColor = '#10b981';
                    document.querySelector(`.toggle-thumb-${currencyCode}`).style.transform =
                    'translateX(24px)';
                    document.querySelector(`.toggle-label-${currencyCode}`).style.color = '#10b981';
                    document.querySelector(`.toggle-indicator-${currencyCode}`).style.backgroundColor =
                        '#10b981';
                } else {
                    // Hide currency
                    cells.forEach(cell => {
                        cell.style.display = 'none';
                        cell.classList.add('hidden');
                    });
                    columns.forEach(col => {
                        col.style.display = 'none';
                        col.classList.add('hidden');
                    });

                    // Update toggle styles
                    document.querySelector(`.toggle-track-${currencyCode}`).style.backgroundColor = '#e5e7eb';
                    document.querySelector(`.toggle-thumb-${currencyCode}`).style.transform = 'translateX(0)';
                    document.querySelector(`.toggle-label-${currencyCode}`).style.color = '#6b7280';
                    document.querySelector(`.toggle-indicator-${currencyCode}`).style.backgroundColor =
                        '#9ca3af';
                }
            };

            // Initialize all toggles to checked state
            document.querySelectorAll('[id^="toggle-"]').forEach(checkbox => {
                const currencyCode = checkbox.id.replace('toggle-', '');
                window.toggleCurrency(currencyCode, checkbox.checked);
            });
        });
    </script>
@endsection
