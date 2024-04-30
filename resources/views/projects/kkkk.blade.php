@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-16">
  <h1 class="text-3xl font-bold text-gray-800 mb-8">Latest Projects</h1>
  <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @foreach($projects as $project)
    <div class="rounded-lg shadow-md bg-white overflow-hidden transition duration-300 transform hover:shadow-lg hover:-translate-y-1">
      <a href="{{ $project->website }}" target="_blank"
        class="block relative">
        <img class="w-full h-48 object-cover"
        src="{{ asset('/storage/' . $project->image) }}"
        alt="{{ $project->name }}">
        <div class="absolute inset-0
        bg-gradient-to-r from-gray-100 opacity-0
        hover:opacity-50 transition-opacity"></div>
        <div class="absolute bottom-0 right-0 p-4 flex items-center">
          <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24">
            <path d="M14.6 5.6L17 8.1l-5 5-2.5-2.5 2.5-2.5-1.4-1.4L6 10.7l8.6 8.6L22 12l-2.4-2.4z"/>
          </svg>
        </div>
      </a>
      <div class="p-4">
        <h3 class="text-xl font-semibold text-gray-800">
          {{ $project->name }}</h3>
        <p class="text-gray-600 mb-2">{{ $project->motto }}</p>
      </div>
    </div>
    @endforeach
  </div>
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
