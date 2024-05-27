<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 relative">
                <div class="mb-4">
                    <img class="w-full h-48 object-cover rounded-md" src="<?php echo e(asset('/storage/'.$project->image)); ?>" alt="<?php echo e($project->name); ?>">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white"><?php echo e($project->name); ?></h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300"><?php echo e($project->motto); ?></p>
                <p class="mt-2 text-gray-600 dark:text-gray-300"><?php echo e($project->description); ?></p>
                <div class="mt-4">
                    <a href="<?php echo e($project->website); ?>" class="text-blue-600 dark:text-blue-400 hover:underline" target="_blank">Website</a>
                </div>
                <div class="mt-2">
                    <a href="<?php echo e($project->github_repo); ?>" class="text-blue-600 dark:text-blue-400 hover:underline" target="_blank">GitHub Repo</a>
                </div>
                <form action="<?php echo e(route('admin.projects.destroy', $project->id)); ?>" method="POST" class="absolute top-2 right-2">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/admin/projects/index.blade.php ENDPATH**/ ?>