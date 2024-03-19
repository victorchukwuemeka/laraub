<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
    href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript"
    src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js">
  </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet">
</head>
<body class="bg-blue-100">
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Create Post</h1>
    <form action="<?php echo e(url('posts.store')); ?>" method="POST" class="max-w-lg mx-auto">
        <?php echo csrf_field(); ?>

        <input id="x" type="hidden" name="body">
        <div class="w-full">
            <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
            <trix-editor class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
             leading-tight focus:outline-none focus:shadow-outline" input="x"></trix-editor>
        </div>

        <button type="submit"
        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mt-4">
        Create Post
       </button>
    </form>
</div>
</body>
</html>
<?php /**PATH /home/abara/web/laraub/resources/views/pages/trytrix.blade.php ENDPATH**/ ?>