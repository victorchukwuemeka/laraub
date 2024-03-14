@extends('layouts.app')
@section('content')
<section class="bg-gray-900 text-white py-8 sm:py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl sm:text-5xl font-extrabold mb-4">Welcome To laraub</h1>
        <p class="text-lg sm:text-xl mb-8">
            Stay updated with the latest tech news and trends on Laravel.
        </p>
        <a href="{{ route("create.article")}}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 sm:py-3 sm:px-8 rounded-full text-lg sm:text-xl transition duration-300 ease-in-out inline-block">
           care to write
        </a>
    </div>
</section>

<!-- Featured Articles -->
<section class="py-10 px-5  sm:py-10">

    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:grid-cols-3 gap-8">
     <!-- grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-8-->
        @foreach($viewData['articles'] as $article)
        <div>
          <br>
          <!--bg-white shadow-lg rounded-lg overflow-hidden-->
            <img src="{{ asset('/img/silicon.png') }}"
            alt="Article 1">
            <!--w-full h-48 object-cover object-center-->
            <div class="p-4">
              <!--text-lg font-semibold mb-2-->
                <h2>{{ $article->get_title() }}</h2>
                <div class="truncate">
                  <p class="text-gray-600 text-sm">
                    @php
                     $body = $article->get_body();
                     $lent = strlen($body);
                     if($lent > 200){
                       $body = substr($body, 0, 200);
                     }else{
                       $body;
                     }
                    @endphp
                    {!! $body !!}
                  </p>
                </div>

                <a href="{{ url('/show_article/'.$article->get_id()) }}"
                  class="block mt-2 text-blue-500 hover:underline text-sm">
                  Read More
                </a>
            </div>
        </div>
        <br>
        @endforeach

    </div>

</section>




@endsection
