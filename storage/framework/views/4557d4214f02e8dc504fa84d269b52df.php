<?php $__env->startSection('content'); ?>
        <section class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="text-center mb-6">
                <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">Register</h1>
            </div>

            <form action="<?php echo e(route('store')); ?>" method="POST" id="registration-form">
                <?php echo csrf_field(); ?>
                <!-- Add a hidden input for the reCAPTCHA token -->
                <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Username Field -->
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
                        <input id="username" name="name" type="text" value="<?php echo e(old('name')); ?>"
                               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email Address</label>
                        <input id="email" type="email" name="email"
                               class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                      dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                      focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring
                                       <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                        <div class="relative">
                            <input id="password" type="password" name="password"
                                   class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                          dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                          focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   oninput="validatePassword(this.value)">
                            <!-- Toggle Password Visibility -->
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 mt-2 cursor-pointer"
                                  onclick="togglePasswordVisibility('password')">
                                <i id="togglePasswordIcon" class="fas fa-eye"></i>
                            </span>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
            console.log("Password:", password);

            // Check length
            const lengthValid = password.length >= 8;
            document.getElementById('length').className = lengthValid ? 'text-success' : 'text-danger';

            // Check for uppercase letter
            const uppercaseValid = /[A-Z]/.test(password);
            document.getElementById('uppercase').className = uppercaseValid ? 'text-success' : 'text-danger';

            // Check for lowercase letter
            const lowercaseValid = /[a-z]/.test(password);
            document.getElementById('lowercase').className = lowercaseValid ? 'text-success' : 'text-danger';

            // Check for digit
            const digitValid = /[0-9]/.test(password);
            document.getElementById('digit').className = digitValid ? 'text-success' : 'text-danger';

            // Check for special character
            const specialValid = /[@$!%*?&]/.test(password);
            document.getElementById('special').className = specialValid ? 'text-success' : 'text-danger';
        }

        // reCAPTCHA v3 integration
        document.getElementById('registration-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            console.log("Form submitted. Executing reCAPTCHA...");

            // Execute reCAPTCHA
            grecaptcha.ready(function () {
                console.log("reCAPTCHA is ready.");

                grecaptcha.execute('6LeBvLQqAAAAAEPzGf0PZAtWMILiYLlEvIOLnRda', { action: 'register' }).then(function (token) {
                    console.log("reCAPTCHA token generated:", token);

                    // Add the token to the form
                    document.getElementById('recaptcha_token').value = token;

                    // Submit the form
                    document.getElementById('registration-form').submit();
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/auth/register.blade.php ENDPATH**/ ?>