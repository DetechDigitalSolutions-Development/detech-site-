{{-- resources/views/salary-guide.blade.php --}}
@extends('pages.salary-guide.app')

@section('content')
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-gradient-to-r from-primary to-secondary text-white py-8 md:py-12 shadow-lg">
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
                                <div class="w-3 h-3 rounded-full bg-accent mr-2"></div>
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
                                class="w-full md:w-96 px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                onkeyup="filterTable(this.value)">
                            <div class="absolute left-4 top-3.5 text-gray-400">🔍</div>
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
                                            <input type="checkbox" class="hidden" id="toggle-{{ $currency->code }}" checked
                                                onchange="toggleCurrency('{{ $currency->code }}', this.checked)">
                                            <div class="relative">
                                                <div class="ml-6 w-12 h-6 bg-gray-300 rounded-full shadow-inner toggle-track-{{ $currency->code }}"></div>
                                                <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow toggle-thumb-{{ $currency->code }} transition-transform duration-300 translate-x-6"></div>
                                            </div>
                                            <span class="ml-2 text-sm font-medium text-gray-700 toggle-label-{{ $currency->code }}">
                                                {{ $currency->code }}
                                            </span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Bulk Selection Controls -->
                        <div class="flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-lg">
                            <label class="flex items-center cursor-pointer">
                                <div class="custom-checkbox-container">
                                    <input type="checkbox" 
                                           class="custom-checkbox-input"
                                           id="select-all-checkbox"
                                           onchange="toggleSelectAll(this.checked)">
                                    <span class="custom-checkbox-checkmark"></span>
                                </div>
                                <span class="ml-2 text-sm font-medium text-primary">Select All</span>
                            </label>
                            <button onclick="clearAllSelections()" 
                                    class="ml-2 text-sm text-gray-600 hover:text-red-600 transition-colors cursor-pointer">
                                Clear All
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Info Message -->
                <div class="mt-4 text-center text-gray-600 text-sm">
                    <p>💡 <strong>Note:</strong> Rates are based on 40-hour work weeks. Click on any rate to copy it.</p>
                    <p class="mt-1">💡 <strong>Toggle:</strong> Use switches above to show/hide currency columns</p>
                    <p class="mt-1">💡 <strong>Select:</strong> Use "Select All" to quickly choose all resources</p>
                </div>
            </div>
        </div>

        <!-- Main Table -->
        <main class="py-8">
            <div class="container mx-auto px-4 md:px-8">
                <!-- Desktop Table -->
                <div class="hidden md:block overflow-hidden rounded-2xl shadow-xl border border-gray-200 bg-white relative">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-primary to-secondary text-white">
                                <th class="py-6 px-6 text-left text-lg font-bold sticky left-0 bg-primary z-10 min-w-[280px]">
                                    <div class="flex items-center">
                                        <span class="mr-2">👔</span>
                                        <span>ROLES</span>
                                    </div>
                                </th>
                                <th class="py-6 px-6 text-left text-lg font-bold min-w-[200px]">
                                    <div class="flex items-center">
                                        <span class="mr-2">📈</span>
                                        <span>EXPERIENCE</span>
                                    </div>
                                </th>
                                @foreach ($currencies as $currency)
                                    <th class="py-6 px-6 text-left text-lg font-bold border-l border-white/20 min-w-[220px] currency-column currency-{{ $currency->code }}"
                                        data-currency="{{ $currency->code }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="mr-2">{{ $currency->symbol }}</span>
                                                <span>RATES IN {{ strtoupper($currency->code) }}</span>
                                                @if ($currency->code === $baseCurrencyCode)
                                                    <span class="ml-2 text-xs bg-white/30 px-2 py-1 rounded-full">BASE</span>
                                                @endif
                                            </div>
                                            <div class="w-3 h-3 rounded-full bg-green-400 toggle-indicator-{{ $currency->code }}"></div>
                                        </div>
                                    </th>
                                @endforeach
                                <!-- New Outsource Column -->
                                <th class="py-6 px-6 text-left text-lg font-bold border-l border-white/20 min-w-[180px]">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <span class="mr-2">📋</span>
                                            <span>SELECT</span>
                                        </div>
                                        <!-- Quick select for this column only -->
                                        <div class="flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-lg">
                                            <label class="flex items-center cursor-pointer">
                                                <div class="custom-checkbox-container">
                                                    <input type="checkbox" 
                                                        class="custom-checkbox-input"
                                                        id="select-all-checkbox"
                                                        onchange="toggleSelectAll(this.checked)">
                                                    <span class="custom-checkbox-checkmark"></span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $totalRows = 0; @endphp
                            @foreach ($salaryData as $guide)
                                @foreach ($guide['rates'] as $index => $rate)
                                    @php $totalRows++; @endphp
                                    <tr class="transition-all duration-200 hover:bg-background/30 row-selectable"
                                        data-role="{{ strtolower($guide['role']) }}"
                                        data-row-index="{{ $totalRows }}">
                                        <!-- Role Column (spanned) -->
                                        @if ($index === 0)
                                            <td class="p-6 border-t border-gray-100 font-bold text-primary text-xl align-middle sticky left-0 bg-white z-10 border-r border-gray-200"
                                                rowspan="{{ count($guide['rates']) }}">
                                                {{ $guide['role'] }}
                                            </td>
                                        @endif

                                        <!-- Experience Level -->
                                        <td class="p-6 border-t border-gray-100 border-r border-gray-200 align-middle bg-gradient-to-r from-primary/5 to-transparent">
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 rounded-full bg-accent mr-3"></div>
                                                <div>
                                                    <span class="font-bold text-gray-800">{{ $rate['level'] }}</span>
                                                    @if (!empty($rate['description']))
                                                        <p class="text-sm text-gray-600 mt-1">{{ $rate['description'] }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Currency Rates -->
                                        @foreach ($currencies as $currency)
                                            <td class="p-6 border-t border-gray-100 currency-column currency-{{ $currency->code }}"
                                                data-currency="{{ $currency->code }}">
                                                @if (isset($rate['converted_rates'][$currency->code]))
                                                    @php $convRate = $rate['converted_rates'][$currency->code]; @endphp
                                                    <div class="cursor-pointer group"
                                                        onclick="copyToClipboard('{{ $guide['role'] }} - {{ $rate['level'] }}: {{ $convRate['symbol'] }}{{ $convRate['min'] }} - {{ $convRate['symbol'] }}{{ $convRate['max'] }}')"
                                                        title="Click to copy">
                                                        <div class="text-2xl font-bold text-secondary group-hover:text-primary transition-colors">
                                                            {{ $convRate['symbol'] }}{{ $convRate['min'] }} - {{ $convRate['symbol'] }}{{ $convRate['max'] }}
                                                        </div>
                                                        <div class="text-sm text-gray-500 mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                                            Click to copy
                                                        </div>
                                                    </div>
                                                    @if ($currency->code !== $baseCurrencyCode)
                                                        <div class="text-sm text-gray-600 mt-2">
                                                            @ {{ number_format($currency->exchange_rate * 100, 4) }}% of {{ $baseCurrencyCode }}
                                                        </div>
                                                    @else
                                                        <div class="text-sm text-gray-600 mt-2">Base Currency</div>
                                                    @endif
                                                @endif
                                            </td>
                                        @endforeach

                                        <!-- Outsource Checkbox Column -->
                                        <td class="p-6 border-t border-gray-100 border-l border-gray-200 align-middle hover:bg-primary/5 transition-colors cursor-pointer group"
                                            onclick="toggleCheckbox(this)">
                                            <div class="flex items-center justify-center">
                                                <label class="inline-flex items-center cursor-pointer select-none">
                                                    <!-- Custom Checkbox -->
                                                    <div class="custom-checkbox-container">
                                                        <input type="checkbox" 
                                                               class="custom-checkbox-input row-checkbox"
                                                               name="outsource_item"
                                                               value="{{ $guide['role'] }}|{{ $rate['level'] }}"
                                                               onchange="updateSelectedItems()">
                                                        <span class="custom-checkbox-checkmark"></span>
                                                    </div>
                                                    <span class="ml-2 text-sm text-gray-700 group-hover:text-primary transition-colors">
                                                        Select
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- Group Separator -->
                                @if (!$loop->last)
                                    <tr>
                                        <td colspan="{{ 3 + $currencies->count() }}" class="h-6 bg-gray-100"></td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Outsource Action Button (Bottom Right) -->
                    <div class="sticky bottom-0 right-0 bg-white border-t border-gray-200 px-6 py-4 flex justify-between items-center shadow-lg z-20">
                        <div class="flex items-center space-x-4">
                            <span id="selected-count" class="text-sm text-gray-600 font-medium bg-gray-100 px-3 py-1 rounded-full">
                                <span id="selected-number" class="font-bold text-primary">0</span> of 
                                <span id="total-rows" class="text-gray-700">{{ $totalRows }}</span> items selected
                            </span>
                            <div class="flex items-center space-x-2">
                                <button onclick="selectAllVisible()" 
                                        class="text-sm text-primary hover:text-primary/80 transition-colors cursor-pointer px-3 py-1 hover:bg-primary/5 rounded">
                                    Select Visible
                                </button>
                                <button onclick="clearAllSelections()" 
                                        class="text-sm text-gray-600 hover:text-red-600 transition-colors cursor-pointer px-3 py-1 hover:bg-red-50 rounded">
                                    Clear All
                                </button>
                            </div>
                        </div>
                        <button id="outsource-btn" 
                                onclick="goToOutsourceContact()" 
                                class="px-6 py-3 bg-primary hover:bg-primary/90 text-white font-medium rounded-lg transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed cursor-pointer shadow-md hover:shadow-lg active:scale-95 flex items-center"
                                disabled>
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Outsource Resource
                        </button>
                    </div>
                </div>

                <!-- Mobile Cards -->
                <div class="md:hidden space-y-6">
                    <!-- Mobile Bulk Selection Controls -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-4">
                        <div class="flex items-center justify-between">
                            <label class="flex items-center cursor-pointer">
                                <div class="custom-checkbox-container">
                                    <input type="checkbox" 
                                           class="custom-checkbox-input"
                                           id="mobile-select-all-checkbox"
                                           onchange="toggleSelectAll(this.checked)">
                                    <span class="custom-checkbox-checkmark"></span>
                                </div>
                                <span class="ml-2 text-sm font-medium text-primary">Select All Resources</span>
                            </label>
                            <div class="flex items-center space-x-2">
                                <button onclick="selectAllVisible()" 
                                        class="text-xs text-primary hover:text-primary/80 transition-colors cursor-pointer px-2 py-1 hover:bg-primary/5 rounded">
                                    Select All
                                </button>
                                <button onclick="clearAllSelections()" 
                                        class="text-xs text-gray-600 hover:text-red-600 transition-colors cursor-pointer px-2 py-1 hover:bg-red-50 rounded">
                                    Clear All
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 text-center text-gray-600 text-xs">
                            <span id="mobile-selected-count" class="font-bold text-primary">0</span> of 
                            <span class="text-gray-700">{{ $totalRows }}</span> items selected
                        </div>
                    </div>

                    @foreach ($salaryData as $guide)
                        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
                            <div class="bg-gradient-to-r from-primary to-secondary text-white p-6">
                                <h3 class="text-2xl font-bold">{{ $guide['role'] }}</h3>
                            </div>
                            <div class="p-6 space-y-6">
                                @foreach ($guide['rates'] as $rate)
                                    <div class="pb-6 border-b border-gray-100 last:border-b-0 last:pb-0">
                                        <div class="flex items-center justify-between mb-4 cursor-pointer hover:bg-gray-50 p-3 rounded-lg transition-colors"
                                             onclick="toggleMobileCheckbox(this, '{{ $guide['role'] }}|{{ $rate['level'] }}')">
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 rounded-full bg-accent mr-3 flex-shrink-0"></div>
                                                <div>
                                                    <h4 class="font-bold text-lg text-gray-800">{{ $rate['level'] }}</h4>
                                                    <p class="text-sm text-gray-600">{{ $rate['description'] ?? '' }}</p>
                                                </div>
                                            </div>
                                            <label class="inline-flex items-center cursor-pointer flex-shrink-0 ml-2">
                                                <!-- Custom Checkbox for Mobile -->
                                                <div class="custom-checkbox-container">
                                                    <input type="checkbox" 
                                                           class="custom-checkbox-input row-checkbox"
                                                           name="outsource_item_mobile"
                                                           value="{{ $guide['role'] }}|{{ $rate['level'] }}"
                                                           onchange="updateSelectedItems()">
                                                    <span class="custom-checkbox-checkmark"></span>
                                                </div>
                                                <span class="ml-2 text-sm text-gray-700">Select</span>
                                            </label>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4">
                                            @foreach ($currencies as $currency)
                                                @if (isset($rate['converted_rates'][$currency->code]))
                                                    @php $convRate = $rate['converted_rates'][$currency->code]; @endphp
                                                    <div class="bg-gray-50 p-4 rounded-lg">
                                                        <div class="text-sm font-semibold text-gray-600 mb-1">{{ $currency->code }}</div>
                                                        <div class="text-lg font-bold text-secondary">
                                                            {{ $convRate['symbol'] }}{{ $convRate['min'] }} - {{ $convRate['symbol'] }}{{ $convRate['max'] }}
                                                        </div>
                                                        <button onclick="copyToClipboard('{{ $guide['role'] }} - {{ $rate['level'] }}: {{ $convRate['symbol'] }}{{ $convRate['min'] }} - {{ $convRate['symbol'] }}{{ $convRate['max'] }}')"
                                                            class="mt-2 text-xs text-primary hover:underline cursor-pointer">
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

                    <!-- Mobile Outsource Button -->
                    <div class="sticky bottom-4 left-4 right-4 z-30">
                        <button id="mobile-outsource-btn" 
                                onclick="goToOutsourceContact()" 
                                class="w-full px-6 py-4 bg-primary hover:bg-primary/90 text-white font-medium rounded-lg shadow-lg transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed cursor-pointer flex items-center justify-center"
                                disabled>
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Outsource (<span id="mobile-selected-display">0</span>)
                        </button>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="mt-12 bg-gradient-to-r from-background to-accent/20 rounded-2xl p-8 border border-accent/30">
                    <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                        <span class="mr-3">📟</span> How to Use This Salary Guide
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="text-3xl mb-4">💼</div>
                            <h4 class="font-bold text-lg text-primary mb-2">For Employers</h4>
                            <p class="text-gray-600">
                                Use these benchmarks to set competitive salaries for remote roles based in the Philippines.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="text-3xl mb-4">👨‍💻</div>
                            <h4 class="font-bold text-lg text-primary mb-2">For Employees</h4>
                            <p class="text-gray-600">
                                Understand market rates for your experience level and negotiate better compensation.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <div class="text-3xl mb-4">⚡</div>
                            <h4 class="font-bold text-lg text-primary mb-2">Bulk Selection</h4>
                            <p class="text-gray-600">
                                Use "Select All" to quickly choose multiple resources for outsourcing with one click.
                            </p>
                        </div>
                    </div>
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
        <footer class="bg-gradient-to-r from-primary to-secondary text-white py-8 mt-12">
            <div class="container mx-auto px-4 md:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Free Monthly Salary Guide</h3>
                        <p class="opacity-80">Transparent salary data for remote teams</p>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="mailto:info@example.com?subject=Salary%20Guide%20Inquiry"
                            class="px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg transition-colors cursor-pointer">
                            📧 Contact Us
                        </a>
                        <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg transition-colors cursor-pointer">
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

    <!-- Custom Checkbox CSS -->
    <style>
        /* Custom Checkbox Styles */
        .custom-checkbox-container {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .custom-checkbox-input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .custom-checkbox-checkmark {
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            background-color: #f3f4f6;
            border: 2px solid #d1d5db;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .custom-checkbox-input:checked ~ .custom-checkbox-checkmark {
            background-color: #205781; /* primary color */
            border-color: #205781;
        }

        .custom-checkbox-input:checked ~ .custom-checkbox-checkmark:after {
            content: "";
            position: absolute;
            display: block;
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .custom-checkbox-container:hover .custom-checkbox-checkmark {
            border-color: #205781;
            background-color: #e8f0fe;
        }

        .custom-checkbox-input:focus ~ .custom-checkbox-checkmark {
            box-shadow: 0 0 0 3px rgba(32, 87, 129, 0.2);
            border-color: #205781;
        }

        /* Animation for checkbox check */
        .custom-checkbox-checkmark:after {
            animation: checkAnim 0.2s ease;
        }

        @keyframes checkAnim {
            from {
                transform: scale(0) rotate(45deg);
                opacity: 0;
            }
            to {
                transform: scale(1) rotate(45deg);
                opacity: 1;
            }
        }

        /* Button hover effect */
        #outsource-btn:not(:disabled):hover,
        #mobile-outsource-btn:not(:disabled):hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(32, 87, 129, 0.3);
        }

        /* Row hover effect for checkbox column */
        td:hover .custom-checkbox-checkmark {
            border-color: #205781;
        }

        /* Selected row style */
        .custom-checkbox-input:checked ~ span.text-gray-700 {
            color: #205781;
            font-weight: 600;
        }

        /* Pulse animation for selected items */
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Loading spinner animation */
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }

        /* Bulk selection controls */
        .bulk-select-btn {
            transition: all 0.2s ease;
        }

        .bulk-select-btn:hover {
            transform: translateY(-1px);
        }

        /* Selected row highlight */
        .row-selectable.selected {
            background-color: rgba(32, 87, 129, 0.05);
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Store selected items
            window.selectedItems = new Set();
            window.totalRows = {{ $totalRows }};
            
            // Set total rows in the display
            document.getElementById('total-rows').textContent = totalRows;

            // Copy to clipboard function
            window.copyToClipboard = function(text) {
                navigator.clipboard.writeText(text).then(() => {
                    const notification = document.createElement('div');
                    notification.className = 'fixed top-4 right-4 bg-green-800 text-white px-6 py-3 rounded-lg shadow-lg z-50';
                    notification.textContent = '✓ Copied to clipboard!';
                    document.body.appendChild(notification);
                    setTimeout(() => notification.remove(), 2000);
                });
            };

            // Filter functionality
            window.filterTable = function(searchTerm) {
                const rows = document.querySelectorAll('tbody tr.row-selectable');
                searchTerm = searchTerm.toLowerCase();
                rows.forEach(row => {
                    const role = row.getAttribute('data-role').toLowerCase();
                    row.style.display = (role.includes(searchTerm) || searchTerm === '') ? '' : 'none';
                });
                updateSelectAllCheckbox();
            };

            // Currency toggle functionality
            window.toggleCurrency = function(currencyCode, isChecked) {
                const cells = document.querySelectorAll(`[data-currency="${currencyCode}"]`);
                const columns = document.querySelectorAll(`.currency-${currencyCode}`);

                const display = isChecked ? '' : 'none';
                const thumbTransform = isChecked ? 'translateX(24px)' : 'translateX(0)';
                const trackColor = isChecked ? '#10b981' : '#e5e7eb';
                const labelColor = isChecked ? '#10b981' : '#6b7280';
                const indicatorColor = isChecked ? '#10b981' : '#9ca3af';

                cells.forEach(cell => { 
                    cell.style.display = display; 
                    cell.classList.toggle('hidden', !isChecked); 
                });
                
                columns.forEach(col => { 
                    col.style.display = display; 
                    col.classList.toggle('hidden', !isChecked); 
                });

                const track = document.querySelector(`.toggle-track-${currencyCode}`);
                const thumb = document.querySelector(`.toggle-thumb-${currencyCode}`);
                const label = document.querySelector(`.toggle-label-${currencyCode}`);
                const indicator = document.querySelector(`.toggle-indicator-${currencyCode}`);

                if (track) track.style.backgroundColor = trackColor;
                if (thumb) thumb.style.transform = thumbTransform;
                if (label) label.style.color = labelColor;
                if (indicator) indicator.style.backgroundColor = indicatorColor;
            };

            // Toggle checkbox on row click (desktop)
            window.toggleCheckbox = function(cell) {
                const checkbox = cell.querySelector('.custom-checkbox-input');
                if (checkbox) {
                    checkbox.checked = !checkbox.checked;
                    checkbox.dispatchEvent(new Event('change'));
                    
                    // Add visual feedback
                    const row = cell.closest('tr');
                    row.classList.toggle('selected', checkbox.checked);
                    
                    // Animate checkmark
                    if (checkbox.checked) {
                        const checkmark = cell.querySelector('.custom-checkbox-checkmark');
                        checkmark.style.transform = 'scale(1.1)';
                        setTimeout(() => {
                            checkmark.style.transform = 'scale(1)';
                        }, 200);
                    }
                }
            };

            // Toggle checkbox on row click (mobile)
            window.toggleMobileCheckbox = function(row, value) {
                const checkbox = row.querySelector('.custom-checkbox-input');
                if (checkbox) {
                    checkbox.checked = !checkbox.checked;
                    checkbox.dispatchEvent(new Event('change'));
                    
                    // Add visual feedback
                    row.classList.toggle('selected', checkbox.checked);
                    row.classList.toggle('border-l-4', checkbox.checked);
                    row.classList.toggle('border-l-primary', checkbox.checked);
                }
            };

            // Update Select All checkbox state
            function updateSelectAllCheckbox() {
                const checkboxes = document.querySelectorAll('.row-checkbox:not([style*="display: none"])');
                const checkedCheckboxes = document.querySelectorAll('.row-checkbox:not([style*="display: none"]):checked');
                
                const selectAllCheckbox = document.getElementById('select-all-checkbox');
                const mobileSelectAllCheckbox = document.getElementById('mobile-select-all-checkbox');
                
                const allVisibleChecked = checkboxes.length > 0 && checkedCheckboxes.length === checkboxes.length;
                const someVisibleChecked = checkboxes.length > 0 && checkedCheckboxes.length > 0 && checkedCheckboxes.length < checkboxes.length;
                
                if (selectAllCheckbox) {
                    selectAllCheckbox.checked = allVisibleChecked;
                    selectAllCheckbox.indeterminate = someVisibleChecked;
                }
                
                if (mobileSelectAllCheckbox) {
                    mobileSelectAllCheckbox.checked = allVisibleChecked;
                    mobileSelectAllCheckbox.indeterminate = someVisibleChecked;
                }
            }

            // Update selected items count
            window.updateSelectedItems = function() {
                const checkboxes = document.querySelectorAll('.row-checkbox');
                selectedItems.clear();
                
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        selectedItems.add(checkbox.value);
                        const row = checkbox.closest('tr, .flex.items-center.justify-between');
                        if (row) row.classList.add('selected');
                    } else {
                        const row = checkbox.closest('tr, .flex.items-center.justify-between');
                        if (row) row.classList.remove('selected');
                    }
                });
                
                const count = selectedItems.size;
                const btn = document.getElementById('outsource-btn');
                const mobileBtn = document.getElementById('mobile-outsource-btn');
                const countSpan = document.getElementById('selected-number');
                const mobileCountSpan = document.getElementById('mobile-selected-count');
                const mobileDisplaySpan = document.getElementById('mobile-selected-display');
                
                if (countSpan) countSpan.textContent = count;
                if (mobileCountSpan) mobileCountSpan.textContent = count;
                if (mobileDisplaySpan) mobileDisplaySpan.textContent = count;
                
                // Update button states
                if (btn) {
                    btn.disabled = count === 0;
                    if (count > 0) {
                        btn.classList.add('animate-pulse');
                        setTimeout(() => {
                            btn.classList.remove('animate-pulse');
                        }, 1000);
                    }
                }
                if (mobileBtn) mobileBtn.disabled = count === 0;
                
                // Update Select All checkbox state
                updateSelectAllCheckbox();
            };

            // Toggle Select All functionality
            window.toggleSelectAll = function(isChecked) {
                const checkboxes = document.querySelectorAll('.row-checkbox:not([style*="display: none"])');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = isChecked;
                    const row = checkbox.closest('tr, .flex.items-center.justify-between');
                    if (row) {
                        row.classList.toggle('selected', isChecked);
                    }
                });
                updateSelectedItems();
            };

            // Select all visible rows
            window.selectAllVisible = function() {
                const checkboxes = document.querySelectorAll('.row-checkbox:not([style*="display: none"])');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = true;
                    const row = checkbox.closest('tr, .flex.items-center.justify-between');
                    if (row) row.classList.add('selected');
                });
                updateSelectedItems();
            };

            // Clear all selections
            window.clearAllSelections = function() {
                const checkboxes = document.querySelectorAll('.row-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                    const row = checkbox.closest('tr, .flex.items-center.justify-between');
                    if (row) row.classList.remove('selected');
                });
                updateSelectedItems();
            };

            // Go to contact page with selected items
            window.goToOutsourceContact = function() {
                if (selectedItems.size === 0) return;
                
                // Show loading state
                const btn = document.getElementById('outsource-btn');
                const mobileBtn = document.getElementById('mobile-outsource-btn');
                
                if (btn) {
                    const originalText = btn.innerHTML;
                    btn.innerHTML = `
                        <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Processing...
                    `;
                    btn.disabled = true;
                    
                    // Restore original text after 5 seconds if something goes wrong
                    setTimeout(() => {
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    }, 5000);
                }
                
                if (mobileBtn) {
                    const originalMobileText = mobileBtn.innerHTML;
                    mobileBtn.innerHTML = `
                        <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Processing...
                    `;
                    mobileBtn.disabled = true;
                    
                    // Restore original text after 5 seconds if something goes wrong
                    setTimeout(() => {
                        mobileBtn.innerHTML = originalMobileText;
                        mobileBtn.disabled = false;
                    }, 5000);
                }
                
                // Convert Set to Array and encode for URL
                const selectedArray = Array.from(selectedItems);
                const queryString = selectedArray.map(item => `items[]=${encodeURIComponent(item)}`).join('&');
                
                // Redirect after short delay for animation
                setTimeout(() => {
                    window.location.href = `{{ route('contact') }}?${queryString}`;
                }, 500);
            };

            // Initialize currency toggles
            document.querySelectorAll('[id^="toggle-"]').forEach(checkbox => {
                const code = checkbox.id.replace('toggle-', '');
                toggleCurrency(code, checkbox.checked);
            });
            
            // Initialize the selected items count
            updateSelectedItems();
        });
    </script>
@endsection