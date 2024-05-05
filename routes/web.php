<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

Route::get('/', [HomeController:: class,  'index']);
Route::post('/posts',[PostController::class, 'index']);
Route::post('/posts/create',[PostController::class, 'create']);
Route::get('/posts/post-1', function () {
    return view('welcome');
});
Route::get('/posts/{post}', [PostController::class,'show']);




Route::get('prueva',function(){
$post = new Post;
//$post -> title='titulo de prueba';
//$post ->content = 'contenido';
//$post->categoria='Categoria';
//$post-> save();
//return  $post;
//actualizar  registro
//$post = Post::find(1);
//$post = Post::Where('title','Titulo de ')-first();
//$post->categoria ='categoria web'
//$post->save
// recuperar  varios registrs
/*
 
 
 $posts=Post::all();

  
 $posts = Post ::where('id'),'>=','2')

 listar
 $posts = Post ::orderBy('id','desc')
 ->select('id','title','categria')
 ->take(2)
 ->get();
 */

 ///deleted
 //$post->deleted();

 /*return $post->published_at->format('Y-m-d');

 return $post;*/
 //many to many
 //$post->tags()->attach([1,2])
 //$post->tags()->detach([1,2]) eliminada  etiqueta
//$post->tags()->sync([1,2])elimina  si existe la etiqueta fucion  actualizar
 //return "etiquetas agregadas;

 //return $user->profile->address tabla address modificada  asociada   con perfil exaple
 
});