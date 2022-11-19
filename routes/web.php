<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/crud', [CrudController::class,'index']);


Route::get('/crud_creater',[CrudController::class,'create']);

Route::post('/crud_store',[CrudController::class,'store']);


Route::get('/crud_edit/{id}',[CrudController::class,'edit']);

Route::put('/crud_update/{id}',[CrudController::class,'update']);


Route::get('/crud_delete/{id}',[CrudController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/student', 'Admin\StudentController');
