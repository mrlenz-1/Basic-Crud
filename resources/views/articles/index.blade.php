@extends("layout.theme")

@section("content")

<div id="three-column" class="container">
    <div class="title">
        <h2>Articles</h2>
        <span class="byline">Read interesting articles</span>
    </div>
@foreach ($articles as $article)
<div class="boxA">
    <h2>{{$article->title}}</h2>
    <p>{{$article->body}}</p>
    <a href="/articles/{{$article->id}}"class="btn btn-success">More Info</a>
    <a href="/articles/{{$article->id}}/edit" class="btn btn-success">Edit</a>
</div>

@endforeach
   
</div>


@endsection