<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Hacemos esto para indicar que este variable debe tomarlo como una instacia de carbon
    protected $dates = ['published_at'];

    // Creamos un nuevo metodo para crear la relacion post con categoria
    // como el post tiene una categoria le llamamos en singular es decir category
    // para luego cuando accedamos al post podamos acceder al nombre de la siguiente manera
    // $post->category->name
    public function category(){
      // Aqui tenemos que retornar el objeto es decir el post actual con la siguiente instruccion
      // belongsTo() = pertecene a => y a quien pertenece en este caso a una Category::class
      // recuerda como estamos dentro de namespace no es necesario colocarle la direccion completa
      // es decir no es necesario colocar en la parte superior la siguiente instruccion
      // use App\Category;
      // Aqui estamos diciendo que el post pertence a la categoria pero en la migracion post
      // no hay ningun campo para referirnos a esa categoria, por lo tanto iremos
      // a la migraion del post para crear un campo que haga esa relacion.
      return $this->belongsTo(Category::class);
    }

    // Ahora para relacionar el post con la tabla post_tag crearemos una nueva relacion de muchos a muchos
    public function tags(){
      // belongsToMany => significa pertence a muchos, y la relacion es con la clase Tag
      return $this->belongsToMany(Tag::class);
    }
}
