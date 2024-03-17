<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h1>Welcome To laraub</h1>
        <p>Stay updated with the latest tech news and trends on Laravel.</p>
        <a href="<?php echo e(route("create.article")); ?>">Care to write</a>
    </div>
</div>

<!-- Featured Articles -->
<div class="flex flex-wrap justify-center gap-8">
    <?php $__currentLoopData = $viewData['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white flex">
        <img class="w-1/3" src="<?php echo e(asset('/img/silicon.png')); ?>" alt="Article 1">
        <div class="p-4 w-2/3">
            <h2><?php echo e($article->get_title()); ?></h2>
            <p>
                <?php
                 $body = $article->get_body();
                 $lent = strlen($body);
                 if($lent > 200){
                   $body = substr($body, 0, 200);
                 }else{
                   $body;
                 }
                ?>
                <?php echo $body; ?>

            </p>
            <a href="<?php echo e(url('/show_article/'.$article->get_id())); ?>">Read More</a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/pages/article.blade.php ENDPATH**/ ?>