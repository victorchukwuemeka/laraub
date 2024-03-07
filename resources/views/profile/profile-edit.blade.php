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


            <!-- Company -->
            <div class="mb-4">
                <label for="company" class="block text-sm font-semibold text-gray-600">Company</label>
                <input type="text" name="company" id="company" value="{{ optional($user->profile)->get_company() ?? '' }}" class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <!-- Company Website -->
            <div class="mb-4">
                <label for="company_website" class="block text-sm font-semibold text-gray-600">
                  Company Website
                </label>
                <input type="url" name="company_website" id="company_website"
                value="{{ optional($user->profile)->get_company_website() ?? '' }}"
                class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <!-- Education -->
            <div class="mb-4">
                <label for="education" class="block text-sm font-semibold text-gray-600">Education</label>
                <input type="text" name="education" id="education" value="{{ optional($user->profile)->get_education() ?? '' }}" class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <!-- Location -->
            <div class="mb-4">
                <label for="location" class="block text-sm font-semibold text-gray-600">
                  Location
                </label>
                <input type="text" name="location" id="location"
                 value="{{ optional($user->profile)->get_location() ?? '' }}" class="w-full border rounded px-3 py-2 mt-1">

            </div>

            <!-- Availability -->
            <div class="mb-4">
                <label for="availability" class="block text-sm font-semibold text-gray-600">
                  Availability
                </label>
                <textarea name="availability" id="availability"
                 class="w-full border rounded px-3 py-2 mt-1">
                 {{ optional($user->profile)->get_availability() ?? '' }}
               </textarea>
            </div>


           <div class="mb-4">
            <label for="contact_preferences" class="block text-sm font-semibold text-gray-600">
              Contact Preferences (Social Media Link)
            </label>
            <input type="url" name="contact_preferences" id="contact_preferences"
            placeholder="https://twitter.com/your_username" class="w-full border rounded px-3 py-2 mt-1">
           </div>

            <!-- Profile Information -->
            <div class="space-y-4 mt-8">
                <!-- Job Title Input -->
                <div class="space-y-1">
                    <label for="job_title" class="text-sm text-gray-600">
                      Job Title
                    </label>
                    <input type="text" id="job_title" name="job_title"
                     value="{{ old('job_title', optional($user->profile)->job_title) }}"
                     class="block mt-1 w-full border rounded">
                </div>



            <!-- Submit Button -->
            <div class="mt-8">
                <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-6">
                  Save Changes
                </button>
            </div>
        </form>
    </div>
@endsection
