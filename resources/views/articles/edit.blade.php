@extends("layout.theme")

@section("content")

<form method="POST" action="/articles/{{$articles->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Article Title</label>
        <input type="text" name="title" value="{{$articles->title}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Article Body</label>
        <textarea class="form-control" name="body" rows="" cols="">{{$articles->body}}</textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>


@endsection