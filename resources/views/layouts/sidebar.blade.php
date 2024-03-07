<!-- Sidebar -->
<div class="flex-shrink-0 w-64 bg-gray-800 shadow-lg">

    <!-- Sidebar Header -->
    <div class="flex items-center justify-center h-16 bg-gray-700 text-white">
        <span class="text-2xl font-semibold">Ruumi Admin</span>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex flex-col mt-4">
        <a href="{{ route('admin.article')}}" class="px-4 py-2 text-white hover:bg-gray-700">Article </a>
        <a href="{{ url('admin.listing.moderation')}}" class="px-4 py-2 text-white hover:bg-gray-700">Listing Moderation</a>
        <a href="{{ url('admin.blog.index')}}" class="px-4 py-2 text-white hover:bg-gray-700">Blog</a>
        <a href="{{ url('admin.communication.hub')}}" class="px-4 py-2 text-white hover:bg-gray-700">Communication Hub</a>
        <a href="{{ url('admin.support.ticket')}}" class="px-4 py-2 text-white hover:bg-gray-700">Support & Ticket</a>
        <a href="#" class="px-4 py-2 text-white hover:bg-gray-700">Settings</a>
        <!-- Add more links as needed -->
    </nav>

</div>
