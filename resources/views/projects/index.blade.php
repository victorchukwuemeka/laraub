@extends('layouts.app')

@section('content')
<div class="container mx-auto justify-center  px-4 py-8">
  <h1 class="text-3xl text-center  font-bold text-gray-800 mb-8">
     {{__("Laravel Packages Or Projects")}}
  </h1>

  @foreach($projects as $project)
  <div class="flex  justify-center items-center  pt-2 pr-4 py-0">
    <div class="flex-shrink-0 mr-4 shadow-md ">
      <img class="w-20 h-20 object-cover rounded-lg"
       src="{{ asset('/storage/' . $project->image) }}"
       alt="{{ $project->name }}">
    </div>
    <div class="py-0">
      <h2 class="text-xl font-semibold text-gray-800">
        {{ $project->name }}
      </h2>
      <p class="text-gray-600">
        {{ $project->motto }}
      </p>
      <div class="flex items-center space-x-4">
        <button class="px-4 py-2 text-gray-700 font-medium rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          More
        </button>
       <button class="px-4 py-2 text-gray-700 font-medium rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Comment
       </button>
       <a href="{{ $project->website }}" class="px-4 py-2 text-white font-medium rounded-full bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">
         Website
       </a>
     </div>
    </div>
  </div>
  @endforeach

  <div class="flex justify-end mt-8">
    @auth
    <a href="{{ route('projects.create') }}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
      Create Project
    </a>
    @else
    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 font-bold rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
      Sign Up to Create Project
    </a>
    @endauth
  </div>
</div>
@endsection
