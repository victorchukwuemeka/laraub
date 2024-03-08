<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/context-menu.js') }}" defer></script>

    @vite('resources/css/app.css')


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'laraub') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bo
    otstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->


    <!-- Scripts -->



</head>
<body class="font-sans bg-gray-100">

  <div id="app">
          @include('layouts.nav2')
            <main class="space-y-5">
            @yield('content')
         </main>
  </div>

    <div class="">
      @include('layouts.footer')
    </div>
</body>
</html>
