<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Search Results for "<?php echo e($query); ?>"</h1>

    <?php if($projects->count() > 0): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">
                            <a href="<?php echo e(route('projects.show', $project)); ?>" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">
                                <?php echo e($project->name); ?>

                            </a>
                        </h2>
                        <p class="text-gray-600 mb-4"><?php echo e(Str::limit($project->description, 100)); ?></p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>Created: <?php echo e($project->created_at->format('M d, Y')); ?></span>
                            <span>By: <?php echo e($project->user->name); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="mt-8">
            <?php echo e($projects->appends(['query' => $query])->links()); ?>

        </div>
    <?php else: ?>
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6" role="alert">
            <p>No projects found matching "<?php echo e($query); ?>".</p>
        </div>
    <?php endif; ?>

    <div class="mt-8">
        <a href="<?php echo e(route('home')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
            Back to Home
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/projects/search-result.blade.php ENDPATH**/ ?>