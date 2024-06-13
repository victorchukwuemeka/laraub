@extends('layouts.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Verify Ads</h1>
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($ads as $ad)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $ad->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $ad->description }}</p>
                    <p class="text-gray-500">Submitted by: {{ $ad->user->name }}</p>
                </div>
                <div class="p-4">
                    <a href="{{ $ad->url }}" target="_blank">
                        <img src="{{ asset('/storage/'. $ad->media) }}" alt="{{ $ad->title }}" class="w-full h-48 object-cover">
                    </a>
                </div>
                <div class="p-4">
                    <form action="{{ route('admin.verify-ad', $ad->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                            Verify
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
