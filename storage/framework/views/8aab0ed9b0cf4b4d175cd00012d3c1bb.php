<!-- resources/views/posts/show.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="container md:container mx-auto p-8 px-8 md:px-8">
    <h1 class="text-3xl text-center md:text-6xl sm:text-4xl font-extrabold mb-4 text-gray-900">
        <?php echo e($viewData['title']); ?>

    </h1>

    <div class="flex">
        <div class="flex-grow overflow-hidden mb-6 md:w-full xl:w-full lg:w-full">
            <img src="<?php echo e(asset('/img/silicon.png')); ?>" alt="Article Image"
                class="h-50 md:max-w-screen-lg w-89 overflow-hidden sm:min-m-2  md:w-full xl:w-full lg:w-full  mx-auto rounded-lg shadow-lg">
        </div>
    </div>

    <div class="font-serif break-all w-4/4 relative">
        <div id="editable-content" class="box-content text-left leading-relaxed whitespace-normal break-normal
            break-words md:break-words
            p-8 h-100 w-70 p-8 px-2 md:px-32 border-1 text-sm sm:text-3xl text-gray-700">
            <?php echo $viewData['body']; ?>

        </div>

        <!-- Context Menu Container -->
        <div id="context-menu" class="hidden absolute bg-white border rounded shadow-lg">
          <ul class="py-2 px-4 space-y-2">
            <li class="cursor-pointer hover:bg-gray-100">
              <a href="<?php echo e(route('edit.article', ['id' => $viewData['id']])); ?>">Edit</a>
            </li>
            <li class="cursor-pointer hover:bg-gray-100">
              <a href="#"
                onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                Delete
              </a>
            </li>
          </ul>
        </div>
        <!-- Add a form for the delete action -->
        <form id="delete-form" action="<?php echo e(route('delete.article', ['id' => $viewData['id']])); ?>" method="POST" style="display: none;">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
        </form>

        <?php if($viewData['user_id_in_session'] === $viewData['user_id']): ?>
        <!-- Button to trigger context menu -->
        <button id="context-menu-trigger"
            class="absolute bottom-2 left-2 bg-blue-500 text-white py-2 px-4
             rounded-full hover:bg-blue-600 focus:outline-none
             focus:ring focus:ring-blue-200 transition duration-300">
            Manage Article
        </button>
        <?php endif; ?>
    </div>

</div>

<!-- Include the JavaScript file -->
<script src="<?php echo e(asset('js/context-menu.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abara/web/laraub/resources/views/article/show.blade.php ENDPATH**/ ?>