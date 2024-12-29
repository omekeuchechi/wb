<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

# pages that do not need to be authenticated

Route::get('/', [PagesController::class, 'index'])->name('/');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/{item}', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


// all admin Route

Route::prefix('admin')->middleware('auth', 'isAdmin')->group( function() {
    Route::get('/index', [App\Http\Controllers\admin\AdminController::class, 'index']);
});