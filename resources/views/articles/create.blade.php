@extends("layout.theme")

@section("content")

<form method="POST" action="/articles">
    @csrf
    <div class="form-group">
        <label>Article Title</label>
        <input type="text" name="title" value="{{old('title')}}" class="form-control">
        
        @error("title")
        <p style="color:red">{{$errors->first("title")}}</p>    
        @enderror
        
    </div>
    <div class="form-group">
        <label>Article Body</label>
        <textarea class="form-control" name="body" value="{{old('title')}}" rows="" cols=""></textarea>
        @error("body")
        <p style="color:red">{{$errors->first("body")}}</p>    
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>


@endsection