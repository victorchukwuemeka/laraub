@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-screen pb-8 bg-gray-100">
    <div class="max-w-md w-full mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-gray-800 text-center">Create a New Ad</h1>
        
        <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" 
                    class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                    placeholder="Enter a title" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea id="description" name="description" 
                    class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                    rows="4" placeholder="Enter a description" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Company Logo</label>
                <div class="bg-gray-50 rounded-lg p-4 border-2 border-dashed border-gray-300">
                    <input type="file" id="media" name="media" 
                        class="hidden" 
                        accept=".svg,.png"
                        onchange="previewFile()">
                    <label for="media" class="cursor-pointer block">
                        <div class="text-center" id="upload-area">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" 
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="mt-4">
                                <img id="preview" class="mx-auto max-h-32 hidden">
                            </div>
                            <p class="mt-1 text-sm text-gray-600">Upload your company logo</p>
                            <p class="mt-1 text-xs text-gray-500">SVG or PNG only (Max 2MB)</p>
                            <p class="mt-1 text-xs text-gray-500">Recommended: Square format with transparent background</p>
                        </div>
                    </label>
                </div>
                @error('media')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="url" class="block text-gray-700 font-semibold mb-2">URL</label>
                <input type="url" id="url" name="url" value="{{ old('url') }}"
                    class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                    placeholder="Enter a URL" required>
                @error('url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="px-4 py-2 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                    Create Ad
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function previewFile() {
    const preview = document.getElementById('preview');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
        preview.classList.remove('hidden');
    }

    if (file) {
        // Check file size
        if (file.size > 2 * 1024 * 1024) {
            alert('File size must be less than 2MB');
            document.querySelector('input[type=file]').value = '';
            preview.classList.add('hidden');
            return;
        }

        // Check file type
        if (!['image/svg+xml', 'image/png'].includes(file.type)) {
            alert('Please upload only SVG or PNG files');
            document.querySelector('input[type=file]').value = '';
            preview.classList.add('hidden');
            return;
        }

        reader.readAsDataURL(file);
    }
}
</script>
@endsection