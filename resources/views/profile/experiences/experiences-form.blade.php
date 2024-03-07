<!-- resources/views/work_experience/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container mx-auto mt-8">
        <form action="{{ route('work_experience.store') }}" method="post" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                <input type="text" name="position" id="position" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company</label>
                <input type="text" name="company" id="company" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                <input type="date" name="end_date" id="end_date" class="w-full px-3 py-2 border rounded-md">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
@endsection
