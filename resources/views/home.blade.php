@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome back</h3>
                    <div>
                            <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            To view all posts
                                            <a href="{{route('posts.index')}}"><button class="btn btn-primary">view all</button></a>
                                        </td>
                                        <td>
                                            To add a new post
                                            <a href="{{route('posts.create')}}"><button  class="btn btn-primary">add new</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
