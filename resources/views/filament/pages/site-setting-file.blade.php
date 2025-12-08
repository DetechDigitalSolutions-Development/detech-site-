<!-- resources/views/filament/pages/site-setting-file.blade.php -->
<div class="p-6">
    <h2 class="text-lg font-medium mb-4">View File: {{ $key }}</h2>
    
    @if($fileUrl)
        <div class="space-y-4">
            <div class="p-4 bg-gray-100 rounded-lg">
                <p class="text-sm text-gray-600 mb-2">
                    <strong>File URL:</strong>
                </p>
                <a href="{{ $fileUrl }}" 
                   target="_blank" 
                   class="text-primary-600 hover:underline break-all">
                    {{ $fileUrl }}
                </a>
            </div>
            
            <div class="flex space-x-3">
                <a href="{{ $fileUrl }}" 
                   target="_blank" 
                   class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md bg-primary-600 text-white hover:bg-primary-700">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download File
                </a>
                
                <button onclick="copyToClipboard('{{ $fileUrl }}')" 
                        class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    Copy URL
                </button>
            </div>
        </div>
    @else
        <p class="text-gray-500">No file found.</p>
    @endif
</div>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('URL copied to clipboard!');
    });
}
</script>