<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return 'AHMAD WILDAN ARKAN';
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact', ['name' => 'Ahmad Wildan Arkan', 'instagram' => '@wildandev']);

Route::redirect('/contact', '/kontak');

Route::get('/product/{id}', function ($id) {
    return view('product', ['id' => $id]);
});

Route::prefix('admin')->group(function () {
    Route::get('/profile', function () {
        return 'profil admin';
    });
    Route::get('/about', function () {
        return 'about admin';
    });
    Route::get('/contact', function () {
        return 'contact admin';
    });
    Route::get('/gallery', function () {
        return 'gallery admin';
    });
});