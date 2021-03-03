<?php

use Illuminate\Support\Facades\Route;

#Controller
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;

use App\Http\Controllers\PortalController;
use App\Http\Controllers\CarritoController;


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

Route::get('/',[PortalController::class,'index'])->name('portal.index');
Route::get('producto/{id}',[PortalController::class,'single'])->name('portal.producto');

Route::get('carrito',[CarritoController::class,'index'])->name('carrito.index');
Route::post('cart/add',[CarritoController::class,'add'])->name('carrito.add');
Route::post('cart/remove',[CarritoController::class,'remove'])->name('carrito.remove');

Auth::routes();
Route::middleware(['auth'])->group(function(){

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	Route::resource('admin/categorias',CategoriasController::class);
	Route::resource('admin/productos',ProductosController::class);
	Route::post('admin/productos-fotos',[ProductosController::class,'fotos'])->name('productos.fotos');


});	

