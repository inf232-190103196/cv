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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');    
})->name('home');

Route::get('/skills', function () {
    return view('skills');    
})->name('skills');

Route::get('/contact', function () {
    return view('contact');    
})->name('contact'); 

Route::get('/other', function () {
    return "other";
});
Route::get('post/add', function(){
    DB::table('post')->insert([
        'title' => 'My title',
        'body' => 'My body'
    ]);
});
Route::get('post', function(){
    $post = Post::find(1);
    return $post->title;
});
