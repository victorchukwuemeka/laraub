@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-xl rounded-lg p-8">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Create Project</h1>

            @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 rounded-lg p-4 mb-8">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Project Name:</label>
                    <input type="text" name="name" id="name" class="form-input w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" placeholder="Enter project name">
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">
                      Project Image (optional):
                    </label>
                    <input type="file" name="image" id="image" class="form-input w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Project Description:</label>
                    <textarea name="description" id="description" class="form-textarea w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('description') border-red-500 @enderror" rows="4" placeholder="Enter project description">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="motto" class="block text-gray-700 font-bold mb-2">Project Motto:</label>
                    <input type="text" name="motto" id="motto" class="form-input w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('motto') border-red-500 @enderror" value="{{ old('motto') }}" placeholder="Enter project motto">
                </div>

                <div class="mb-4">
                    <label for="website" class="block text-gray-700 font-bold mb-2">Project Website (optional):</label>
                    <input type="url" name="website" id="website" class="form-input w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('website') border-red-500 @enderror" value="{{ old('website') }}" placeholder="Enter project website URL">
                </div>

                <div class="mb-6">
                    <label for="github_profile" class="block text-gray-700 font-bold mb-2">GitHub Profile (optional):</label>
                    <input type="url" name="github_profile" id="github_profile" class="form-input w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('github_profile') border-red-500 @enderror" value="{{ old('github_profile') }}" placeholder="Enter your GitHub profile URL">
                    <p class="text-gray-500 text-sm mt-1">
                      Example: https://github.com/yourusername
                    </p>
                </div>

                <div class="flex items-center justify-center">
                  <button type="submit" class="bg-blue-500 text-white font-semibold py-3 px-6 rounded-full shadow-md hover:bg-blue-600 transition-colors duration-300">
                    Create Project
                  </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
