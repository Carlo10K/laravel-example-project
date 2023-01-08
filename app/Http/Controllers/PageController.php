<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function blog(){
            //consults a bd
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 1, 'title' => 'Laravel', 'slug' => 'laravel'],
    ];

    return view('blog', ['posts' => $posts]);
    }

    public function post($slug){
        $post = $slug;
        return view('post', ['post' => $post]);
    }

    public function search(Request $request){
        return $request->all();
    }
}
