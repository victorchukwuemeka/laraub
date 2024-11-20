@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('User List') }}</h2>
    
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($users as $user)
            <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg p-6">
                <div class="flex items-center">
                    <!-- Avatar Placeholder (rounded) -->
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>

                    <!-- User Details -->
                    <div class="flex-grow">
                        <p class="text-lg font-semibold text-gray-900">{{ $user->name }}</p>
                        <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        <p class="text-xs text-gray-400 mt-1">{{ __('Joined') }}: {{ $user->created_at->format('F j, Y, g:i a') }}</p>
                        <p class="text-xs text-gray-400 mt-1">{{__('last Visit')}} : {{ $user->last_visit }}</p>
                        <p>Last Visit: {{ auth()->user()->last_visit ? auth()->user()->last_visit->diffForHumans() : 'Never' }}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        <h2>VIsitors Count: {{ $visitorCount }}</h2>
    </div>
</div>
@endsection
