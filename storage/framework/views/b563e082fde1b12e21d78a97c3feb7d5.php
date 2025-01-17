<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8 bg-white rounded-lg shadow-md">
  <h1 class="text-3xl font-semibold text-center mb-6">Create a Blog Article</h1>

  <form action="<?php echo e(route('post.article')); ?>" method="POST" class="form mx-auto max-w-lg">
    <?php echo csrf_field(); ?>

    <!-- Title Field -->
    <div class="mb-6">
      <label for="title" class="block text-gray-700 text-lg font-semibold mb-2">Title</label>
      <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" placeholder="Enter the title" required>
    </div>

    <!-- Rich Text Editor (Trix) -->
    <div class="mb-7">
      <input id="body" type="hidden" name="body">
      <label for="content" class="block text-gray-700 text-lg font-semibold mb-2">
        Content
      </label>
      <trix-editor class="trix-content shadow appearance-none border rounded w-full py-4 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" input="body"></trix-editor>
    </div>

    <!-- Slug Field (Optional) -->
    <div class="mb-6">
      <label for="slug" class="block text-gray-700 text-lg font-semibold mb-2">Slug (Optional)</label>
      <input type="text" id="slug" name="slug" class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" placeholder="Enter a custom slug (e.g., my-article-title)">
    </div>

    <!-- Thumbnail Field (Optional) -->
    <div class="mb-6">
      <label for="thumbnail" class="block text-gray-700 text-lg font-semibold mb-2">Thumbnail URL (Optional)</label>
      <input type="text" id="thumbnail" name="thumbnail" class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-indigo-500" placeholder="Enter the thumbnail URL">
    </div>

    <!-- Status Field -->
    <div class="mb-6">
      <label for="status" class="block text-gray-700 text-lg font-semibold mb-2">Status</label>
      <select id="status" name="status" class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800 focus:outline-none focus:border-indigo-500" required>
        <option value="draft">Draft</option>
        <option value="published">Published</option>
      </select>
    </div>

    <!-- Submit Button -->
    <div class="text-center">
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline">
        Publish Article
      </button>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/article/create.blade.php ENDPATH**/ ?>