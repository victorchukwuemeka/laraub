@extends('layouts.admin')

@section('content')
@if(Auth::user())

    <div class="flex items-center justify-center space-x-4 mt-4">
      <a href="{{ url('/admin/article/'.$viewData["article"]->get_id().'/edit') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md">
        Edit
      </a>
      <form method="POST" action="{{ route('admin.article.destroy', $viewData['article']->get_id()) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg shadow-md">
          Delete
        </button>
      </form>
    </div>

@endif
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-4">{{ $viewData['article']->get_title() }}</h1>

        <div class="prose">
            {!! $viewData['article']->get_body() !!}
        </div>
    </div>
@endsection
