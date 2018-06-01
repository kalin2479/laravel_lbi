<?php

use Carbon\Carbon;

// Agregamos el namespace para poder usar el POST.
use App\Post;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Para que limpie la tabla POST
      Post::truncate();
      // Aqui es lo que vamos a crear un par de post de prueba
      $post = new Post;
      $post->title = "Mi primer post";
      $post->excerpt = "Extracto de mi primer post";
      // aqui se puede tener etiquetas html
      $post->body = "<p>Contenido de mi primer post</p>";
      //Aca podemos utilizar Carbon para que nos agregue la fecha actual
      //Carbon::now()
      // Si utilizamos Carbon debemos indicar la direccion completa de la siguiente manera:
      // use Carbon\Carbon;
      // Si se desea cambiar un poco la fecha lo que podemos es utilizar el siguiente comando:
      // subDay() asi le subtraemos un dia pero si queremos mas dias utilizamos el siguiente metodo:
      // subDays(#dias)
      $post->published_at = Carbon::now()->subDay();
      // Los campos created y updated se generan de manera automatica
      $post->category_id = 3;
      // Finalmente guardamos los datos
      $post->save();

      $post = new Post;
      $post->title = "Mi segundo post";
      $post->excerpt = "Extracto de mi segundo post";
      $post->body = "<p>Contenido de mi segundo post</p>";
      $post->published_at = Carbon::now()->subDays(4);
      $post->category_id = 1;
      $post->save();

      $post = new Post;
      $post->title = "Mi tercer post";
      $post->excerpt = "Extracto de mi tercer post";
      $post->body = "<p>Contenido de mi tercer post</p>";
      $post->published_at = Carbon::now()->subDay();
      $post->category_id = 2;
      $post->save();

      $post = new Post;
      $post->title = "Mi cuarto post";
      $post->excerpt = "Extracto de mi cuarto post";
      $post->body = "<p>Contenido de mi cuarto post</p>";
      $post->published_at = Carbon::now()->subDays(12);
      $post->category_id = 1;
      $post->save();
    }
}
