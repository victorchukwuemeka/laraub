// public/js/context-menu.js

document.addEventListener('DOMContentLoaded', function () {
    const contextMenuTrigger = document.getElementById('context-menu-trigger');
    const contextMenu = document.getElementById('context-menu');

    contextMenuTrigger.addEventListener('click', function (e) {
        e.preventDefault();

        const rect = contextMenuTrigger.getBoundingClientRect();

        // Apply Tailwind classes for positioning
        contextMenu.classList.remove('hidden');
        contextMenu.classList.add('absolute', 'top-full', 'left-0', 'mt-2');
    });

   document.addEventListener('click', function (e) {
        if (!contextMenuTrigger.contains(e.target) && !contextMenu.contains(e.target)) {
            contextMenu.classList.add('hidden');
        }
    });

    document.getElementById('edit-option').addEventListener('click', function () {
        // Handle the edit action here
        alert('Edit clicked');

        contextMenu.classList.add('hidden');
    });

    document.getElementById('delete-option').addEventListener('click', function () {
        // Handle the delete action here
        alert('Delete clicked');

        contextMenu.classList.add('hidden');
    });
});
