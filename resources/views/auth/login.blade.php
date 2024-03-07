<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-80">

      <div class="mb-4 flex justify-center items-center">
            <a href="{{ url('/') }}" class="text-blue-500 hover:underline focus:outline-none focus:ring focus:ring-blue-200 transition duration-300">
                <h1 class="text-4xl font-semibold">Laraub</h1>
            </a>
        </div>

        <form action="{{ url('authenticate') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" name="email" id="email"
                    class="border rounded w-full py-2 px-3 @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" required autofocus>
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" name="password" id="password"
                    class="border rounded w-full py-2 px-3 @error('password') border-red-500 @enderror" required>
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-gray-600">Remember me</label>
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 transition duration-300">Login</button>
            </div>

        </form>

    </div>

</body>

</html>
