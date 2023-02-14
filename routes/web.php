<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\siswa;
use App\Http\Controllers\SiswaController;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Models\tabunganmasuk;
use App\Http\Controllers\TabunganmasukController;
use App\Models\tabungankeluar;
use App\Http\Controllers\TabungankeluarController;
use App\Models\rekapitulasitabungan;
use App\Http\Controllers\RekapitulasitabunganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('example(index)');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Route siswa

Route::get('/siswa', [SiswaController::class, 'index'])->middleware('auth');
// create
Route::get('/siswacreate', [SiswaController::class, 'create'])->middleware('auth');
Route::post('/siswastore', [SiswaController::class, 'store']);
//  read
Route::get('/siswashow{id}', [SiswaController::class, 'show'])->middleware('auth');
// update
Route::get('/siswaedit{id}', [SiswaController::class, 'edit'])->middleware('auth');
Route::post('/siswaupdate{id}', [SiswaController::class, 'update']);
// delete
Route::get('/siswadelete{id}', [SiswaController::class, 'destroy']);


// Route user

Route::get('/user', [UserController::class, 'index'])->middleware('auth');
// create
Route::get('/usercreate', [UserController::class, 'create'])->middleware('auth');
Route::post('/userstore', [UserController::class, 'store']);
//  read
Route::get('/usershow{id}', [UserController::class, 'show'])->middleware('auth');
// update
Route::get('/useredit{id}', [UserController::class, 'edit'])->middleware('auth');
Route::post('/userupdate{id}', [UserController::class, 'update']);
// delete
Route::get('/userdelete{id}', [UserController::class, 'destroy']);


// Route tabunganmasuk

Route::get('/tabunganmasuk', [TabunganmasukController::class, 'index'])->middleware('auth');
// create
Route::get('/tabunganmasukcreate', [TabunganmasukController::class, 'create'])->middleware('auth');
Route::post('/tabunganmasukstore', [TabunganmasukController::class, 'store']);
//  read
Route::get('/tabunganmasukshow{id}', [TabunganmasukController::class, 'show'])->middleware('auth');
// update
Route::get('/tabunganmasukedit{id}', [TabunganmasukController::class, 'edit'])->middleware('auth');
Route::post('/tabunganmasukupdate{id}', [TabunganmasukController::class, 'update']);
// delete
Route::get('/tabunganmasukdelete{id}', [TabunganmasukController::class, 'destroy']);


// Route tabunganmasuk

Route::get('/tabungankeluar', [TabungankeluarController::class, 'index'])->middleware('auth');
// create
Route::get('/tabungankeluarcreate', [TabungankeluarController::class, 'create'])->middleware('auth');
Route::post('/tabungankeluarstore', [TabungankeluarController::class, 'store']);
//  read
Route::get('/tabungankeluarshow{id}', [TabungankeluarController::class, 'show'])->middleware('auth');
// update
Route::get('/tabungankeluaredit{id}', [TabungankeluarController::class, 'edit'])->middleware('auth');
Route::post('/tabungankeluarupdate{id}', [TabungankeluarController::class, 'update'])->middleware('auth');
// delete
Route::get('/tabungankeluardelete{id}', [TabungankeluarController::class, 'destroy']);


// Route rekapitulasi tabungan

Route::get('/rekapitulasitabungan', [RekapitulasitabunganController::class, 'index'])->middleware('auth');
Route::get('/rekapcetak', [RekapitulasitabunganController::class, 'cetak'])->middleware('auth');

// Route register

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route login 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'autenticate']);

// Route logout

Route::get('/logout', [LoginController::class, 'logout']);