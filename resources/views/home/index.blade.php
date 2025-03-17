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
               class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
                Make a Post
            </a>
        @else
            <a href="{{ route('login') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
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
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-2xl font-bold text-gray-900">Projects</h2>
            <a href="{{ route('project.index') }}" 
               class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                See All Projects →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="flex items-start justify-center">
                    <div class="w-full max-w-md px-4 py-4 bg-white rounded-lg shadow-lg">
                        <div class="flex justify-center -mt-16 md:justify-end">
                            <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                                 src="{{ asset('/storage/' . $project->image) }}"
                                 alt="{{ $project->name }}">
                        </div>

                        <h2 class="mt-2 text-xl font-semibold text-gray-900">{{ $project->name }}</h2>
                        <p class="mt-2 text-sm text-gray-700">
                            {{ $project->motto }}
                        </p>

                        <div class="flex items-center justify-between mt-4">
                            <div class="flex space-x-4">
                                <a href="#" class="flex items-center text-lg font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                    <i class="fa-regular fa-comment text-xl mr-2"></i>
                                    <span></span>
                                </a>
                                <a href="{{ route('projects.show', ['project' => $project->id]) }}" class="text-lg font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                    View Page
                                </a>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <a href="{{ $project->website ?? $project->github_repo }}" class="text-lg font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200">
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
</div>

   
<!-- Articles Section -->
<div class="py-10 px-5 sm:py-12">
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Articles</h2>
            <a href="{{ route('article.index') }}" 
               class="text-red-500 hover:text-red-700 font-medium transition-colors duration-200">
                See All Articles →
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <!-- Article Thumbnail -->
                    <img class="w-full h-48 object-cover" 
                    src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('/img/silicon.png') }}" 
                    alt="{{ $article->title }}">


                    <!-- Article Content -->
                    <div class="px-6 py-4">
                        <!-- Article Title -->
                        <a href="{{ route('article.show', $article->slug) }}">
                            <h3 class="font-bold text-gray-700 hover:text-red-500 text-xl mb-2">
                                {{ $article->title }}
                            </h3>
                        </a>

                        <!-- Article Excerpt -->
                        <a href="{{  route('article.show', kkkkkkk $article->slug) }}">
                            <p class="text-gray-700 text-base">
                                {{ mb_strimwidth(strip_tags($article->body), 0, 100, '...') }}
                            </p>
                        </a>
                    </div>



                    kkkkkkkkkkkkkkkk

                    <!-- Article Metadata -->
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                            {{ ucfirst($article->status) }}
                        </span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
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
                                    <img src="{{ asset('/storage/' . $sponsor->media) }}"
                                         alt="{{ $sponsor->title }}"
                                         class="w-full h-full object-contain filter contrast-125" />
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
        <div class="w-full flex flex-col items-center py-12">
            <div class="bg-gray-100 border border-gray-300 rounded-lg px-6 py-4 text-center shadow-md">
                <h3 class="text-lg font-semibold text-gray-700">Advertise with Us</h3>
                <p class="text-gray-500 mt-2">
                    No verified ads are currently available.  
                    <br>Boost your brand by placing your ad here!
                </p>
                <a href="{{ route('ads') }}" 
                   class="mt-4 inline-block px-4 py-2 text-sm font-medium text-white bg-red-500 hover:bg-red-600 rounded-lg transition duration-200">
                    Get Started
                </a>
            </div>
        </div>
        
        @endforelse
    </div>
</div>

@endsection