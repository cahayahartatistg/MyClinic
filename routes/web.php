<?php

use App\ObatModel;
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






Route::resource('login', 'loginController');
Route::resource('register', 'registerController');

Route::resource('pegawai', 'PegawaiController');
Route::resource('obat', 'ObatController');
Route::resource('wilayah', 'WilayahController');

Route::resource('datapasien', 'datapasien');
Route::resource('datatindakan', 'datatindakan');
Route::resource('datatransaksi', 'datatransaksi');

Route::middleware(['admin'])->group(function () {
});
Route::middleware(['user'])->group(function () {
});
Route::view('user', 'layout/boostrap');
Route::resource('pasien', 'PasienController');
Route::resource('tindakan', 'TindakanController');
Route::resource('transaksi', 'transaksicontroller');
Route::resource('keranjang', 'keranjang');

Route::get('logout', 'logincontroller@logout');
Route::get('/home', 'homecontroller@index');

Route::get('/tambah-keranjang/{id_obat}', function($id_obat){
    $obat = ObatModel::find($id_obat);
    return view('Keranjang.keranjang', ['obat'=> $obat]);
})->name('tambah-keranjang');

Route::get('/edit-keranjang/{id_obat}', function($id_obat){
    $obat = ObatModel::find($id_obat);
    return view('Keranjang.edit', ['obat'=> $obat]);
})->name('edit-keranjang');


Route::get('/tampilan', function () {
});
return view('tampilan.index');



// Route::get('/login', function () {
//     return view('Login.login');
// });