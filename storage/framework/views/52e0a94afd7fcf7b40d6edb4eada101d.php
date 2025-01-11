<footer class="bg-gray-900 text-white">
    <div class="container p-6 mx-auto">
        <div class="lg:flex">
            <div class="w-full -mx-6 lg:w-2/5">
                <div class="px-6">
                    <a href="/">
                        <text x="20" y="70" font-family="Arial, sans-serif" font-size="50" fill="#FFFFFF">Laraub</text>
                    </a>
                    <a href="<?php echo e(route('ads')); ?>">
                        <p class="max-w-sm mt-2 text-gray-200">
                            Advertising
                        </p>
                    </a>
                    <div class="flex mt-6 -mx-2">
                        <a href="https://t.me/+SLIrTM8OJAg2Mzhk" class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Telegram">
                            <!-- Updated SVG here -->
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61562100927389&mibextid=ZbWKwL" class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.002 12.002c.001 4.919 3.578 9.108 8.436 9.879V14.892H7.902V12.002h2.54V9.802c-.113-1.043.243-2.082.972-2.835.729-.753 1.755-1.144 2.801-1.065.751.012 1.5.079 2.241.2v2.459h-1.264c-.435-.057-.872.086-1.189.39-.317.304-.479.736-.44 1.173v1.879h2.771l-.443 2.891H13.563V21.88c5.255-.83 8.94-5.629 8.385-10.92C21.392 5.67 16.793 1.74 11.481 2.017 6.168 2.294 2.003 6.682 2.002 12.002z"></path>
                            </svg>
                        </a>
                        <a href="https://x.com/laraubcom?s=09" class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="X">
                            <!-- Updated SVG here -->
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                              </svg>
                          </a>
                    </div>
                </div>
            </div>

            <div class="mt-6 lg:mt-0 lg:flex-1">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">About</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Community</a>
                    </div>
                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Blog</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tech</a>
                    </div>
                    <div>
                        <h3 class="text-gray-300 uppercase">Contact</h3>
                        <span class="block mt-2 text-sm text-gray-400 hover:underline">09055948163</span>
                        <span class="block mt-2 text-sm text-gray-400 hover:underline">laraubblack@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow-md max-w-md mx-auto mt-6">
            <form action="<?php echo e(route('subscribe')); ?>" method="POST" class="space-y-4">
                <?php echo csrf_field(); ?>
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Subscribe to Our Newsletter</h2>
                    <p class="text-gray-600">Stay updated with our latest laravel packages!</p>
                </div>
                <div class="relative">
                    <label for="email" class="text-sm font-medium text-gray-700 block mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out" placeholder="you@example.com">
                </div>
                <button type="submit" class="w-full bg-gray-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-gray-700 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 
                transition duration-150 ease-in-out">
                    Subscribe
                </button>
            </form>
            <p class="mt-4 text-xs text-gray-500 text-center">
                By subscribing, you agree to our Terms of Service and Privacy Policy.
            </p>
        </div>

        <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

        <div>
            <p class="text-center text-gray-300 dark:text-gray-400">© Laraub 2023 - 2024 - All rights reserved</p>
        </div>
    </div>
</footer>
<?php /**PATH /home/victor/odinala/laraub/resources/views/layouts/footer.blade.php ENDPATH**/ ?>