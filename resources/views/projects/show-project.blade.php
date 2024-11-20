@extends('layouts.app')

@section('content')
    <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
            <div class="lg:max-w-lg">
                <h1 class="lg:text-5xl text-3xl font-semibold  text-gray-800  lg:text-4xl">
                    {{ $project->name }}
                </h1>
                <p class="mt-4 text-gray-800 ">
                    {{ $project->description }}.
                </p>
                <p class="mt-4 text-gray-700">
                  {{ $project->motto }}
                </p>
                <div class="grid gap-6 mt-8 sm:grid-cols-2">
                    @if($project->website)
                        <a href="{{ $project->website }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                            <i class="fa-solid fa-link"></i>
                            visit site
                        </a>
                    @else
                        <h2>{{__('No Website')}}</h2>
                    @endif

                    @if($project->github_repo)
                        <a href="{{ $project->github_repo }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                            <i class="fa-brands fa-github"></i>
                            GitHub Repository
                        </a>
                    @else
                        <h2 class="text-gray-600 text-2xl">{{ __('No gitHub repo')}}</h2>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md"
                 src="{{ asset('/storage/' . $project->image) }}"
                 alt="{{ $project->name }}">
        </div>
    </div>

    <div class="container mx-auto mt-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Related Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach($relatedProjects as $relatedProject)
                <div class="flex items-start mb-2  mt-8 justify-center">
                    <div class="w-full max-w-md px-4 py-4 bg-white rounded-lg shadow-lg">
                        <div class="flex justify-center -mt-16 md:justify-end">
                            <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400"
                                alt="{{ $relatedProject->name }}"
                                src="{{ asset('/storage/' . $relatedProject->image) }}">
                        </div>
    
                        <h2 class="mt-2 text-xl font-semibold text-gray-900  md:mt-0">{{ $relatedProject->name }}</h2>
    
                        <p class="mt-2 text-sm text-gray-700">
                            {{ $relatedProject->motto }}
                        </p> 
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex space-x-4">
                                <a href="#" class="flex items-center text-lg font-medium text-blue-600 dark:text-blue-300 hover:text-blue-800 dark:hover:text-blue-500 transition-colors duration-200" tabindex="0" role="link">
                                    <i class="fa-regular fa-comment text-xl mr-2"></i>
                                    <span></span>
                                </a>
                                <a href="{{ route('projects.show', ['project' => $relatedProject->id]) }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                                    view page
                                </a>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <a href="{{ $relatedProject->website ?? $relatedProject->github_repo }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                                    <i class="fa-solid fa-link"></i>
                                    visit site
                                </a>
                                <span class="text-sm text-gray-600">
                                    <i class="fa-regular fa-eye text-gray-600 mr-1"></i>
                                    {{ $relatedProject->view_count }} views
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection
