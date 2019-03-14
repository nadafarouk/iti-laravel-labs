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
        return redirect()->route('posts.index');
     }
     public function index(){


        return view('posts.index',[
            'posts'=> Post::all(),
        ]);
     }
     public function edit($post){
        return view('posts.edit',[
            'post'=> Post::find($post),
        ]);
     }
     public function update($post){
        $edited = request()->all();
        $element=Post::find($post);
        $element->post_title = request()->get('post_title');
        $element->post_text = request()->get('post_text');
        $element->save();
        return redirect()->route('posts.index');
     }



}
