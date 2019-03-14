@extends('layouts.app')

@section('content')
<a href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->post_title}}</td>
      <td>{{$post->post_text}}</td>
    </tr>
    </tbody>
</table>

@endsection
