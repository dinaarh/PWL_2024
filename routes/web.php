<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: ". $commentId;
});

Route::get('/articles/{id}', function ($articlesId) {
    return 'Halaman artikel dengan ID ' . $articlesId;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' . $name;
});

Route::get('/user/{name?}', function ($name='Dinaa') {
    return 'Nama saya ' . $name;
});

