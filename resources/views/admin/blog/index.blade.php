@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Blog Management</h1>
        <a href="{{ route('admin.blog-posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-4 py-3 text-left">Title</th>
                    <th class="px-4 py-3 text-left">Author</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                
                <tr class="border-b">
                    <td class="px-4 py-3">{{ $post->title }}</td>
                    <td class="px-4 py-3">{{ $post->user->name }}</td>
                    <td class="px-4 py-3">
                        @if($post->is_published)
                        <span class="bg-green-500 text-white px-2 py-1 rounded-full">Published</span>
                        @else
                        <span class="bg-yellow-500 text-white px-2 py-1 rounded-full">Draft</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 flex space-x-2">
                        <a href="{{ route('admin.blog-posts.edit', $post->id) }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.blog-posts.destroy', $post->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection