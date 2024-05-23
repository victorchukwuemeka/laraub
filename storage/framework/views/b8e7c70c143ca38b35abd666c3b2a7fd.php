<?php $__env->startSection('content'); ?>
<body class="bg-gray-100 h-screen flex items-center justify-center">
  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Welcome  back!</h1>
        <p class="py-6">Please log in to access your account. If you encounter any issues,
          feel free to contact our support team. Remember to keep your account credentials safe and secure.</p>

      </div>
      <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form action="<?php echo e(url('authenticate')); ?>" method="POST" class="card-body">
           <?php echo csrf_field(); ?>
          <div class="form-control">
           <label class="label">
             <span class="label-text">Email</span>
           </label>
           <input type="email" name="email" placeholder="email" id="email"
           class="input input-bordered <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
             value="<?php echo e(old('email')); ?>" required />
             <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

         </div>

         <div class="form-control">
           <label class="label">
             <span class="label-text">Password</span>
           </label>
           <input type="password" id="password" name="password" placeholder="password"
           class="input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input-bordered <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required />

           <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

         </div>
         <div class="form-control mt-6">
           <button type="submit"  class="btn btn-primary">Login</button>
         </div>
       </form>
     </div>
   </div>
 </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/auth/login.blade.php ENDPATH**/ ?>