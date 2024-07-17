@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-4">
        <h1 class="text-3xl font-bold text-gray-900">
            Total Projects: <span class="text-blue-600">
            {{ $totalProjects }}</span>
        </h1>
    </div>
      
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($projects as $project)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 relative">
                <div class="mb-4">
                    <img class="w-full h-48 object-cover rounded-md" src="{{asset('/storage/'.$project->image)}}" alt="{{ $project->name }}">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $project->name }}</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $project->motto }}</p>
                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $project->description }}</p>
                <p class="text-gray-500 text-sm mt-4">Posted on: {{ $project->created_at->format('M d, Y h:i A') }}</p>

                <div class="mt-4">
                    <a href="{{ $project->website }}" class="text-blue-600 dark:text-blue-400 hover:underline" target="_blank">Website</a>
                </div>
                <div class="mt-2">
                    <a href="{{ $project->github_repo }}" class="text-blue-600 dark:text-blue-400 hover:underline" target="_blank">GitHub Repo</a>
                </div>
                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="absolute top-2 right-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
            </div>
        @endforeach
    </div>
    
</div>
@endsection
