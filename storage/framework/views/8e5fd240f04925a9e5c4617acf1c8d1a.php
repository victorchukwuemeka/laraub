<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6 md:p-12">

    <h1 class="text-center text-4xl md:text-6xl font-extrabold mb-8 text-gray-900 leading-tight max-w-2xl mx-auto">
        <span class="inline-block align-top"><?php echo e($viewData['title']); ?></span>
    </h1>


    <div class="w-full max-w-4xl mx-auto rounded-xl overflow-hidden shadow-2xl mb-10 animate-fade-in">
        <img src="<?php echo e($viewData['thumbnail'] ? asset('storage/' . $viewData['thumbnail']) : asset('img/silicon.png')); ?>"
             alt="Article Image"
             class="h-auto w-full object-cover max-h-[400px]">
    </div>

    <div class="prose lg:prose-lg xl:prose-xl mx-auto leading-loose text-gray-600 animate-slide-in">
        <div class="max-w-4xl mx-auto">
            <pre><?php echo $viewData['body']; ?> </pre>
        </div>
    </div>





    <?php if($viewData['user_id_in_session'] === $viewData['user_id']): ?>
    <div class="fixed bottom-6 right-6">
        <button id="context-menu-trigger" class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-lg 
                     hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-transform transform hover:scale-105">
            Manage Article
        </button>

        <div id="context-menu" class="hidden mt-4 bg-white border rounded-xl shadow-lg p-4">
            <ul class="space-y-3">
                <li>
                    <a href="<?php echo e(route('edit.article', ['id' => $viewData['id']])); ?>" 
                       class="block px-4 py-2 text-gray-800 hover:bg-gray-100 rounded-md">Edit Article</a>
                </li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                       class="block px-4 py-2 text-red-600 hover:bg-red-100 rounded-md">Delete Article</a>
                </li>
            </ul>
            <form id="delete-form" action="<?php echo e(route('delete.article', ['id' => $viewData['id']])); ?>" method="POST" class="hidden">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            </form>
        </div>
    </div>
    <?php endif; ?>

</div>

<script defer>
    document.addEventListener('DOMContentLoaded', () => {
        const menuTrigger = document.getElementById('context-menu-trigger');
        const contextMenu = document.getElementById('context-menu');

        menuTrigger.addEventListener('click', () => {
            contextMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!menuTrigger.contains(e.target) && !contextMenu.contains(e.target)) {
                contextMenu.classList.add('hidden');
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/victor/odinala/laraub/resources/views/article/show.blade.php ENDPATH**/ ?>