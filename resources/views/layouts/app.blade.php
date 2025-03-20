<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laraub') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Trix Editor -->
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <!-- Fonts (Pick One) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fd683e659d.js" crossorigin="anonymous"></script>

    <!-- Google reCAPTCHA (Securely Loaded) -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    

    <style>
      /* Custom CSS for password validation feedback */
      .text-danger { color: red; }
      .text-success { color: green; }
    </style>
</head>
<body class="min-h-screen font-sans antialiased flex flex-col">
    @include('layouts.nav2')

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
