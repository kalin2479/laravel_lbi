<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

//
// Route::get('home',function(){
//   return view('admin.dashboard');
// })->middleware('auth');

// Vamos a crear un grupo en donde todas las rutas van ha estar precedidas por admin
Route::group([
  'prefix' => 'admin',
  'namespace' => 'Admin',
  'middleware' => 'auth'],
function(){
  Route::get('/', 'AdminController@index')->name('dashboard');
  // Route::get('posts', 'Admin\PostsController@index');
  Route::get('posts', 'PostsController@index')->name('admin.posts.index'); // le estamos dando un nombre a la ruta
  // Colocamos todas las rutas del administrador
  Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');

});




Route::get('posts',function(){
  //estamos indicando que me traiga todos los post
  // Hay que tener en cuenta que app/Post.php se tiene el namespace App
  // por lo tanto no podemos llamarlo solamente Post sino que tenemos que
  // llamarlo App\Post
  return App\Post::all();
});

// Para crear un sistema de autentificacion deberemos ejecutar el siguiente comando,
// se recomienda que esto se haga al inicio del proyecto porque genera una serie de archivos
// y no genere despues conflictos.
// php artisan make:auth --views

// Esto nos genera las rutas necesarias para login, registro y recuperacion de pass

// Route::auth();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
