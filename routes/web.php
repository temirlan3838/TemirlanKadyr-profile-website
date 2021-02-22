<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('main');
});

Route::get('/exp', function () {
    return view('experience');
})->name('exp');

Route::get('/foot', function () {
    return view('footer');
})->name('foot');


Route::get('/post/create', function () {
    DB::table('posts')->insert([
        'id' => 1,
        'title' => 'postTitleExample',
        'body' => 'bodyExample'
    ]);
});

Route::get('/post', function () {
    $post = Post::find(1);
    return $post->id . "  -> " . $post->title . "  -> " . $post->body . " ->  " . $post->timestamps;
});
