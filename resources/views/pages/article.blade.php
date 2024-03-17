@extends('layouts.app')
@section('content')
<div>
    <div>
        <h1>Welcome To laraub</h1>
        <p>Stay updated with the latest tech news and trends on Laravel.</p>
        <a href="{{ route("create.article")}}">Care to write</a>
    </div>
</div>

<!-- Featured Articles -->
<div>
    <div>
        @foreach($viewData['articles'] as $article)
        <div>
            <img src="{{ asset('/img/silicon.png') }}" alt="Article 1">
            <div>
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
            </div>
            <div>
                <a href="{{ url('/show_article/'.$article->get_id()) }}">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection
