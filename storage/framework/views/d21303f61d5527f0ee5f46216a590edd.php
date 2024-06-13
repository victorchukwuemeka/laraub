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
        <a href="<?php echo e(route('projects.create')); ?>"
          class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3
          sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
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
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-start mb-2  mt-4 justify-center">
                <div class="w-full max-w-md px-4 py-4 bg-white rounded-lg shadow-lg">
                    <div class="flex justify-center -mt-16 md:justify-end">
                        <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400"
                            alt="<?php echo e($project->name); ?>"
                            src="<?php echo e(asset('/storage/' . $project->image)); ?>">
                    </div>

                    <h2 class="mt-2 text-xl font-semibold text-gray-900  md:mt-0"><?php echo e($project->name); ?></h2>

                    <p class="mt-2 text-sm text-gray-700">
                        <?php echo e($project->motto); ?>

                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex space-x-4">
                            <a href="#" class="flex items-center text-lg font-medium text-blue-600 dark:text-blue-300 hover:text-blue-800 dark:hover:text-blue-500 transition-colors duration-200" tabindex="0" role="link">
                                <i class="fa-regular fa-comment text-xl mr-2"></i>
                                <span>Comment</span>
                            </a>

                            <a href="<?php echo e(route('projects.show',['project' => $project->id])); ?>"
                                class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                                more
                            </a>
                        </div>

                        <a href="<?php echo e($project->website); ?>" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">
                            <i class="fa-solid fa-link"></i>
                            visit site
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/projects/index.blade.php ENDPATH**/ ?>