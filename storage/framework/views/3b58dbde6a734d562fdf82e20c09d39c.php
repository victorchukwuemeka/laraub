<!-- Sidebar -->
<div class="flex-shrink-0 w-64 bg-gray-800 shadow-lg">

    <!-- Sidebar Header -->
    <div class="flex items-center justify-center h-16 bg-gray-700 text-white">
        <span class="text-2xl font-semibold">Ruumi Admin</span>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex flex-col mt-4">
        <a href="<?php echo e(url('admin.article')); ?>" class="px-4 py-2 text-white hover:bg-gray-700">Article </a>
        <a href="<?php echo e(url('admin.listing.moderation')); ?>" class="px-4 py-2 text-white hover:bg-gray-700">Listing Moderation</a>
        <a href="<?php echo e(url('admin.blog.index')); ?>" class="px-4 py-2 text-white hover:bg-gray-700">Blog</a>
        <a href="<?php echo e(url('admin.communication.hub')); ?>" class="px-4 py-2 text-white hover:bg-gray-700">Communication Hub</a>
        <a href="<?php echo e(url('admin.support.ticket')); ?>" class="px-4 py-2 text-white hover:bg-gray-700">Support & Ticket</a>
        <a href="#" class="px-4 py-2 text-white hover:bg-gray-700">Settings</a>
        <!-- Add more links as needed -->
    </nav>

</div>
<?php /**PATH /home/victor/blackpen/laraub/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>