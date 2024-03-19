<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('/css/trix.css')); ?>">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css"
       rel="stylesheet">
     <link rel="stylesheet" type="text/css"
      href="https://unpkg.com/trix@2.0.8/dist/trix.css">

      <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
      
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title><?php echo e(config('app.name', 'laraub')); ?></title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
    href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript"
    src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js">
  </script>


    <!-- Scripts -->
    <!--<?php if (isset($component)) { $__componentOriginal95950f824213f5cf8d19afcb8f4ecb86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8cb219c4cf0735bee5cac90fadf0a458::styles','data' => ['theme' => 'richtextlaravel','dataTurboTrack' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('rich-text::styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['theme' => 'richtextlaravel','data-turbo-track' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86)): ?>
<?php $attributes = $__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86; ?>
<?php unset($__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95950f824213f5cf8d19afcb8f4ecb86)): ?>
<?php $component = $__componentOriginal95950f824213f5cf8d19afcb8f4ecb86; ?>
<?php unset($__componentOriginal95950f824213f5cf8d19afcb8f4ecb86); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal95950f824213f5cf8d19afcb8f4ecb86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8cb219c4cf0735bee5cac90fadf0a458::styles','data' => ['theme' => 'richtextlaravel','dataTurboTrack' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('rich-text::styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['theme' => 'richtextlaravel','data-turbo-track' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86)): ?>
<?php $attributes = $__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86; ?>
<?php unset($__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95950f824213f5cf8d19afcb8f4ecb86)): ?>
<?php $component = $__componentOriginal95950f824213f5cf8d19afcb8f4ecb86; ?>
<?php unset($__componentOriginal95950f824213f5cf8d19afcb8f4ecb86); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal95950f824213f5cf8d19afcb8f4ecb86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8cb219c4cf0735bee5cac90fadf0a458::styles','data' => ['theme' => 'richtextlaravel','dataTurboTrack' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('rich-text::styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['theme' => 'richtextlaravel','data-turbo-track' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86)): ?>
<?php $attributes = $__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86; ?>
<?php unset($__attributesOriginal95950f824213f5cf8d19afcb8f4ecb86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95950f824213f5cf8d19afcb8f4ecb86)): ?>
<?php $component = $__componentOriginal95950f824213f5cf8d19afcb8f4ecb86; ?>
<?php unset($__componentOriginal95950f824213f5cf8d19afcb8f4ecb86); ?>
<?php endif; ?>-->



</head>
<body class="font-sans bg-gray-100">

  <div id="app">
          <?php echo $__env->make('layouts.nav2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <main class="space-y-5">
            <?php echo $__env->yieldContent('content'); ?>
         </main>
  </div>

    <div class="">
      <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
</html>
<?php /**PATH /home/abara/web/laraub/resources/views/layouts/app.blade.php ENDPATH**/ ?>