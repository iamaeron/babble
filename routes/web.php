<?php

use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Auth;
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
    return view('pages.landing');
})->middleware('guest');

Auth::routes(['verify' => true]);

Route::get('/chats', [ChatsController::class, 'index']);

require __DIR__ . '/auth.php';
