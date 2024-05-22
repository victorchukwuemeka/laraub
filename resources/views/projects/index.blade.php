@extends('layouts.app')

@section('content')

<div class="bg-gray-900 text-white pt-0 py-8 sm:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl sm:text-5xl font-extrabold mb-4">Welcome To laraub</h1>
        <p class="text-lg sm:text-xl mb-8">
        Explore the various projects and packages available
         to enhance your productivity and efficiency.
         These tools are designed to streamline your workflow,
         allowing you to accomplish tasks more quickly and effectively.
         By integrating these resources into your processes,
        you can significantly reduce the time and effort required to achieve your goals.
        </p>
        @auth
        <a href="{{ route('projects.create') }}"
          class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3
          sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
           make a post
        </a>
        @else
        <a href="{{ route('login') }}"
           class="bg-blue-500 hover:bg-blue-600 text-white
            py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl
            transition duration-300 ease-in-out inline-block">
           Login To Post your Package
        </a>
        @endauth
    </div>
</div>
 @foreach($projects as $project)
<div class="flex items-start justify-center pt-16 pb-4 bg-gray-100">
    <div class="w-full max-w-md px-8 py-4 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400"
            alt="{{ $project->name }}"
            src="{{ asset('/storage/' . $project->image) }}">
        </div>

        <h2 class="mt-2 text-xl font-semibold text-gray-800 dark:text-white md:mt-0">{{ $project->name }}</h2>

        <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">
            {{ $project->motto }}
         </p>
         <div class="flex items-center justify-between mt-4">
             <div class="flex space-x-4">
               <a href="#" class="flex items-center text-lg font-medium text-blue-600 dark:text-blue-300 hover:text-blue-800 dark:hover:text-blue-500 transition-colors duration-200" tabindex="0" role="link">
                 <i class="fa-regular fa-comment text-xl mr-2"></i>
                 <span>Comment</span>
               </a>

                 <a href="{{ route('projects.edit',['project' => $project->id]) }}"
                   class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                   more
                 </a>
             </div>
             <a href="{{ $project->website }}" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                <i class="fa-solid fa-link"></i>
               visit site
             </a>
         </div>
    </div>
</div>
@endforeach


@endsection
