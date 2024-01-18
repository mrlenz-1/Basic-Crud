@extends("layout.theme")

@section("post")

<div id="three-column" class="container">
    <div class="title">
        <h2>Articles</h2>
        <span class="byline">Read interesting articles</span>
    </div>
@foreach ($articles as $article)
<div class="boxA">
    <p>{{$article->title}}</p>
    <p>{{$article->body}}</p>
    <a href="#" class="button button-alt">More Info</a>
</div>

@endforeach
   
</div>

@endsection