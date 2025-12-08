<!-- resources/views/filament/pages/site-setting-client-logos.blade.php -->
<div class="p-6">
    <h2 class="text-lg font-medium mb-4">Client Logos: {{ $key }}</h2>
    
    @if(!empty($logos))
        <div class="mb-4">
            <p class="text-sm text-gray-600 mb-2">Total logos: {{ count($logos) }}</p>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @foreach($logos as $index => $logo)
                <div class="border rounded-lg p-3 bg-gray-50">
                    <div class="aspect-video mb-2 flex items-center justify-center bg-white">
                        <img 
                            src="{{ $logo['path'] ?? '#' }}" 
                            alt="Client Logo {{ $index + 1 }}" 
                            class="max-w-full max-h-full object-contain p-2"
                            onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 fill=%22%23f3f4f6%22/><text x=%2250%22 y=%2255%22 font-family=%22Arial%22 font-size=%2212%22 text-anchor=%22middle%22 fill=%229ca3af%22>Logo {{ $index + 1 }}</text></svg>'"
                        >
                        
                    </div>
                    <div class="text-xs text-gray-500 truncate">{{ $logo['filename'] ?? 'Unknown' }}</div>
                    @if(isset($logo['uploaded_at']))
                        <div class="text-xs text-gray-400">{{ \Carbon\Carbon::parse($logo['uploaded_at'])->format('M d, Y') }}</div>
                    @endif
                </div>{{ json_encode($logo) }}
            @endforeach
        </div>
    @else
        <p class="text-gray-500">No client logos found.</p>
    @endif
</div>
