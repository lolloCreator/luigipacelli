<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtentiController;
use App\Http\Controllers\PostsController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    $passed = App\Portfoliocategory::with('portfolios')->get();
    return view('index', compact('passed'));
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/db', [UtentiController::class, 'dbCheck']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// PORTFOLIO //

/*
Route::get('/servizi-blog', function () {
    $posts = App\Models\Post::with('categoria')->get();
    return view('portfolio.blog', compact('posts'));
});
*/


//POST del BLOG
Route::post('contatto', 'App\Http\Controllers\ContattiController@store'); 
Route::get('/blog', 'App\Http\Controllers\PostsController@index'); 
Route::get('/blog/s', 'App\Http\Controllers\PostsController@search')->name('search');

Route::get('post/{slug}', function($slug){
	$post = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
	return view('portfolio.post', compact('post'));
});
//CATEGORIE del BLOG





//Mail
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Ciao da Luigi Pacelli',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('luigipacellienel@gmail.com')->send(new \App\Mail\myMail($details));
   
    dd("Email is Sent.");
});