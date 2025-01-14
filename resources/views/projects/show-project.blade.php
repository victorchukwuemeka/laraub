@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gray-900 text-white py-16">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-6">
                {{__("Find The Latest Laravel Packages")}}
            </h1>
            @auth
                <a href="{{ route('projects.create') }}"
                   class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
                    Make a Post
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
                    Login To Post Your Package
                </a>
            @endauth
        </div>
    </div>

    <!-- Visitor Count Section -->
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

    <!-- Project Details Section -->
<div class="container mx-auto px-6 py-16">
    <div class="flex flex-col lg:flex-row items-start gap-12">
        <!-- Project Image -->
        <div class="w-full lg:w-1/2">
            <div class="relative overflow-hidden rounded-xl shadow-2xl hover:shadow-3xl transition-shadow duration-300">
                <img class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-300"
                     src="{{ asset('/storage/' . $project->image) }}"
                     alt="{{ $project->name }}">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>

        <!-- Project Information -->
        <div class="w-full lg:w-1/2 space-y-6">
            <h1 class="text-4xl font-bold text-gray-900">
                {{ $project->name }}
            </h1>

            <p class="text-gray-700 text-lg leading-relaxed">
                {{ $project->description }}
            </p>

            <p class="text-gray-600 text-lg italic">
                "{{ $project->motto }}"
            </p>

            <!-- Links Section -->
            <div class="flex flex-col sm:flex-row gap-4">
                @if($project->website)
                    <a href="{{ $project->website }}" 
                       class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                        <i class="fa-solid fa-link"></i>
                        <span>Visit Website</span>
                    </a>
                @else
                    <div class="px-6 py-3 bg-gray-200 text-gray-600 rounded-lg cursor-not-allowed">
                        No Website
                    </div>
                @endif

                @if($project->github_repo)
                    <a href="{{ $project->github_repo }}" 
                       class="flex items-center gap-2 px-6 py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition-colors duration-300">
                        <i class="fa-brands fa-github"></i>
                        <span>GitHub Repo</span>
                    </a>
                @else
                    <div class="px-6 py-3 bg-gray-200 text-gray-600 rounded-lg cursor-not-allowed">
                        No GitHub Repo
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

    <!-- Related Projects Section -->
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Related Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedProjects as $relatedProject)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex justify-center -mt-16">
                            <img class="w-20 h-20 border-4 border-white rounded-full shadow-lg"
                                 src="{{ asset('/storage/' . $relatedProject->image) }}"
                                 alt="{{ $relatedProject->name }}">
                        </div>
                        <h2 class="mt-4 text-xl font-bold text-gray-800">{{ $relatedProject->name }}</h2>
                        <p class="mt-2 text-gray-600 text-sm">
                            {{ $relatedProject->motto }}
                        </p>
                        <div class="flex items-center justify-between mt-6">
                            <a href="{{ route('projects.show', ['project' => $relatedProject->id]) }}"
                               class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                View Page
                            </a>
                            <span class="text-sm text-gray-600">
                                <i class="fa-regular fa-eye mr-1"></i>
                                {{ $relatedProject->view_count }} views
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Sponsors Section -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ __('Partners') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($sponsors as $sponsor)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <a href="{{ route('ad.visit', $sponsor->id) }}" target="_blank" class="block">
                            <div class="p-8">
                                <div class="flex items-center justify-center mb-6">
                                    <div class="w-24 h-24 rounded-full bg-gray-50 flex items-center justify-center p-4 border border-gray-100 shadow-sm">
                                        <img src="{{ asset('/storage/' . $sponsor->media) }}"
                                             alt="{{ $sponsor->title }}"
                                             class="w-full h-full object-contain filter contrast-125">
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">
                                    {{ $sponsor->title }}
                                </h3>
                                <p class="text-gray-600 text-center text-sm leading-relaxed">
                                    {{ $sponsor->description }}
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="text-center text-gray-500 italic col-span-full">No verified ads available.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection