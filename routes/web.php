<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/', [AuthController::class, 'showMaster'])->name('master');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('show.login');
Route::post('login', [AuthController::class, 'login'])->name('user.login');
Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');

//Route::group(['middleware' => 'checkLogin'], fun  ction () {
//Route::middleware('auth')->prefix('test')->group(function () {
Route::prefix('customer')->group(function () {
    Route::get('index', [UserController::class, 'index'])->name('user.index');
    Route::get('{id}/shows', [UserController::class, 'show'])->name('user.show');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::get('{id}/edits', [UserController::class, 'edit'])->name('user.edit');
//    });

});


//Route::get('index', [TaskController::class, 'index'])->name('tasks.index');
Route::prefix('tasks')->group(function () {
    Route::get('index', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('create', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('{taskId}/show', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('{taskId}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('{taskID}/update', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('{photo}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
});
//});
