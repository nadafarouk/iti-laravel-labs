<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{


    public function create(){

        return view('posts.create');
     }
    public function store(){
        $data = request()->all();
        Post::create($data);
        return view('posts.create');
     }



}
