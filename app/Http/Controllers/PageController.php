<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    //
    public function home(Request $request)
    {
        $search = $request->search;

        //$posts = Post::latest('id')->paginate();

        $posts = Post::where('title', 'LIKE', "%{$search}%")->latest()->paginate();
        return view('home', ['posts' => $posts]);
    }

    /*
    public function blog()
    {
        consults a bd
        $posts = Post::get();   //traer todos los registros
        $post = Post::first();  //trae el primer registro
        $post = Post::find(25);  //encontrar por id

        $posts = Post::latest('id')->paginate(); /*trae todos los registros de la base de datos, y los ordena
        de forma descendente, adicional, podemos utilizar el metodo paginate()
        para realizar la paginacion, solo que debemos incluir en nuestra vista la
        propiedad links para que podamos visualizar los controles de paginacion*/
        //dd($post); //para imprimir dev

    /* return view('blog', );
    }*/


    public function post(Post $post)
    {

        return view('post', ['post' => $post]);
    }

    /*
    public function search(Request $request)
    {
        return $request->all();
    }
    */
}
