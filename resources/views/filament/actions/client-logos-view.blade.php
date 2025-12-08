{{-- resources/views/filament/actions/client-logos-view.blade.php --}}
<div class="p-4">
    <h3 class="text-lg font-semibold mb-4">Client Company Logos</h3>
    
    @if(empty($logos))
        <p class="text-gray-500">No client logos added yet.</p>
    @else
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($logos as $index => $logo)
                <div class="border rounded-lg p-3 bg-gray-50">
                    <div class="mb-2">
                        @if(isset($logo['logo_path']) && Storage::exists($logo['logo_path']))
                            <img src="{{ Storage::url($logo['logo_path']) }}" 
                                 alt="{{ $logo['company_name'] ?? 'Client Logo' }}"
                                 class="w-full h-24 object-contain bg-white p-2 rounded">
                        @else
                            <div class="w-full h-24 flex items-center justify-center bg-gray-200 rounded">
                                <span class="text-gray-500">No logo</span>
                            </div>
                        @endif
                    </div>
                    
                    <div class="text-sm">
                        <div class="font-medium truncate" title="{{ $logo['company_name'] ?? 'Unknown' }}">
                            {{ $logo['company_name'] ?? 'Unknown Company' }}
                        </div>
                        
                        @if(isset($logo['website']) && $logo['website'])
                            <a href="{{ $logo['website'] }}" 
                               target="_blank" 
                               class="text-blue-600 hover:text-blue-800 text-xs truncate block"
                               title="{{ $logo['website'] }}">
                                {{ parse_url($logo['website'], PHP_URL_HOST) }}
                            </a>
                        @endif
                        
                        <div class="mt-1">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium 
                                {{ $logo['is_active'] ?? false ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $logo['is_active'] ?? false ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="mt-6 text-sm text-gray-600">
            <p><strong>Total Logos:</strong> {{ count($logos) }}</p>
            <p><strong>Active Logos:</strong> {{ collect($logos)->where('is_active', true)->count() }}</p>
        </div>
    @endif
</div>