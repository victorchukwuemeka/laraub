<!-- Header -->
<header class="bg-blue-900 bg-opacity-70 text-white py-4 sticky top-0">
    <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
        <div class="flex items-center justify-between">
            <a href="/" class="text-3xl font-bold text-white hover:text-blue-300 transition duration-300 ease-in-out transform hover:scale-105">
                laraub
            </a>
            <button id="mobile-menu-toggle" class="sm:hidden block text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <nav class="hidden sm:flex sm:space-x-4 mt-2 sm:mt-0" id="mobile-menu">
            <a href="{{route('home') }}" class="text-white hover:text-blue-300 transition 
               duration-300 ease-in-out">
               Home
            </a>
            
            @guest {{-- Check if the user is a guest (not authenticated) --}}
                <a href="{{ url('login') }}" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">Login</a>
                <a href="{{ url('register') }}" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">Register</a>
            @else {{-- If the user is authenticated, display the logout link --}}
                <a href="{{ url('profile', Auth::user()->id) }}" class="text-white hover:text-gray-300 font-medium">

                    {{ Auth::user()->name }}
                </a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white hover:text-blue-300 transition duration-300 ease-in-out">
                        Logout
                    </button>
                </form>
            @endguest
        </nav>
    </div>
</header>

<script>
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
</script>
