@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-16">
  <div class="flex flex-col lg:flex-row gap-8">
    <div class="w-full lg:w-1/2">
      <img class="rounded-lg shadow-md object-cover h-full w-full" src="{{ $project->image }}" alt="{{ $project->name }}">
    </div>
    <div class="w-full lg:w-1/2">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $project->name }}</h1>
      <p class="text-gray-700 mb-4 leading-loose">{!! $project->description !!}</p>
      @if ($project->website)
        <a href="{{ $project->website }}" target="_blank" class="text-indigo-500 hover:text-indigo-700 underline">Project Website</a>
      @endif
      @if ($project->github_repo)
        <br>
        <a href="{{ $project->github_repo }}" target="_blank" class="text-indigo-500 hover:text-indigo-700 underline">GitHub Repo</a>
      @endif
    </div>
  </div>
</div>
@endsection
