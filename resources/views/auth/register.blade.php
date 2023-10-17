<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-3xl font-semibold mb-6 text-center">Register</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 transition duration-300">Register</button>
            </div>
        </form>
        <div class="mt-4 text-center">
            <p>Already have an account? <a href="{{ url('login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </div>
    </div>
</body>
</html>
