@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Payment for Ad</h1>
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-2">{{ $ad->title }}</h2>
        <h3 class="text-xl text-center mb-8">Amount Due:
             <span class="font-semibold text-green-600">$20.00</span></h3>
        
        @if($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                <p class="font-bold">Please correct the following errors:</p>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ads.payment.process', $ad->id) }}" method="POST" 
            class="bg-white shadow-2xl rounded-lg p-8">
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Full Name 
                    </label>
                    <input type="text" id="name" name="name" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                     focus:border-indigo-300 focus:ring focus:ring-indigo-200
                      focus:ring-opacity-50" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200
                     focus:ring-opacity-50" required>
                </div>
                <input type="hidden" name="amount" value="2000"/>
            </div>
            
            <div class="mt-8">
                <button type="submit" class="w-full flex justify-center py-3 px-4 border
                 border-transparent rounded-md shadow-sm text-sm font-medium
                  text-white bg-gray-600 hover:bg-gray-700 focus:outline-none 
                  focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition
                   duration-150 ease-in-out">
                    Proceed to Payment
                </button>
            </div>
        </form>
        
        <p class="mt-6 text-center text-sm text-gray-500">
            By proceeding, you agree to our 
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                Terms of Service\
            </a> and 
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                Privacy Policy
            </a>.
        </p>
    </div>
</div>
@endsection