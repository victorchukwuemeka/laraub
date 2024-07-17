<!-- resources/views/projects/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container mx-auto mt-8">
        <form action="{{ route('projects.store') }}" method="post" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="project_name" class="block text-gray-700 text-sm font-bold mb-2">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" class="w-full px-3 py-2 border rounded-md" rows="4"></textarea>
            </div>

            <div class="mb-4">
                <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link</label>
                <input type="url" name="link" id="link" class="w-full px-3 py-2 border rounded-md" placeholder="https://example.com">
            </div>

            <div class="mb-4">
                <label for="technologies_used" class="block text-gray-700 text-sm font-bold mb-2">Technologies Used</label>
                <input type="text" name="technologies_used" id="technologies_used" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
@endsection
