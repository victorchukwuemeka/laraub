@extends('layouts.app')

@section('content')
    <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
            <div class="lg:max-w-lg">
                <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">
                    {{ $project->name }}
                </h1>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    {{ $project->description }}.
                </p>
                <p>
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
                   <h2>{{ __('No gitHub repo')}}</h2>
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
@endsection
