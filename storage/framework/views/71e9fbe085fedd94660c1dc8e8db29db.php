<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-center min-h-screen pb-8 bg-gray-100">
    <div class="max-w-md w-full mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-gray-800 text-center">Create a New Ad</h1>
        <form action="<?php echo e(route('ads.store')); ?>" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Enter a title" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea id="description" name="description" class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" rows="4" placeholder="Enter a description" required></textarea>
            </div>
            <div class="mb-4">
                <label for="media" class="block text-gray-700 font-semibold mb-2">Media</label>
                <input type="file" id="media" name="media" class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" accept="image/*,video/*" required>
            </div>
            <div class="mb-6">
                <label for="url" class="block text-gray-700 font-semibold mb-2">URL</label>
                <input type="url" id="url" name="url" class="w-full px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg border border-gray-400 outline-none focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Enter a URL" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-4 py-2 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                    Create Ad
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/ads/create.blade.php ENDPATH**/ ?>