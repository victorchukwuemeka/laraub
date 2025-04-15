@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gray-900 text-white pt-0 py-8 sm:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl sm:text-5xl font-extrabold mb-4">Welcome To Laraub</h1>
        <p class="text-lg sm:text-xl mb-8">
            Stay updated with the latest tech news and trends on Laravel.
        </p>
        <a href="{{ route('create.article') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
            Care to Write
        </a>
    </div>
</div>

<!-- Featured Articles -->
<div class="py-10 px-5 sm:py-10">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Featured Articles</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($viewData['articles'] as $article)
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <!-- Article Thumbnail -->
                    <img class="w-full h-48 object-cover" 
                    src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('/img/silicon.png') }}" 
                    alt="{{ $article->title }}">


                    <!-- Article Content -->
                    <div class="px-6 py-4">
                        <!-- Article Title -->
                        <a href="{{ route('article.show', $article->slug) }}">
                            <div class="font-bold text-gray-700 hover:text-red-400 text-xl mb-2">
                                {{ $article->title }}
                            </div>
                        </a>
  
                        <!-- Article Excerpt -->
                        <a href="{{ route('article.show', $article->slug) }}">
                            <p class="text-gray-700 text-base">
                                {{ mb_strimwidth($article->body->toPlainText(), 0, 100, '...') }}
                            </p>
                        </a>
                    </div>

                    <!-- Article Metadata -->
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                            {{ $article->status }}
                        </span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection