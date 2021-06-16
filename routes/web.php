<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::prefix('customer')->group(function () {
    Route::get('index', [UserController::class,'index']);
    Route::get('{id}/show', [UserController::class, 'show'])->name('user.show');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('user.edit');
});

Route::prefix('tasks')->group(function () {
    Route::get('index', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('{taskId}/show', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('{taskId}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('{taskID}/update', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('{photo}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
});
