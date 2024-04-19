@extends('layouts.app')


@section('content')
<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="flex flex-col md:flex-row items-center justify-between px-6 py-4">
        <div class="flex items-center mb-4 md:mb-0">
            @if($profileImage)
            <img class="block md:h-24 md:w-24 rounded-full mr-4"
                src="{{ asset('/storage/'.$profileImage) }}" alt="User's Profile Picture" />
            @else
            <img src="{{ asset('/img/silicon.png') }}" alt="User's Profile Picture"
                class="w-16 h-16 rounded-full mr-4 md:mr-8">
            @endif
            <div>
                <h1 class="text-lg md:text-3xl font-bold">{{ $user->name }}</h1>
                <p class="text-gray-600">Email: {{ $user->email }}</p>
            </div>
        </div>
        <a href="{{ route('user.edit', ['userId' => $user->id]) }}"
            class="text-blue-500 hover:underline mt-2 md:mt-0">Edit Profile</a>
    </div>
</div>


<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
  <div class="px-6 py-4 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Profile</h2>
    @if($profile)
    <div class="grid grid-cols-2 gap-4">
        <div>
            <p class="text-gray-600"><span class="font-semibold">Job Title:</span></p>
            <p class="text-gray-800">{{ $profile->get_title }}</p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Company:</span></p>
            <p class="text-gray-800">{{ $profile->get_company() }}</p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Company Website:</span></p>
            <p class="text-blue-600 hover:underline">{{ $profile->get_company_website() }}</p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Your Location:</span></p>
            <p class="text-gray-800">{{ $profile->get_location() }}</p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Education:</span></p>
            <p class="text-gray-800">{{ $profile->get_education() }}</p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Availability:</span></p>
            <p class="text-gray-800">{{ $profile->get_availability() }}</p>
        </div>
        <div>
            <p class="text-gray-600"><span class="font-semibold">Social Media:</span></p>
            <p class="text-blue-600 hover:underline">{{ $profile->get_contact_preferences() }}</p>
        </div>
    </div>
    @endif
</div>

</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        @if($project && $project->get_project_name())
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $user->name }}'s Projects</h2>
        <div class="border-t border-gray-200"></div> <!-- Divider line -->
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Project Name:</p>
            <p class="text-gray-800">{{ $project->get_project_name() }}</p>
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Description:</p>
            <p class="text-gray-800">{{ $project->get_description() }}</p>
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Link:</p>
            <a href="{{ $project->get_link() }}" class="text-blue-500 hover:underline">{{ $project->get_link() }}</a>
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700 mb-2">Technologies Used:</p>
            <p class="text-gray-800">{{ $project->get_technologies_used() }}</p>
        </div>
        @else
        <a href="{{ route('projects') }}" class="text-lg font-semibold text-blue-500 hover:underline">
        Add Projects
       </a>
        @endif
    </div>
</div>


<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">
          {{ $user->name }}'s Work Experiences
        </h2>
        <div class="border-t border-gray-200"></div> <!-- Divider line -->
        @foreach($workExperiences as $experience)
        <div class="mt-4">
            <p class="text-lg font-semibold text-gray-700">
              {{ $experience->get_company() }}
            </p>
            <p class="text-gray-800">
              {{ $experience->get_position() }}
            </p>
            <div class="flex flex-wrap mt-2">
                <div class="w-full sm:w-1/2">
                    <p class="text-gray-600 font-semibold">
                      Start Date:
                    </p>
                    <p>
                      {{ $experience->get_start_date() }}
                    </p>
                </div>
                <div class="w-full sm:w-1/2">
                    <p class="text-gray-600 font-semibold">
                      End Date:
                    </p>
                    <p>
                      {{ $experience->get_end_date() }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-4">
            <a href="{{ route('experiences') }}" class="text-lg font-semibold text-blue-500 hover:underline">
              Add  Experiences
            </a>
        </div>
    </div>
</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">
          {{ $user->name }}'s Certificates
        </h2>
        <div class="border-t border-gray-200 mb-4"></div> <!-- Divider line -->
        <div class="flex items-center justify-between">
            <p class="text-lg font-semibold text-gray-700">
              No certificates available
            </p>
            <a href="{{ route('certificates') }}" class="text-lg font-semibold text-blue-500 hover:underline">
              Add  Certificates
            </a>
        </div>
    </div>
</div>


@endsection
