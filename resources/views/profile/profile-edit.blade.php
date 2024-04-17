@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl text-gray-800 font-semibold mb-6">Edit Profile</h1>

    <form action="{{ route('user.update', ['userId' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- User Information -->
        <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                <!-- Name Input -->
                <div>
                    <label for="name" class="text-sm text-gray-600 font-semibold">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="text-sm text-gray-600 font-semibold">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
                </div>
            </div>

            <!-- Company -->
            <div>
                <label for="company" class="text-sm text-gray-600 font-semibold">Company</label>
                <input type="text" name="company" id="company" value="{{ optional($user->profile)->get_company() ?? '' }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>

            <!-- Company Website -->
            <div>
                <label for="company_website" class="text-sm text-gray-600 font-semibold">Company Website</label>
                <input type="url" name="company_website" id="company_website" value="{{ optional($user->profile)->get_company_website() ?? '' }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>

            <!-- Education -->
            <div>
                <label for="education" class="text-sm text-gray-600 font-semibold">Education</label>
                <input type="text" name="education" id="education" value="{{ optional($user->profile)->get_education() ?? '' }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>

            <!-- Location -->
            <div>
                <label for="location" class="text-sm text-gray-600 font-semibold">Location</label>
                <input type="text" name="location" id="location" value="{{ optional($user->profile)->get_location() ?? '' }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>

            <!-- Availability -->
            <div>
                <label for="availability" class="text-sm text-gray-600 font-semibold">Availability</label>
                <textarea name="availability" id="availability" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">{{ optional($user->profile)->get_availability() ?? '' }}</textarea>
            </div>

            <!-- Contact Preferences -->
            <div>
                <label for="contact_preferences" class="text-sm text-gray-600 font-semibold">Contact Preferences (Social Media Link)</label>
                <input type="url" name="contact_preferences" id="contact_preferences" placeholder="https://twitter.com/your_username" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>

            <!-- Job Title -->
            <div>
                <label for="job_title" class="text-sm text-gray-600 font-semibold">Job Title</label>
                <input type="text" id="job_title" name="job_title" value="{{ old('job_title', optional($user->profile)->job_title) }}" class="block w-full mt-1 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="bg-blue-500 text-white rounded-full py-3 px-8 font-semibold hover:bg-blue-600 focus:outline-none focus:bg-blue-600 w-full md:w-auto">Save Changes</button>
        </div>
    </form>
</div>


@endsection
