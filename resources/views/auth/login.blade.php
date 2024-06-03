@extends('layouts.app')

@section('content')
<body class="bg-gray-100 h-screen  mt-16 flex items-center justify-center">
  <div class="w-full m-16  max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden md:max-w-lg">
    <div class="md:flex">
      <div class="w-full p-6">
        <div class="text-center mb-6">
          <h1 class="text-3xl font-bold text-gray-900">Welcome Back!</h1>
          <p class="text-gray-600">Please log in to access your account.</p>
        </div>
        <form action="{{ url('authenticate') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label for="email" class="block text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" placeholder="email@example.com" value="{{ old('email') }}" required
                   class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
            @error('email')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" placeholder="********" required
                   class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
            @error('password')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
              <input type="checkbox" id="remember_me" name="remember_me" class="h-4 w-4 text-blue-600">
              <label for="remember_me" class="ml-2 text-gray-700">Remember Me</label>
            </div>
            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
          </div>
          <div class="mb-6">
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
          </div>
        </form>
        <div class="text-center">
          <p class="text-gray-600">Don't have an account? <a href="#" class="text-blue-600 hover:underline">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
