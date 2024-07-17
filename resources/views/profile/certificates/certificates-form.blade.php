<!-- resources/views/certifications/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container mx-auto mt-8">
        <form action="{{ route('certifications.store') }}" method="post" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="laravel_certifications" class="block text-gray-700 text-sm font-bold mb-2">Laravel Certifications</label>
                <input type="text" name="laravel_certifications" id="laravel_certifications" class="w-full px-3 py-2 border rounded-md" placeholder="Enter Laravel certifications">
            </div>

            <div class="mb-4">
                <label for="other_certifications" class="block text-gray-700 text-sm font-bold mb-2">Other Certifications</label>
                <input type="text" name="other_certifications" id="other_certifications" class="w-full px-3 py-2 border rounded-md" placeholder="Enter other certifications">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
@endsection
