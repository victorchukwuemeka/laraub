<div>
    <div>
        <h1>Welcome To laraub</h1>
        <p>Stay updated with the latest tech news and trends on Laravel.</p>
        <a href="{{ route("create.article")}}">Care to write</a>
    </div>
</div>

<!-- Featured Articles -->
<div class="flex flex-wrap justify-center">
    @foreach($viewData['articles'] as $article)
    <div class="max-w-md rounded overflow-hidden shadow-lg bg-white flex mx-4 my-8">
        <img class="w-1/3" src="{{ asset('/img/silicon.png') }}" alt="Article 1">
        <div class="p-4 w-2/3">
            <h2>{{ $article->get_title() }}</h2>
            <p>
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
            <a href="{{ url('/show_article/'.$article->get_id()) }}">Read More</a>
        </div>
    </div>
    @endforeach
</div>
