<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Ruumi Dashboard'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <?php echo $__env->make('layouts.adminhead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="flex">

        <?php echo $__env->make('layouts.admin-side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="flex-1 ml-4 mt-4 p-6">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>

</body>
</html>
<?php /**PATH /home/victor/odinala/laraub/resources/views/layouts/admin.blade.php ENDPATH**/ ?>