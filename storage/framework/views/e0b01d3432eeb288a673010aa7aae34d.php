<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Blog Management</h1>
        <a href="<?php echo e(route('admin.blog-posts.create')); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-4 py-3 text-left">Title</th>
                    <th class="px-4 py-3 text-left">Author</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($post); ?>

                <tr class="border-b">
                    <td class="px-4 py-3"><?php echo e($post->title); ?></td>
                    <td class="px-4 py-3"><?php echo e($post->user->name); ?></td>
                    <td class="px-4 py-3">
                        <?php if($post->is_published): ?>
                        <span class="bg-green-500 text-white px-2 py-1 rounded-full">Published</span>
                        <?php else: ?>
                        <span class="bg-yellow-500 text-white px-2 py-1 rounded-full">Draft</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 flex space-x-2">
                        <a href="<?php echo e(route('admin.blog-posts.edit', $post->id)); ?>" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="<?php echo e(route('admin.blog-posts.destroy', $post->id)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <?php echo e($posts->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/admin/blog/index.blade.php ENDPATH**/ ?>