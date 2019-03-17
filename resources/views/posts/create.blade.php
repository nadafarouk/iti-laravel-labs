@extends('layouts.app')

@section('content')
<a href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
            <label for="Picking user">Pick a User</label>
                <select class="form-control" name="user_id">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input name="post_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="post_text" class="form-control"></textarea>
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
