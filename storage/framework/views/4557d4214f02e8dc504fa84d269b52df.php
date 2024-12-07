<?php $__env->startSection('content'); ?>

    <section class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="text-center mb-6">

                <h1 class="text-4xl font-semibold">Register </h1>
            
        </div>

        <form action="<?php echo e(route('store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
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
                
                <!--password -->
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                    <input id="password" type="password" name="password"
                           class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                  dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                  focus:ring-blue-300 focus:ring-opacity-40 
                                  focus:outline-none focus:ring <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           oninput="validatePassword(this.value)">
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
                    <!-- password rules -->
                    <small class="text-gray-500 text-xs mt-2">
                        Password must contain:
                        <ul>
                            <li id="length" class="text-danger">At least 8 characters</li>
                            <li id="uppercase" class="text-danger">At least one uppercase letter</li>
                            <li id="lowercase" class="text-danger">At least one lowercase letter</li>
                            <li id="digit" class="text-danger">At least one digit</li>
                            <li id="special" class="text-danger">At least one special character</li>
                        </ul>
                    </small>
                </div>
                
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password_confirmation">Password Confirmation</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                           class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md
                                  dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400
                                  focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                </div>
                
                
                
                

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">Register</button>
            </div>
        </form>
    </section>



    <script>
        function validatePassword(password) {
            // Check length
            document.getElementById('length').className = password.length >= 8 ? 'text-success' : 'text-danger';
    
            // Check for uppercase letter
            document.getElementById('uppercase').className = /[A-Z]/.test(password) ? 'text-success' : 'text-danger';
    
            // Check for lowercase letter
            document.getElementById('lowercase').className = /[a-z]/.test(password) ? 'text-success' : 'text-danger';
    
            // Check for digit
            document.getElementById('digit').className = /[0-9]/.test(password) ? 'text-success' : 'text-danger';
    
            // Check for special character
            document.getElementById('special').className = /[@$!%*?&]/.test(password) ? 'text-success' : 'text-danger';
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/auth/register.blade.php ENDPATH**/ ?>