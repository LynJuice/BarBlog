<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatagoryController;
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
    return view('index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
 
// blogs .index
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::resource('catagory', CatagoryController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Route::get('/dashboard', [BlogController::class, 'index'])->name('blogs');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
