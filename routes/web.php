<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|   
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level',[LevelController::class, 'index']);
Route::get('/kategori',[KategoriController::class, 'index'])->name('kategori');
Route::get('/user',[UserController::class, 'index']);
 

Route::prefix('/kategori')->group(function(){
    Route::get('/',[KategoriController::class, 'index']);
    Route::get('/create',[KategoriController::class, 'create']);
    Route::get('/update/{kategori_id}',[KategoriController::class, 'update']);
    Route::get('/delete/{kategori_id}',[KategoriController::class, 'delete']);
    Route::post('/create/store',[KategoriController::class, 'store']);
    Route::post('/update/store/{kategori_id}',[KategoriController::class, 'store_update']);
});

//Kategori Request Handling

Route::prefix('/user')->group(function(){
    Route::get('/', [UserController::class, 'index']);
    Route::get('/tambah', [UserController::class, 'tambah']);
    Route::post('/tambah_simpan',[UserController::class, 'tambah_simpan']);
    Route::get('ubah/{id}',[UserController::class, 'ubah']);
    Route::get('/ubah_simpan/{id}',[UserController::class, 'ubah_simpan']);
    Route::get('/hapus/{id}',[UserController::class, 'hapus']);   
});
