<header class="bg-gradient-to-r from-blue-900 to-indigo-900 text-white py-4 sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4">
       <div class="flex flex-col sm:flex-row justify-between items-center">
           <div class="flex items-center justify-between w-full sm:w-auto">
               <a href="/" class="text-3xl font-bold text-white hover:text-blue-300 transition duration-300 ease-in-out transform hover:scale-105">
                   laraub
               </a>
               <button id="mobile-menu-toggle" class="sm:hidden block text-white focus:outline-none hover:text-blue-300 transition-colors duration-200">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                   </svg>
               </button>
           </div>
           <form action="<?php echo e(url('search')); ?>" method="GET" class="relative w-full max-w-md mx-auto mt-4 sm:mt-0">
               <input type="text" name="query" class="w-full bg-white bg-opacity-20 text-white rounded-full px-5 py-2.5 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:bg-white focus:bg-opacity-30 transition-all duration-200 ease-in-out placeholder-gray-300" placeholder="Search...">
               <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-300 hover:text-white transition-colors duration-200 ease-in-out">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                   </svg>
               </button>
           </form>
  
  
          
           <nav class="hidden sm:flex sm:space-x-6 mt-4 sm:mt-0 w-full sm:w-auto" id="mobile-menu">
               <a href="<?php echo e(route('ads')); ?>" class="text-white hover:text-blue-300 transition duration-300 ease-in-out font-medium">
                   <?php echo e(__("Advert")); ?>

               </a>
               <?php if(auth()->guard()->guest()): ?>
                   <a href="<?php echo e(url('login')); ?>" class="text-white hover:text-blue-300 transition duration-300 ease-in-out font-medium">Login</a>
                   <a href="<?php echo e(url('register')); ?>" class="text-white hover:text-blue-300 transition duration-300 ease-in-out font-medium">Register</a>
               <?php else: ?>
                   <a href="<?php echo e(url('profile', Auth::user()->id)); ?>" class="text-white hover:text-blue-300 transition duration-300 ease-in-out font-medium">
                       <?php echo e(Auth::user()->name); ?>

                   </a>
                   <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                       <?php echo csrf_field(); ?>
                       <button type="submit" class="text-white hover:text-blue-300 transition duration-300 ease-in-out font-medium">
                           Logout
                       </button>
                   </form>
               <?php endif; ?>
           </nav>
       </div>
    </div>
   </header>
   
   <script>
   const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
   const mobileMenu = document.getElementById('mobile-menu');
   mobileMenuToggle.addEventListener('click', function () {
       mobileMenu.classList.toggle('hidden');
       mobileMenu.classList.toggle('flex');
       mobileMenu.classList.toggle('justify-center');
       mobileMenu.classList.toggle('space-x-4');
       mobileMenu.classList.toggle('mt-4');
       mobileMenu.classList.toggle('overflow-x-auto');
       mobileMenu.classList.toggle('pb-2');
   });
   </script><?php /**PATH /home/victor/odinala/laraub/resources/views/layouts/nav2.blade.php ENDPATH**/ ?>