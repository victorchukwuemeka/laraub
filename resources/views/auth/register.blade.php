<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<section class="max-w-4xl pt-20 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
  <a href="{{ url('/') }}" class="text-blue-500 focus:outline-none focus:ring focus:ring-blue-200 transition duration-300 block text-center mb-4">
    <h1 class="text-4xl font-semibold">Laraub</h1>
  </a>

  <form action="{{ route('store')}}" method="POST">
    @csrf
    <div class="grid grid-cols-1 gap-6 mt-4 pt-4 sm:grid-cols-2">
      <div>
        <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
        <input id="username" name="name" type="text" value="{{ old('name') }}"
               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-200 rounded-md
                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring @error('name') border-red-500 @enderror">
        @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email Address</label>
        <input id="email" type="email" name="email"
               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-200 rounded-md
                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring @error('email') border-red-500 @enderror">
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
        <input id="password" type="password" name="password"
               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-200 rounded-md
                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring @error('password') border-red-500 @enderror">
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Password Confirmation</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-200 rounded-md
                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
      </div>
    </div>

    <div class="flex justify-end mt-6">
      <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">Save</button>
    </div>
  </form>
</section>
