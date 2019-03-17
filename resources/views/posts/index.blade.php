@extends('layouts.app')

@section('content')
<a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
<table class="table">
  <thead>
      <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Description</th>
      <th scope="col">Writer</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">View</th>
      </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
  <tr>
    <th scope="row">{{$post->id}}</th>
    <td>{{$post->post_title}}</td>
    <td>{{isset($post->slug) ? $post->slug : 'Not found' }}</td>
    <td>{{$post->post_text}}</td>
    <td>{{isset($post->user['name']) ? $post->user['name'] : 'NULL' }}</td>
    <td><a href="{{route('posts.edit' , $post)}}" class="btn btn-primary">Edit</a></td>
    <td>
      <form action="{{ route('posts.destroy', $post->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Remove?');">Delete</button>
      </form>
    </td>
    <td>
      <form action="{{ route('posts.show', $post)}}" method="post">
          @csrf
          @method('GET')
          <button class="btn btn-success" type="submit">View</button>
      </form>
    </td>
  </tr>
  @endforeach

</tbody>
</table>

@endsection
