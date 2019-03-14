@extends('layouts.app')

 @section('content')
 <a href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>

    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="post_title" value="{{$post->post_title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="post_text" class="form-control">{{$post->post_text}}</textarea>
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
