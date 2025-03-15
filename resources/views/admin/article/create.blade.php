@extends('layouts.admin')

@section('content')
<div class="flex">
    <div class="flex-1 lg:w-[80%] mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-semibold text-center mb-6 text-gray-800">
                Create a Blog Article
            </h1>

            <form action="{{ route('admin.store.article') }}" method="POST" enctype="multipart/form-data" class="max-w-3xl mx-auto">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block text-gray-700 text-lg font-semibold mb-2">Title</label>
                    <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-blue-500" placeholder="Enter the title" required>
                </div>

                <div class="mb-7">
                    <label for="body" class="block text-gray-700 text-lg font-semibold mb-2">Content</label>
                    <input id="body" type="hidden" name="body">
                    <trix-editor input="body" 
                    class="
                    trix-content w-full min-h-[200px] max-h-[800px]
                     bg-gray-50 shadow-sm border rounded text-gray-700 
                     focus:outline-none focus:ring-2 focus:ring-blue-300 
                     overflow-y-auto"></trix-editor>
                </div>

                <div class="mb-6">
                    <label for="slug" class="block text-gray-700 text-lg font-semibold mb-2">Slug (Optional)</label>
                    <input type="text" id="slug" name="slug" class="w-full border border-gray-300 rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-blue-500" placeholder="Enter a custom slug">
                </div>

                <div class="mb-6">
                    <label for="image" class="block text-gray-700 text-lg font-semibold mb-2">Upload Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="w-full border border-gray-300 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block text-gray-700 text-lg font-semibold mb-2">Thumbnail URL (Optional)</label>
                    <input type="text" id="thumbnail" name="thumbnail" class="w-full border border-gray-300 rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-blue-500" placeholder="Enter the thumbnail URL">
                </div>

                <div class="mb-6">
                    <label for="status" class="block text-gray-700 text-lg font-semibold mb-2">Status</label>
                    <select id="status" name="status" class="w-full border border-gray-300 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:border-blue-500" required>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline">
                        Publish Article
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    document.addEventListener("trix-initialize", function (event) {
        let editor = event.target;
        let trixElement = editor.editor.element;

        function adjustHeight() {
            trixElement.style.height = "auto !important";
            trixElement.style.height = trixElement.scrollHeight + "px !important";
        }

        adjustHeight(); // Initial height adjustment

        let timeoutId;
        editor.addEventListener("trix-change", function () {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(adjustHeight, 100); // Debounce
        });

    });
</script>
@endsection