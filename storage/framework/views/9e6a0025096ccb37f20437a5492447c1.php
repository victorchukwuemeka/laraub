<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Verify Ads</h1>
    <?php if(session('success')): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2"><?php echo e($ad->title); ?></h2>
                    <p class="text-gray-600 mb-4"><?php echo e($ad->description); ?></p>
                    <p class="text-gray-500">Submitted by: <?php echo e($ad->user->name); ?></p>
                </div>
                <div class="p-4">
                    <a href="<?php echo e($ad->url); ?>" target="_blank">
                        <img src="<?php echo e(asset('/storage/'. $ad->media)); ?>" alt="<?php echo e($ad->title); ?>" class="w-full h-48 object-cover">
                    </a>
                </div>
                <div class="p-4">
                    <form action="<?php echo e(route('admin.verify-ad', $ad->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                            Verify
                        </button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laraub/resources/views/admin/ads/index.blade.php ENDPATH**/ ?>