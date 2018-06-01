<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  // Los seeder nos ayudan a que cada vez refresquemos nuestra base de datos
  // lo que va hacer es que nos llene nuevamente nuestro DB sin ningun
  // problema

  // Para crear un seeder debemos ejecutar el siguiente comando:
  // php artisan make:seeder nameTableDBSeeder (PostsTableSeeder)
  // es una convenciòn

  // Para ejecutar los seed debemos usar el siguiente comando:
  // php artisan db:seed
  // Si ejecutamos esa instruccion de comando lo que va hacer es que cada vez que lo ejecutemos nos agregue añada un registro
  // y no queremos eso sino que nos refresca nuevamente los registros. Para ello debemos hacer un truncate en cada seed que estamos
  // instanciando, para luego borrar los datos de la tabla y luego insertamos los registros

  // Ahora si queremos hacer un refresh migrate y ejecutar el seed en una sola linea de comando debemos ejecutar lo siguiente:
  // php artisan migrate:refresh --seed


  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Desde la terminal ejecutamos esta clase y a su vez ejecutara todos los
    // seeder que se encuentran dentro del metodo run
    $this->call(PostsTableSeeder::class);
    $this->call(CategoriesTableSeeder::class);
  }
}
