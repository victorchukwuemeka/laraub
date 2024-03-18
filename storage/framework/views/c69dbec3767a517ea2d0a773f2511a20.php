<?php $__env->startSection('content'); ?>
<div class="bg-gray-900 text-white py-8 sm:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl sm:text-5xl font-extrabold mb-4">Welcome To laraub</h1>
        <p class="text-lg sm:text-xl mb-8">
            Stay updated with the latest tech news and trends on Laravel.
        </p>
        <a href="<?php echo e(route("create.article")); ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
           care to write
        </a>
    </div>
</div>

<!-- Featured Articles -->
<div class="py-10 px-5 sm:py-10">
    <div class="flex flex-wrap justify-center  gap-8">
        <?php $__currentLoopData = $viewData['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="<?php echo e(asset('/img/silicon.png')); ?>" alt="Article 1">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                  <?php echo e($article->get_title()); ?>

                </div>
                <p class="text-gray-700 text-base">
                  <?php
                    $body = $article->get_body();
                    $length = strlen($body);
                    if ($length > 100) {
                      $body = substr($body, 0, 100);
                    }
                  ?>
                   
                   this this me trying things out knowing it won't work
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <a href="<?php echo e(url('/show_article/'.$article->get_id())); ?>" class="text-blue-500 hover:underline text-sm">Read More</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/pages/article.blade.php ENDPATH**/ ?>