@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="bg-gray-900 text-white pt-0 py-8 sm:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl sm:text-5xl font-extrabold mb-4">
            {{__("Find The Latest Laravel Packages")}}
        </h1>
        @auth
        <a href="{{ route('projects.create') }}"
          class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3
          sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
           Make a Post
        </a>
        @else
        <a href="{{ route('login') }}"
           class="bg-blue-500 hover:bg-blue-600 text-white
            py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl
            transition duration-300 ease-in-out inline-block">
           Login To Post Your Package
        </a>
        @endauth
    </div>
</div>

<!-- Sleek Visitor Count Section -->
<div class="bg-gradient-to-r from-indigo-600 to-pink-600 py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="inline-block bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-8 sm:p-12 shadow-2xl hover:shadow-3xl transition-shadow duration-300">
            <div class="flex flex-col items-center space-y-4">
                <!-- Icon -->
                <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-globe text-4xl text-white"></i>
                </div>
                <!-- Text -->
                <div>
                    <p class="text-lg sm:text-xl text-white opacity-90 font-medium">{{ __('People Exploring Laravel') }}</p>
                    <p class="text-5xl sm:text-7xl font-bold text-white mt-2">{{ $visitorCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projects Section -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="flex items-start mb-2 mt-4 justify-center">
                <div class="w-full max-w-md px-4 py-4 bg-white rounded-lg shadow-lg">
                    <div class="flex justify-center -mt-16 md:justify-end">
                        <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400"
                            alt="{{ $project->name }}"
                            src="{{ asset('/storage/' . $project->image) }}">
                    </div>

                    <h2 class="mt-2 text-xl font-semibold text-gray-900 md:mt-0">{{ $project->name }}</h2>

                    <p class="mt-2 text-sm text-gray-700">
                        {{ $project->motto }}
                    </p> 
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex space-x-4">
                            <a href="#" class="flex items-center text-lg font-medium text-blue-600 dark:text-blue-300 hover:text-blue-800 dark:hover:text-blue-500 transition-colors duration-200" tabindex="0" role="link">
                                <i class="fa-regular fa-comment text-xl mr-2"></i>
                                <span></span>
                            </a>
                            <a href="{{ route('projects.show', ['project' => $project->id]) }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                                View Page 
                            </a>
                        </div>
                        <div class="flex space-x-4 items-center">
                            <a href="{{ $project->website ?? $project->github_repo }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                                <i class="fa-solid fa-link"></i>
                                Visit Site
                            </a>
                            <span class="text-sm text-gray-600">
                                <i class="fa-regular fa-eye text-gray-600 mr-1"></i>
                                {{ $project->view_count }} Views
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-8 mb-0">
        {{ $projects->links() }}
    </div>
</div>

<!-- Sponsors Section -->
<div class="flex flex-col items-center py-10 bg-gray-50">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">{{ __('Partners') }}</h2>
    
    <div class="flex flex-wrap justify-center w-full max-w-screen-xl">
        @forelse ($sponsors as $sponsor)
        <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
            <div class="bg-white rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl overflow-hidden">
                <a href="{{ route('ad.visit', $sponsor->id) }}" target="_blank" class="block">
                    <div class="p-8">
                        <!-- Logo Container with enhanced styling -->
                        <div class="flex items-center justify-center mb-6 relative">
                            <div class="w-24 h-24 rounded-full bg-gray-50 flex items-center justify-center p-4 border border-gray-100 shadow-sm">
                                <img 
                                    src="{{ asset('/storage/' . $sponsor->media) }}"
                                    alt="{{ $sponsor->title }}"
                                    class="w-full h-full object-contain filter contrast-125"
                                />
                            </div>
                        </div>
                        
                        <!-- Content with refined typography -->
                        <div class="space-y-3">
                            <h3 class="text-xl font-semibold text-gray-800 text-center">
                                {{ $sponsor->title }}
                            </h3>
                            <p class="text-gray-600 text-center text-sm leading-relaxed">
                                {{ $sponsor->description }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @empty
        <div class="w-full">
            <p class="text-center text-gray-500 italic">No verified ads available.</p>
        </div>
        @endforelse
    </div>
</div>

@endsection