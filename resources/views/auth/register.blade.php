@extends('layouts.app')
@section('content')
    <section class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="text-center mb-6">
            <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">Register</h1>
        </div>

        <form action="{{ route('store') }}" method="POST">
            @csrf
            <!-- Add a hidden input for the reCAPTCHA token -->
            <input type="hidden" name="recaptcha_token" id="recaptcha_token">

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <!-- Username Field -->
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
                    <input id="username" name="name" type="text" value="{{ old('name') }}"
                           class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                  dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                  focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email Address</label>
                    <input id="email" type="email" name="email"
                           class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                  dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                  focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring
                                   @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                    <div class="relative">
                        <input id="password" type="password" name="password"
                               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring @error('password') border-red-500 @enderror"
                               oninput="validatePassword(this.value)">
                        <!-- Toggle Password Visibility -->
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 mt-2 cursor-pointer"
                              onclick="togglePasswordVisibility('password')">
                            <i id="togglePasswordIcon" class="fas fa-eye"></i>
                        </span>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <!-- Password Rules -->
                    <small class="text-gray-500 text-xs mt-2">
                        Password must contain:
                        <ul>
                            <li id="length" class="text-danger">At least 8 characters</li>
                            <li id="uppercase" class="text-danger">At least one uppercase letter</li>
                            <li id="lowercase" class="text-danger">At least one lowercase letter</li>
                            <li id="digit" class="text-danger">At least one digit</li>
                            <li id="special" class="text-danger">At least one special character (@$!%*?&)</li>
                        </ul>
                    </small>
                </div>

                <!-- Password Confirmation Field -->
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password_confirmation">Confirm Password</label>
                    <div class="relative">
                        <input id="password_confirmation" type="password" name="password_confirmation"
                               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        <!-- Toggle Password Visibility -->
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 mt-2 cursor-pointer"
                              onclick="togglePasswordVisibility('password_confirmation')">
                            <i id="togglePasswordConfirmationIcon" class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end mt-6">
                <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">Register</button>
            </div>
        </form>
    </section>

    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const icon = document.getElementById(`toggle${fieldId.charAt(0).toUpperCase() + fieldId.slice(1)}Icon`);

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Function to validate password and update visual feedback
        function validatePassword(password) {
            console.log("Password:", password); // Debugging line

            // Check length
            const lengthValid = password.length >= 8;
            document.getElementById('length').className = lengthValid ? 'text-success' : 'text-danger';
            console.log("Length valid:", lengthValid); // Debugging line

            // Check for uppercase letter
            const uppercaseValid = /[A-Z]/.test(password);
            document.getElementById('uppercase').className = uppercaseValid ? 'text-success' : 'text-danger';
            console.log("Uppercase valid:", uppercaseValid); // Debugging line

            // Check for lowercase letter
            const lowercaseValid = /[a-z]/.test(password);
            document.getElementById('lowercase').className = lowercaseValid ? 'text-success' : 'text-danger';
            console.log("Lowercase valid:", lowercaseValid); // Debugging line

            // Check for digit
            const digitValid = /[0-9]/.test(password);
            document.getElementById('digit').className = digitValid ? 'text-success' : 'text-danger';
            console.log("Digit valid:", digitValid); // Debugging line

            // Check for special character
            const specialValid = /[@$!%*?&]/.test(password);
            document.getElementById('special').className = specialValid ? 'text-success' : 'text-danger';
            console.log("Special character valid:", specialValid); // Debugging line
        }

         // reCAPTCHA v3 integration
         document.getElementById('registration-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            // Execute reCAPTCHA
            grecaptcha.ready(function () {
                grecaptcha.execute('6LeBvLQqAAAAAEPzGf0PZAtWMILiYLlEvIOLnRda', { action: 'register' }).then(function (token) {
                    // Add the token to the form
                    document.getElementById('recaptcha_token').value = token;

                    // Submit the form
                    document.getElementById('registration-form').submit();
                });
            });
        });
    </script>
@endsection


