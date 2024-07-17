<!-- resources/views/work_experience/create.blade.php -->

 <!-- Assuming you have a layout file -->

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-8">
        <form action="<?php echo e(route('work_experience.store')); ?>" method="post" class="max-w-md mx-auto">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                <input type="text" name="position" id="position" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company</label>
                <input type="text" name="company" id="company" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                <input type="date" name="end_date" id="end_date" class="w-full px-3 py-2 border rounded-md">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/profile/experiences/experiences-form.blade.php ENDPATH**/ ?>