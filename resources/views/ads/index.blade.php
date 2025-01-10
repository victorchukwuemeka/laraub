@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Your Ads</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="flex justify-end mb-4">
        <a href="{{ route('create.ads') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Ad
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-4 text-left">Title</th>
                    <th class="py-3 px-4 text-left">Description</th>
                    <th class="py-3 px-4 text-left">Media</th>
                    <th class="py-3 px-4 text-left">Status</th>
                    <th class="py-3 px-4 text-left">Payment</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ads as $ad)
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="py-3 px-4">{{ $ad->title }}</td>
                        <td class="py-3 px-4">{{ $ad->description }}</td>
                        <td class="py-3 px-4">
                            @if($ad->media_type == 'image')
                                <img src="{{ asset('/storage/'. $ad->media) }}" alt="Ad Image" 
                                class="w-20 h-20 object-cover rounded">
                            @elseif($ad->media_type == 'video')
                                <video controls class="w-20 h-20 object-cover rounded">
                                    <source src="{{ $ad->media_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($ad->verified)
                                <span 
                                class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-green-500 text-white">
                                    Verified
                                </span>
                            @else
                                <span 
                                class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-yellow-500 text-black">
                                    Pending Verification
                                </span>
                                <p class="text-xs text-gray-500 mt-1">
                                    Complete payment to verify your ad.
                                </p>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($ad->payment_status == 'paid')
                                <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-green-500 text-white">
                                    Paid
                                </span>
                            @else
                                <a href="{{ route('ads.payment', $ad->id) }}" 
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Pay Now
                                </a>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-4 px-4 text-center text-gray-500">
                            You have no ads. Start by creating a new one!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($ads->isNotEmpty())
        <div class="bg-blue-50 border-l-4 border-blue-400 text-blue-700 p-4 mt-4">
            <p class="text-sm">
                <strong>Note:</strong> Ads with a "Pending Verification" status require payment to be verified. Once payment is complete, your ad will be reviewed and verified promptly.
            </p>
        </div>
    @endif
</div>
@endsection
