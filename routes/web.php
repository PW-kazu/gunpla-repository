<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [ModellerController::class,'index']);
Route::post('/', [ModellerController::class, 'post']);
Route::get('/register', [RegisterController::class,'register'])->name('modeller.register');
Route::post('/store', [RegisterController::class,'store'])->name('modeller.store');

Route::get('/display', [ModellerController::class, 'add']);
Route::post('/display', [ModellerController::class, 'create']);

Route::prefix('display')->group(function () {//以下を追記
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});

Route::get('/relation', [ModellerController::class,'relate']);
Route::get('/verror', [TestController::class, 'verror']);
