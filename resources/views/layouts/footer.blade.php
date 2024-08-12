<footer class="bg-gray-900 text-white">
    <div class="container p-6 mx-auto">
        <div class="lg:flex">
            <div class="w-full -mx-6 lg:w-2/5">
                <div class="px-6">
                    <a href="/">
                        <text x="20" y="70" font-family="Arial, sans-serif" font-size="50" fill="#FFFFFF">Laraub</text>
                    </a>
                    
                    <div class="flex mt-6 -mx-2">
                        
                        <a href="https://www.facebook.com/profile.php?id=61562100927389&mibextid=ZbWKwL" 
                          class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.002 12.002c.001 4.919 3.578 9.108 8.436 9.879V14.892H7.902V12.002h2.54V9.802c-.113-1.043.243-2.082.972-2.835.729-.753 1.755-1.144 2.801-1.065.751.012 1.5.079 2.241.2v2.459h-1.264c-.435-.057-.872.086-1.189.39-.317.304-.479.736-.44 1.173v1.879h2.771l-.443 2.891H13.563V21.88c5.255-.83 8.94-5.629 8.385-10.92C21.392 5.67 16.793 1.74 11.481 2.017 6.168 2.294 2.003 6.682 2.002 12.002z"></path>
                            </svg>
                        </a>
                        
                        <a href="https://t.me/+SLIrTM8OJAg2Mzhk" class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Telegram">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C5.373 0 0 5.373 0 12C0 18.627 5.373 24 12 24C18.627 24 24 18.627 24 12C24 5.373 18.627 0 12 0ZM17.78 7.935L16.116 16.16C15.989 16.736 15.676 16.874 15.212 16.624L12.576 14.845L11.256 16.125C11.112 16.269 10.981 16.4 10.681 16.4L10.885 13.723L15.473 9.722C15.695 9.531 15.432 9.43 15.156 9.62L8.94 13.357L6.346 12.564C5.783 12.392 5.767 12.025 6.46 11.748L17.016 7.399C17.468 7.216 17.821 7.472 17.78 7.935Z"/>
                            </svg>
                        </a>
                        
                        
                        <a href="https://x.com/laraubcom?t=V9OelGUfUnduELmtOVgbPQ&s=08" class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Twitter">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.954 4.569a9.89 9.89 0 01-2.825.775 4.932 4.932 0 002.163-2.723 9.863 9.863 0 01-3.127 1.194 4.916 4.916 0 00-8.384 4.482A13.944 13.944 0 011.675 3.149a4.914 
                                4.914 0 001.524 6.573 4.9 4.9 0 01-2.229-.616v.061a4.913 4.913 0 
                                003.946 4.817 4.9 4.9 0 01-2.224.085 4.914 4.914 0 004.588 3.415 9.867 9.867 
                                0 01-6.1 2.104c-.39 0-.779-.023-1.17-.068a13.945 13.945 0 007.557 2.213c9.054 0 
                                14.002-7.496 14.002-13.986 0-.213-.005-.426-.014-.637a10.012 10.012 0 002.457-2.548l.002-.003z"></path>
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
            <form action="{{ route('subscribe') }}" method="POST" class="space-y-4">
                @csrf
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Subscribe to Our Newsletter</h2>
                    <p class="text-gray-600">Stay updated with our latest laravel packages!</p>
                </div>
                <div class="relative">
                    <label for="email" class="text-sm font-medium text-gray-700 block mb-1">
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 
                    border border-gray-300 rounded-md focus:ring-2
                     focus:ring-gray-500 focus:border-gray-500 text-gray-700 
                      transition duration-150 ease-in-out" 
                     placeholder="you@example.com">
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
            <p class="text-center text-gray-300 dark:text-gray-400">
                © Laraub 2020 - All rights reserved
            </p>
        </div>
    </div>
</footer>
