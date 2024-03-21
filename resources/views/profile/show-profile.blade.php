@extends('layouts.app')

@section('content')
<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
      @if($user->profile_image)
      <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0"
          src="{{ asset('/storage/'.$user->profile_image) }}"alt="Woman's Face" />
      @else
       <img src="{{ asset('/img/silicon.png') }}" alt="User's Profile Picture"
        class="w-8 h-8 rounded-full">
      @endif
        <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
        <p class="text-gray-600">Email: {{ $user->email }}</p>
        <a href="{{ route('user.edit', ['userId' => $user->id]) }}"
          class="text-blue-500 hover:underline mt-2 inline-block">Edit Profile</a>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold">Profile</h2>
        @if($profile)
        <p><span class="font-semibold">Job Title:</span> {{ $profile->get_title }}</p>
        <p><span class="font-semibold">Company:</span> {{ $profile->get_company() }}</p>
        <p><span class="font-semibold">Company Website:</span> {{ $profile->get_company_website() }}</p>
        <p><span class="font-semibold">Your Location:</span> {{ $profile->get_location() }}</p>
        <p><span class="font-semibold">Education:</span> {{ $profile->get_education() }}</p>
        <p><span class="font-semibold">Availability:</span> {{ $profile->get_availability() }}</p>
        <p><span class="font-semibold">Social Media:</span> {{ $profile->get_contact_preferences() }}</p>
        @endif
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        @if($project && $project->get_project_name())
        <h2 class="text-xl font-semibold">{{ $user->name }}: Projects</h2>
        <p><span class="font-semibold">Project Name:</span> {{ $project->get_project_name() }}</p>
        <p><span class="font-semibold">Description:</span> {{ $project->get_description() }}</p>
        <p><span class="font-semibold">Link:</span> {{ $project->get_link() }}</p>
        <p><span class="font-semibold">Technologies Used:</span> {{ $project->get_technologies_used() }}</p>
        @else
        <a href="{{ route('projects') }}" class="text-blue-500 hover:underline">Projects</a>
        @endif
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold">{{ $user->name }}: Work Experiences</h2>
        @foreach($workExperiences as $experience)
        <div class="mb-4">
            <p><span class="font-semibold">Company:</span> {{ $experience->get_company() }}</p>
            <p><span class="font-semibold">Position:</span> {{ $experience->get_position() }}</p>
            <p><span class="font-semibold">Start Date:</span> {{ $experience->get_start_date() }}</p>
            <p><span class="font-semibold">End Date:</span> {{ $experience->get_end_date() }}</p>
        </div>
        @endforeach
        <a href="{{ route('experiences') }}" class="text-blue-500 hover:underline">View More Experiences</a>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold">{{ $user->name }}: Skills</h2>
        @if($skills)
        <p><span class="font-semibold">Laravel Skills:</span> {{ $skills->get_laravel_skills() }}</p>
        <p><span class="font-semibold">Other Skills:</span> {{ $skills->get_other_skills() }}</p>
        @endif
        <a href="{{ route('skills') }}" class="text-blue-500 hover:underline">View Skills</a>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-xl font-semibold">{{ $user->name }}: Certificates</h2>
        <a href="{{ route('certificates') }}" class="text-blue-500 hover:underline">View Certificates</a>
    </div>
</div>
@endsection
