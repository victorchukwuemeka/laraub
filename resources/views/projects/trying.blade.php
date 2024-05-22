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

<div class="mx-auto justify-center  px-4 py-8">

  @foreach($projects as $project)
  <div class="flex  justify-center items-center  pt-2 pr-4 py-0">
    <div class="flex-shrink-0 mr-4 shadow-md ">
      <img class="w-20 h-20 object-cover rounded-lg"
       src="{{ asset('/storage/' . $project->image) }}"
       alt="{{ $project->name }}">
    </div>
    <div class="py-0">
      <h2 class="text-xl font-semibold text-gray-300">
        {{ $project->name }}
      </h2>

      <p class="text-gray-300">
        {{ $project->motto }}
      </p>
      <div class="flex items-center space-x-4">
        <a href="{{ route('projects.edit',
          ['project' => $project->id]) }}">
          <button class="px-4 py-2 text-gray-700
           font-medium rounded-full
          bg-gray-200 hover:bg-gray-300
          focus:outline-none focus:ring-2
          focus:ring-offset-2 focus:ring-blue-500">
            More
          </button>
        </a>

        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold
          py-2 px-4 rounded-full flex items-center transition duration-300">
          <i class="fa-regular fa-comment text-lg mr-2"></i>
          <span>Comment</span>
        </button>

       <a href="{{ $project->website }}" class="px-4 py-2 text-white font-medium
         rounded-full bg-blue-500 hover:bg-blue-700 focus:outline-none
          focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">
         <i class="fa-solid fa-link"></i>
       </a>
     </div>
    </div>
      {{ $project->id }}
    <!--<form class="hidden" action="{{ route('project.comments.store') }}" method="post">
      @csrf
      <input type="hidden" name="laravel_projects_id" value="{{ $project->id }}">
      <input type="hidden" name="parent_id" value="">
      <textarea name="content" id="comment"
              class="w-full bg-gray-200 focus:outline-none border-transparent
              rounded-lg px-4 py-2 text-gray-600"
              placeholder="Your comment..." required>
      </textarea>
      <button type="submit" class="mt-2 bg-blue-500 hover:bg-blue-700
              text-white font-bold py-2 px-4 rounded">
                Submit Commentoooo
       </button>
    </form>-->
  </div>
  @endforeach
</div>

@endsection
