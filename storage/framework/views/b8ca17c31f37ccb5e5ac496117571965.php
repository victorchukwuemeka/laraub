<?php $__env->startSection('content'); ?>
<?php if(Auth::user()): ?>

    <div class="flex items-center justify-center space-x-4 mt-4">
      <a href="<?php echo e(url('/admin/article/'.$viewData["article"]->get_id().'/edit')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md">
        Edit
      </a>
      <form method="POST" action="<?php echo e(route('admin.article.destroy', $viewData['article']->get_id())); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg shadow-md">
          Delete
        </button>
      </form>
    </div>

<?php endif; ?>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-4"><?php echo e($viewData['article']->get_title()); ?></h1>

        <div class="prose">
            <?php echo $viewData['article']->get_body(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/admin/article/show.blade.php ENDPATH**/ ?>
