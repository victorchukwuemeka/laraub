@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl text-gray-800 font-semibold mb-6">Edit Profile</h1>

        <form action="{{ route('user.update', ['userId' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- User Information -->
            <div class="space-y-4">
                <!-- Name Input -->
                <div class="space-y-1">
                    <label for="name" class="text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                    class="block mt-1 w-full border rounded">
                </div>

                <!-- Email Input -->
                <div class="space-y-1">
                    <label for="email" class="text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                    class="block mt-1 w-full border rounded">
                </div>

                <!-- Add other user fields as needed -->
            </div>

            <!-- Profile Information -->
            <div class="space-y-4 mt-8">
                <!-- Job Title Input -->
                <div class="space-y-1">
                    <label for="job_title" class="text-sm text-gray-600">Job Title</label>
                    <input type="text" id="job_title" name="job_title" value="{{ old('job_title', optional($user->profile)->job_title) }}" class="block mt-1 w-full border rounded">
                </div>

                <!-- Company Input -->
                <div class="space-y-1">
                    <label for="company" class="text-sm text-gray-600">Company</label>
                    <input type="text" id="company" name="company" value="{{ old('company', optional($user->profile)->company) }}"
                    class="block mt-1 w-full border rounded">
                </div>

                <!-- Add other profile fields as needed -->

                <!-- Certification Input -->
                {{ optional($user->certificates)->get_laravel_certifications }}


                <div class="space-y-1">
                    <label for="certifications" class="text-sm text-gray-600">Certifications</label>
                    <input type="text" id="laravel_certifications" name="laravel_certifications"
                    value="{{ old('certifications', optional($user->certificates)->get_laravel_certifications()) }}"
                    class="block mt-1 w-full border rounded">
                </div>


                <!-- Project Input -->
                @foreach($user->projects as $project)
                  {{ $project->get_project_name()}}

                <div class="space-y-1">
                    <label for="projects" class="text-sm text-gray-600">Projects</label>
                    <textarea id="project_name" name="project_name" class="block mt-1 w-full border rounded h-32">
                      {{ old('projects', optional($project)->get_project_name()) }}
                    </textarea>
                </div>
                @endforeach

                <!-- Add other fields for certificates, projects, and other related models as needed -->
            </div>

            <!-- Submit Button -->
            <div class="mt-8">
                <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-6">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
