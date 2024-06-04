<?php $__env->startSection('content'); ?>
    <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
            <div class="lg:max-w-lg">
                <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">
                    <?php echo e($project->name); ?>

                </h1>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    <?php echo e($project->description); ?>.
                </p>
                <p>
                  <?php echo e($project->motto); ?>

                </p>
                <div class="grid gap-6 mt-8 sm:grid-cols-2">
                  <?php if($project->website): ?>
                  <a href="<?php echo e($project->website); ?>" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                      <i class="fa-solid fa-link"></i>
                      visit site
                  </a>
                  <?php else: ?>
                   <h2><?php echo e(__('No Website')); ?></h2>
                  <?php endif; ?>

                  <?php if($project->github_repo): ?>
                  <a href="<?php echo e($project->github_repo); ?>" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                      <i class="fa-brands fa-github"></i>
                      GitHub Repository
                  </a>
                  <?php else: ?>
                   <h2><?php echo e(__('No gitHub repo')); ?></h2>
                  <?php endif; ?>


                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md"
            src="<?php echo e(asset('/storage/' . $project->image)); ?>"
             alt="<?php echo e($project->name); ?>">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/projects/show-project.blade.php ENDPATH**/ ?>