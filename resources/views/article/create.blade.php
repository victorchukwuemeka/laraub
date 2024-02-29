@extends('layouts.app')
@section('content')

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center">Create a Blog Article</h1>
    <form action="{{route('post.article')}}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="title" class="block text-gray-700 text-lg font-semibold mb-2">Title</label>
            <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" placeholder="Enter the title" required>
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 text-lg font-semibold mb-2">Content</label>
            <textarea id="content" name="body" class="ckeditor form-control w-full border border-gray-300 rounded-lg py-4 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" rows="6"
             placeholder="Write your article content here" required>
           </textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline">
              Publish Article
            </button>
        </div>
    </form>
</div>


<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
