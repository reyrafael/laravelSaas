<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChatController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/chat', function () {
    return Inertia::render('Chat/container');
})->name('chat');
Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return Inertia::render('User/container');
})->name('user');

Route::middleware('auth:sanctum')->get('/chat/rooms',[ChatController::class,'rooms']);
Route::middleware('auth:sanctum')->get('/chat/room/{roomId}/messages',[ChatController::class,'messages']);
Route::middleware('auth:sanctum')->post('/chat/room/{roomId}/message',[ChatController::class,'newMessage']);
Route::get('/services',function(){
    return Inertia::render('Services');
})->name('services');
Route::get('/achievements',function(){
    return Inertia::render('Achievements');
})->name('achievements');
Route::get('/careers',function(){
    return Inertia::render('Careers');
})->name('careers');