@extends("layout.theme")

@section("content")



<h2>{{$articles->title}}</h2><br>

<p>
    {{$articles->body}}<br>
</p>
<a href="/articles" class="button button-alt"> All Article</a>
<form method="POST" action="/articles/{{$articles->id}}">
    @csrf
    @method("delete")
    <button onclick=" return confirm('are you sure');" class="btn btn-danger">Delete</button>
</form>
@endsection