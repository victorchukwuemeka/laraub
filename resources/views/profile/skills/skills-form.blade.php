<!-- resources/views/skills/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container h-screen mx-auto mt-8 flex justify-center items-center">
        <form action="{{ route('skills.store') }}" method="post" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="laravel_skills" class="block text-gray-700 text-sm font-bold mb-2">Laravel Skills</label>
                <textarea name="laravel_skills" id="laravel_skills" class="w-full px-3 py-2 border rounded-md" rows="4"></textarea>
            </div>

            <div class="mb-4">
                <label for="other_skills" class="block text-gray-700 text-sm font-bold mb-2">Other Skills</label>
                <textarea name="other_skills" id="other_skills" class="w-full px-3 py-2 border rounded-md" rows="4"></textarea>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
@endsection
