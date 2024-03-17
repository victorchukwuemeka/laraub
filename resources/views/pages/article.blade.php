@extends('layouts.app')
@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Featured Articles</h1>

        <div class="flex flex-wrap justify-center gap-8">
            <!-- Article 1 -->
          @foreach($viewData['articles'] as $article)
            <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full h-48 object-cover object-center" src="{{ asset('/img/silicon.png') }}" alt="Article Image">
                <div class="px-6 py-4">
                    <h2 class="font-bold text-xl mb-2">Article 1</h2>
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
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque ligula ut dolor fringilla, in dignissim felis dignissim.</p>
                </div>
            </div>
            @endforeach

            <!-- Article 2 -->
            <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full h-48 object-cover object-center" src="https://via.placeholder.com/300x200" alt="Article Image">
                <div class="px-6 py-4">
                    <h2 class="font-bold text-xl mb-2">Article 2</h2>
                    <p class="text-gray-700 text-base">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full h-48 object-cover object-center" src="https://via.placeholder.com/300x200" alt="Article Image">
                <div class="px-6 py-4">
                    <h2 class="font-bold text-xl mb-2">Article 3</h2>
                    <p class="text-gray-700 text-base">Sed cursus libero vel libero fermentum dapibus. Nulla facilisi. Sed viverra sem sit amet nisi malesuada rhoncus.</p>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
