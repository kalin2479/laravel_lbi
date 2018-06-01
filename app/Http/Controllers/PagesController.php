<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// lo importamos de la siguiente manera
use App\Post;

class PagesController extends Controller
{
  public function home()
  {
    // Aqui vamos agregar una variable con todos los post
    // $posts = App\Post::all();
    // Para ordenar los post por la fecha de creacion utilizamos el metodo latest: App\Post::latest()
    // Pero si queremos que se ordene por su fecha de publicacion entonces hacemos lo siguiente: App\Post::latest('published_at') y llamamos al metodo get
    $posts = Post::latest('published_at')->get();
    // Una forma es utilizando el metodo view('welcome')->with(nombre variable, el valor de la variable)
    // Otra forma es compact(asignando entre comillas el valor de la variable)
    // es decir me manda un array de la siguiente manera ['posts' => $posts]
    return view('welcome',compact('posts'));
  }
}
