<?php

namespace App\Http\Controllers\api;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\api\PostResource;
use App\Http\Requests\posts\StorePostRequest;


class PostsController extends Controller
{
    public function index(){

        return PostResource::collection(Post::all());
    }
    public function show($post){

        return new PostResource(Post::find($post));
    }
    public function store(StorePostRequest $request)
    {
        $request->validated();
        Post::create($request->all());
        return response()->json([
            'message' => 'Post Created Successfully'
        ],201);
    }
}
