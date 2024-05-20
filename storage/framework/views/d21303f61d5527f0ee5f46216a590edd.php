<?php $__env->startSection('content'); ?>
<div class="bg-gray-900 text-white pt-0 py-8 sm:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl sm:text-5xl font-extrabold mb-4">Welcome To laraub</h1>
        <p class="text-lg sm:text-xl mb-8">
        Explore the various projects and packages available
         to enhance your productivity and efficiency. 
         These tools are designed to streamline your workflow, 
         allowing you to accomplish tasks more quickly and effectively. 
         By integrating these resources into your processes, 
        you can significantly reduce the time and effort required to achieve your goals.
        </p>
        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('projects.create')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
           make a post 
        </a>
        <?php else: ?> 
        <a href="<?php echo e(route('login')); ?>" 
           class="bg-blue-500 hover:bg-blue-600 text-white
            py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl 
            transition duration-300 ease-in-out inline-block">
           Login To Post your Package 
        </a>
        <?php endif; ?>
    </div>
</div>
  
<div class="mx-auto justify-center  px-4 py-8">
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
        <a href="<?php echo e(route('projects.edit', 
          ['project' => $project->id])); ?>">
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
      <?php echo e($project->id); ?>

    <form class="" action="<?php echo e(route('project.comments.store')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="laravel_projects_id" value="<?php echo e($project->id); ?>">
      <input type="hidden" name="parent_id" value="">
      <textarea name="content" id="comment"
              class="w-full bg-gray-200 focus:outline-none border-transparent
              rounded-lg px-4 py-2 text-gray-600"
              placeholder="Your comment..." required>
      </textarea>
      <button type="submit" class="mt-2 bg-blue-500 hover:bg-blue-700
              text-white font-bold py-2 px-4 rounded">
                Submit Commentoooo
       </button>
    </form>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/projects/index.blade.php ENDPATH**/ ?>