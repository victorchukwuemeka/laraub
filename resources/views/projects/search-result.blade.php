@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Search Results for "{{ $query }}"</h1>

    @if ($projects->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">
                            <a href="{{ route('projects.show', $project) }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">
                                {{ $project->name }}
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>Created: {{ $project->created_at->format('M d, Y') }}</span>
                            <span>By: {{ $project->user->name }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $projects->appends(['query' => $query])->links() }}
        </div>
    @else
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6" role="alert">
            <p>No projects found matching "{{ $query }}".</p>
        </div>
    @endif

    <div class="mt-8">
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
            Back to Home
        </a>
    </div>
</div>
@endsection