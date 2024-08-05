<?php $__env->startSection('content'); ?>
<div class="container mx-auto justify-center  px-4 py-8">
  <h1 class="text-3xl text-center  font-bold text-gray-300 mb-8">
     <?php echo e(__("Laravel Packages Or Projects")); ?>

  </h1>

  <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="flex  justify-center items-center  pt-2 pr-4 py-0">
    <div class="flex-shrink-0 mr-4 shadow-md ">
      <img class="w-20 h-20 object-cover rounded-lg"
       src="<?php echo e(asset('/storage/' . $project->image)); ?>"
       alt="<?php echo e($project->name); ?>">
    </div>
    <div class="py-0">
      <h2 class="text-xl font-semibold text-gray-300">
        <?php echo e($project->name); ?>

      </h2>
      <p class="text-gray-300">
        <?php echo e($project->motto); ?>

      </p>
      <div class="flex items-center space-x-4">
        <a href="<?php echo e(route('projects.edit', ['project' => $project->id])); ?>">
          <button class="px-4 py-2 text-gray-700
           font-medium rounded-full
          bg-gray-200 hover:bg-gray-300
          focus:outline-none focus:ring-2
          focus:ring-offset-2 focus:ring-blue-500">
            More
          </button>
        </a>

        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold
          py-2 px-4 rounded-full flex items-center transition duration-300">
          <i class="fa-regular fa-comment text-lg mr-2"></i>
          <span>Comment</span>
        </button>

       <a href="<?php echo e($project->website); ?>" class="px-4 py-2 text-white font-medium
         rounded-full bg-blue-500 hover:bg-blue-700 focus:outline-none
          focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">
         <i class="fa-solid fa-link"></i>
       </a>
     </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="flex justify-end mt-8">
    <?php if(auth()->guard()->check()): ?>
    <a href="<?php echo e(route('projects.create')); ?>" class="inline-flex items-center px-4 py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
      Create Project
    </a>
    <?php else: ?>
    <a href="<?php echo e(route('login')); ?>" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 font-bold rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
      Sign Up to Create Project
    </a>
    <?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/projects/index.blade.php ENDPATH**/ ?>