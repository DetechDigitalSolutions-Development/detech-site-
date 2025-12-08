<!-- resources/views/filament/pages/site-setting-image.blade.php -->
<div class="p-6">
    <h2 class="text-lg font-medium mb-4">View Image: {{ $key }}</h2>
    
    @if($imageUrl)
        <div class="space-y-4">
            <img 
                src="{{ $imageUrl }}" 
                alt="{{ $key }}" 
                class="max-w-full h-auto rounded-lg shadow-md"
                style="max-height: 400px;"
            >
            
            <div class="text-sm text-gray-600">
                <p><strong>URL:</strong> <a href="{{ $imageUrl }}" target="_blank" class="text-primary-600 hover:underline">{{ $imageUrl }}</a></p>
            </div>
            
            <div class="flex space-x-3">
                <a href="{{ $imageUrl }}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md bg-primary-600 text-white hover:bg-primary-700">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    Open Image
                </a>
                
                <button onclick="copyToClipboard('{{ $imageUrl }}')" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    Copy URL
                </button>
            </div>
        </div>
    @else
        <p class="text-gray-500">No image found.</p>
    @endif
</div>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('URL copied to clipboard!');
    });
}
</script>