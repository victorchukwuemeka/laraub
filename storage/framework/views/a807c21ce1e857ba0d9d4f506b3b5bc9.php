<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo e(__('User List')); ?></h2>

    <!-- Statistics Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
        <!-- Visitors Count Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center">
                <!-- Icon -->
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-500 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <!-- Text -->
                <div>
                    <p class="text-sm text-gray-500"><?php echo e(__('Total Visitors')); ?></p>
                    <p class="text-2xl font-bold text-gray-900"><?php echo e($visitorCount); ?></p>
                </div>
            </div>
        </div>

        <!-- Users Count Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center">
                <!-- Icon -->
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-500 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <!-- Text -->
                <div>
                    <p class="text-sm text-gray-500"><?php echo e(__('Total Users')); ?></p>
                    <p class="text-2xl font-bold text-gray-900"><?php echo e($usersCount); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- User List -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg p-6">
                <div class="flex items-center">
                    <!-- Avatar Placeholder (rounded) -->
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>

                    <!-- User Details -->
                    <div class="flex-grow">
                        <p class="text-lg font-semibold text-gray-900"><?php echo e($user->name); ?></p>
                        <p class="text-sm text-gray-500"><?php echo e($user->email); ?></p>
                        <p class="text-xs text-gray-400 mt-1"><?php echo e(__('Joined')); ?>: <?php echo e($user->created_at->format('F j, Y, g:i a')); ?></p>
                        <p class="text-xs text-gray-400 mt-1"><?php echo e(__('Last Visit')); ?>: <?php echo e($user->last_visit ? $user->last_visit->diffForHumans() : 'Never'); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/admin/users/index.blade.php ENDPATH**/ ?>