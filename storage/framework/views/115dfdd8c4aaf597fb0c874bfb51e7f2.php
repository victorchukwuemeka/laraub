<?php $__env->startSection('content'); ?>

<div class="max-w-2xl mx-auto w-full bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center">Create a Blog Article</h1>
    <form action="<?php echo e(route('post.article')); ?>" method="POST" class="max-w-lg mx-auto">
        <?php echo csrf_field(); ?>
        <div class="mb-6">
            <label for="title" class="block text-gray-700 text-lg font-semibold mb-2">Title</label>
            <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" placeholder="Enter the title" required>
        </div>

        <div class="mb-7">
            <input id="x" type="hidden" name="body">
            <label for="content" class="block text-gray-700 text-lg font-semibold mb-2">
              Content
            </label>

            <trix-editor class="trix-content shadow appearance-none border rounded w-full py-4 px-4 text-gray-700
             leading-tight focus:outline-none focus:shadow-outline"input="x"></trix-editor>
            <!--<textarea id="content" name="body"
            class="ckeditor form-control w-full border border-gray-300 rounded-lg
            py-4 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" rows="6"
             placeholder="Write your article content here" required>
           </textarea>-->
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline">
              Publish Article
            </button>
        </div>
    </form>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/article/create.blade.php ENDPATH**/ ?>