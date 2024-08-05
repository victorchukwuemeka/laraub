<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
  <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <img class="w-full h-64 object-cover object-center"
     src="<?php echo e(asset('/storage/' . $project->image)); ?>" alt="<?php echo e($project->name); ?>">
    <div class="p-6">
      <h1 class="text-3xl font-semibold text-gray-800 mb-2">
        <?php echo e($project->name); ?>

      </h1>
      <p class="text-gray-600 mb-4">
        <?php echo e($project->description); ?>

      </p>
      <div class="flex items-center mb-4">
        <svg class="w-6 h-6 fill-current text-gray-600 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 16.9c-3.14-.38-5.62-2.86-6-6 .38-3.14 2.86-5.62 6-6 3.14.38 5.62 2.86 6 6-.38 3.14-2.86 5.62-6 6zm6.82-7.98c-.25-.31-.61-.47-1-.48-.36-.01-.68.12-.96.35l-4.04 3.03-2.27-2.27c-.31-.31-.85-.09-.85.36v4.58c0 .28.22.5.5.5h.25c.28 0 .5-.22.5-.5v-3.47l2.36 2.36c.2.2.51.2.71 0l4.54-4.54c.26-.26.29-.68.04-.96z"/>
        </svg>
        <a href="<?php echo e($project->website); ?>" class="text-blue-500 hover:underline"><?php echo e($project->website); ?></a>
      </div>
      <div class="flex items-center">
        <svg class="w-6 h-6 fill-current text-gray-600 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 16.9c-3.14-.38-5.62-2.86-6-6 .38-3.14 2.86-5.62 6-6 3.14.38 5.62 2.86 6 6-.38 3.14-2.86 5.62-6 6zm6.82-7.98c-.25-.31-.61-.47-1-.48-.36-.01-.68.12-.96.35l-4.04 3.03-2.27-2.27c-.31-.31-.85-.09-.85.36v4.58c0 .28.22.5.5.5h.25c.28 0 .5-.22.5-.5v-3.47l2.36 2.36c.2.2.51.2.71 0l4.54-4.54c.26-.26.29-.68.04-.96z"/>
        </svg>
        <a href="<?php echo e($project->github_repo); ?>" class="text-gray-600 hover:underline"><?php echo e($project->github_repo); ?></a>
      </div>
       <?php echo e($project->github_repo); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laraub/resources/views/projects/edit.blade.php ENDPATH**/ ?>