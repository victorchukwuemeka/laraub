<?php $__env->startSection('content'); ?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center">
      Create a Blog Article
    </h1>
    <form action="<?php echo e(route('article.update', $viewData['id'])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-6">
            <label for="title" class="block text-gray-700 text-lg font-semibold mb-2">
              Title
            </label>
            <input type="text" id="title" name="title" value="<?php echo e($viewData['title']); ?>"
            class="w-full border border-gray-300 rounded-lg py-2 px-4 text-gray-800
            placeholder-gray-400
            focus:outline-none focus:border-indigo-500"
            placeholder="Enter the title" required>
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 text-lg font-semibold mb-2">Content</label>

           <input id="x" type="hidden" name="body">
           <?php if (isset($component)) { $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.trix-input','data' => ['id' => 'x','class' => 'form-control w-full border border-gray-300 rounded-lg py-4
           px-4 text-gray-800 placeholder-gray-400 focus:outline-none
           focus:border-indigo-500','rows' => '6','name' => 'body','value' => ''.$viewData["body"].'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('trix-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'x','class' => 'form-control w-full border border-gray-300 rounded-lg py-4
           px-4 text-gray-800 placeholder-gray-400 focus:outline-none
           focus:border-indigo-500','rows' => '6','name' => 'body','value' => ''.$viewData["body"].'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $attributes = $__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__attributesOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1)): ?>
<?php $component = $__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1; ?>
<?php unset($__componentOriginalfa45bdf63d5f546beb2b52c7dd7ad0c1); ?>
<?php endif; ?>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white
            font-semibold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline">
              Update Article
            </button>
        </div>
    </form>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/article/edit.blade.php ENDPATH**/ ?>