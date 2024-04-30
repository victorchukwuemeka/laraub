@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">
      Latest Projects
    </h1>
     @foreach($projects as $project)
     <div class="flex justify-center ">
 <div class="flex flex-row">
   <div class="mr-4">
     <img class="w-16 h-16 object-cover"
          src="{{ asset('/storage/' . $project->image) }}"
          alt="{{ $project->name }}">
   </div>
   <div>
     <h1 class="text-xl font-semibold text-gray-800">
       {{ $project->name }}
     </h1>
     <p class="text-gray-600 mb-2">
       {{ $project->motto }}
     </p>
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
