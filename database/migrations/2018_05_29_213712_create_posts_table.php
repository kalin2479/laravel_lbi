<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); // string=> se usa para cadenas de texto relativamente pequeños
            $table->mediumText('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable(); //fecha de publicacion y que sea nulo
            // Creamos la relacion de uno a muchos es decir una categoria puede tener uno o muchos posts
            $table->unsignedInteger('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
