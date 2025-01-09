<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Manage Ads</h1>
    
    <?php if(session('success')): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <!-- Unverified Ads Section -->
    <h2 class="text-2xl font-bold mb-4 text-gray-700">Unverified Ads</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!$ad->verified): ?>
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
                <div class="p-4 flex justify-between">
                    <!-- Verify Button -->
                    <form action="<?php echo e(route('admin.verify-ad', $ad->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                            Verify
                        </button>
                    </form>

                    <!-- Delete Button -->
                    <form action="<?php echo e(route('admin.ads.destroy', $ad->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded"
                            onclick="return confirm('Are you sure you want to delete this ad?');">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Verified Ads Section -->
    <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-700">Verified Ads</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->verified): ?>
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
                <!-- Improved Clicks Display -->
                <div class="p-4 flex justify-between items-center">
                    <!-- Clicks Badge -->
                    <div class="bg-blue-100 text-blue-800 rounded-full px-4 py-2 flex items-center">
                        <i class="fa-solid fa-mouse-pointer text-blue-500 mr-2"></i>
                        <span class="font-semibold"><?php echo e($ad->clicks); ?> Clicks</span>
                    </div>

                    <!-- Delete Button -->
                    <form action="<?php echo e(route('admin.ads.destroy', $ad->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded"
                            onclick="return confirm('Are you sure you want to delete this ad?');">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/admin/ads/index.blade.php ENDPATH**/ ?>