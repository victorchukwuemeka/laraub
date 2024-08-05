<!-- resources/views/certifications/create.blade.php -->

 <!-- Assuming you have a layout file -->

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-8">
        <form action="<?php echo e(route('certifications.store')); ?>" method="post" class="max-w-md mx-auto">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="laravel_certifications" class="block text-gray-700 text-sm font-bold mb-2">Laravel Certifications</label>
                <input type="text" name="laravel_certifications" id="laravel_certifications" class="w-full px-3 py-2 border rounded-md" placeholder="Enter Laravel certifications">
            </div>

            <div class="mb-4">
                <label for="other_certifications" class="block text-gray-700 text-sm font-bold mb-2">Other Certifications</label>
                <input type="text" name="other_certifications" id="other_certifications" class="w-full px-3 py-2 border rounded-md" placeholder="Enter other certifications">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/profile/certificates/certificates-form.blade.php ENDPATH**/ ?>