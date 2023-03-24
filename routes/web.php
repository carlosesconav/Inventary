<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventaryController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReportController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/admin/users',[UserController::class,'index'])->name('admin.home');
    Route::get('/admin/user/create',[UserController::class,'create'])->name('admin.user.index');
    Route::post('/admin/user/create.store',[UserController::class,'store'])->name('admin.user.create');

    Route::get('/proveedor/inventary',[InventaryController::class,'index'])->name('proveedor.item.index');
    Route::get('/proveedor/inventary/state/{id}',[InventaryController::class,'show'])->name('proveedor.state.index');
    Route::patch('/proveedor/inventary/state.update/{id}',[InventaryController::class,'state'])->name('proveedor.state.check');
    Route::get('/proveedor/inventary/state',[InventaryController::class,'create'])->name('proveedor.item.create');
    Route::post('/proveedor/inventary/create.store',[InventaryController::class,'store'])->name('proveedor.item.store');
    Route::get('/proveedor/inventary/edit/{id}',[InventaryController::class,'edit'])->name('proveedor.item.edit');
    Route::patch('/proveedor/inventary/edit.update/{id}',[InventaryController::class,'update'])->name('proveedor.item.update');
    Route::post('/proveedor/inventary/create.delete/{id}',[InventaryController::class,'destroy'])->name('proveedor.item.delete');

    Route::get('/proveedor/cliente',[ProveedorController::class,'index'])->name('cliente.item.index');
    Route::get('/proveedor/cliente/create',[ProveedorController::class,'create'])->name('cliente.item.create');
    Route::post('/proveedor/cliente/create.store',[ProveedorController::class,'store'])->name('cliente.item.store');
    Route::get('/proveedor/cliente/edit/{id}',[ProveedorController::class,'edit'])->name('cliente.item.edit');
    Route::patch('/proveedor/cliente/edit.update/{id}',[ProveedorController::class,'update'])->name('cliente.item.update');
    Route::post('/proveedor/cliente/create.delete/{id}',[ProveedorController::class,'destroy'])->name('cliente.item.delete');

    Route::get('/report',[ReportController::class,'index'])->name('report.index');
    Route::get('/report/create',[ReportController::class,'create'])->name('report.create');
    Route::post('/report/create.store',[ReportController::class,'store'])->name('report.store');
    Route::get('/report/pdf/{id}',[ReportController::class,'pdf'])->name('report.pdf');
    Route::post('/report/create/{id}',[ReportController::class,'destroy'])->name('report.destroy');

});