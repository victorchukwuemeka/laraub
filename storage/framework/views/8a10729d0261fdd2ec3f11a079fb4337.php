<!-- resources/views/projects/create.blade.php -->

 <!-- Assuming you have a layout file -->

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-8">
        <form action="<?php echo e(route('projects.store')); ?>" method="post" class="max-w-md mx-auto">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="project_name" class="block text-gray-700 text-sm font-bold mb-2">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" class="w-full px-3 py-2 border rounded-md" rows="4"></textarea>
            </div>

            <div class="mb-4">
                <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link</label>
                <input type="url" name="link" id="link" class="w-full px-3 py-2 border rounded-md" placeholder="https://example.com">
            </div>

            <div class="mb-4">
                <label for="technologies_used" class="block text-gray-700 text-sm font-bold mb-2">Technologies Used</label>
                <input type="text" name="technologies_used" id="technologies_used" class="w-full px-3 py-2 border rounded-md" required>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/blackpen/laraub/resources/views/profile/projects/projects-form.blade.php ENDPATH**/ ?>