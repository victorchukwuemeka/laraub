<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title><?php echo e(config('app.name', 'Laraub')); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/trix.css')); ?>">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Trix Editor -->
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <!-- Fonts (Pick One) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fd683e659d.js" crossorigin="anonymous"></script>

    <!-- Google reCAPTCHA (Securely Loaded) -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(env('RECAPTCHA_SITE_KEY')); ?>"></script>

    <style>
      /* Custom CSS for password validation feedback */
      .text-danger { color: red; }
      .text-success { color: green; }
    </style>
</head>
<body class="min-h-screen font-sans antialiased flex flex-col">
    <?php echo $__env->make('layouts.nav2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="flex-grow">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>
</html>
<?php /**PATH /home/victor/odinala/laraub/resources/views/layouts/app.blade.php ENDPATH**/ ?>