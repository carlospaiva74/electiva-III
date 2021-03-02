<?php

use Illuminate\Support\Facades\Route;

#Controller
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/categorias',CategoriasController::class);
Route::resource('admin/productos',ProductosController::class);
Route::post('admin/productos-fotos',[ProductosController::class,'fotos'])->name('productos.fotos');