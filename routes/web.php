<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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
    return view('index', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});
Route::get('/service', function () {
    return view('service', [
        'title' => 'Service'
    ]);
});
Route::get('/animal', function () {
    return view('animal', [
        'title' => 'Animal'
    ]);
});
Route::get('/membership', function () {
    return view('membership', [
        'title' => 'Membership'
    ]);
});
Route::get('/visiting', function () {
    return view('visiting', [
        'title' => 'Visiting'
    ]);
});
Route::get('/testimonial', function () {
    return view('testimonial', [
        'title' => 'Tesetimonial'
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

Route::post('/contacts', [AdminController::class, 'send']);

Route::prefix('/')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index']);
    Route::get('mails', [AdminController::class, 'mails']);
    Route::get('mail/{contact:id}', [AdminController::class, 'mail']);
    Route::delete('mail/{contact:id}', [AdminController::class, 'delete']);
})->middleware('auth');


// Auth
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth');
