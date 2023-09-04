<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [PostController::class, 'index'])->name('home');

//Route::get('/', [Index::class])->name('home');


Route::get('/', \App\Http\Livewire\Index::class)->name('home');
//Route::get('/', function (){
//    return view('test');
//})->name('home');

Route::get('/blog-post/{id}', \App\Http\Livewire\BlogPost::class)->name('blog-post');

//Route::get('/single-blog-post/{id}', \App\Http\Livewire\SingleBlogPost::class)->name('single-blog-post');

//make route to test view
Route::get('/single-blog-post/{id}', function ($id  ) {
    $post = Post::query()->where('id', $id)->first();
    return view('get-single-blog-post', ['id' => $id , 'posts' => $post, 'categories' => $post->categories]);
});
