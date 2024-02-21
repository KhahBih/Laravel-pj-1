<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;

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

Route::get('/home', HomeController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');
Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', function(){
    return "<h1>contact</h1>";
})-> name('aaa');

Route::get('/contact/{id}', function($id){
    return $id;
});



Route::resource('blog', BlogController::class);
