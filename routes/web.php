<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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


// Route::get('/post/create', function () {
//     DB::table('posts')->insert([
//         'id' => 7,
//         'title' => 'title7',
//         'body' => 'body7'
//     ]);
// });

// Route::get('/post', function () {
//     $post = Post::find(7);
//     return $post->id . "  -> " . $post->title . "  -> " . $post->body;
// });

Route::get('post', [BlogController::class, 'index']);

// Route::get('post/create', function () {
// return view('blog.create');
// });

// Route::post('post/create', [BlogController::class, 'store'])->name('add-post');


Route::get('post/{id}', [BlogController::class, 'get_post']);
