<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


// Halaman Beranda
Route::get('/', function () {
 return view('beranda');
})->name('beranda');
// Halaman Login
Route::get('/login', function () {
 return view('login');
})->name('login');
// Proses Login
Route::post('/login', function (Request $request) {
 $username = $request->input('username');
 $password = $request->input('password');
 if ($username === 'admin' && $password === '12345') {
 return redirect()->route('produk');
 } else {
 return back()->with('error', 'Username atau Password salah!');
 }
})->name('login.process');
// Halaman Produk Penjualan
Route::get('/produk', function () {
 $produk = [
 ['id' => 1, 'nama' => 'Vreese Glow Whitening Body Lotion 100ml', 'harga' => 'Rp 85.000', 'foto' =>
 'images/produk_bodylotion.jpg', 'deskripsi' => 'Whitening Body Lotion Vreese Glow kandungannya terdiri dari, Niacinemade, Alpha Arbutin, Collagen, Glutathione, Dna Salmon, Titanium Deoxide.'],
['id' => 2, 'nama' => 'Vreese Glow Booster Serum Whitening Premium', 'harga' => 'Rp 85.000', 'foto' =>
'images/produk_serum.jpg', 'deskripsi' => 'Gunakan Booster Serum mix Lotion/Booster hanya pada malam hari saja, sebelum tidur. Gunakan secada rutin untuk hasil yang maksimal.'],
 ['id' => 3, 'nama' => 'Vreese Gl ow Booster Extra Whitening', 'harga' => '110.000', 'foto' =>
'images/produk_booster.jpg', 'deskripsi' => 'Kenalin salah satu produk Best Seller karena ini adalah kunci dari serangkaian produk vreese glow, yaitu Booster Extra Whitening yang formulasinya lebih cepat memutihkan 10x daripada booster lain.'],
 ['id' => 4, 'nama' => 'Vreese Glow Paket Extra Whitening Series', 'harga' => 'Rp 255.000', 'foto' =>
'images/produk_series.jpg', 'deskripsi' => 'Produk whitening series dapat memutihkan hanya dalam waktu 14 hari, tentunya dengan pemakaian yang rutin ya beautis.. nggak hanya membuat kulit semakin putih saja, kulit kamu bisa lebih sehat, lembab, dan halus.'],
['id' => 5, 'nama' => 'Vreese Glow Paket Bundling (SPESIAL BIRTHDAY OWNER)', 'harga' => 'Rp 299.000', 'foto' =>
'images/produk_bundling.jpg', 'deskripsi' => 'PAKET BUNDLING HANYA BERLAKU DI BULAN NOVEMBER SAJA, BURUAN CHEKOUT SEKARANG JUGA !!!'],
['id' => 6, 'nama' => 'Vreese Glow BOOSTER SERUM + BOOSTER EXTRA WHITENING', 'harga' => 'Rp 195.000', 'foto' =>
'images/produk_serumbooster.jpg', 'deskripsi' => 'DAPATKAN KUPON UNDIAN UANG TUNAI SENILAI 150.000, untuk 10 orang pemenang!!!'],
 ];
 return view('produk', compact('produk'));
})->name('produk');
// Halaman Detail Pembelian
Route::get('/produk/{id}', function ($id) {
 $produk = [
 1 => ['nama' => 'Vreese Glow Whitening Body Lotion 100ml', 'harga' => 'Rp 85.000', 'foto' =>
'images/produk_bodylotion.jpg', 'deskripsi' => 'Whitening Body Lotion Vreese Glow kandungannya terdiri dari, Niacinemade, Alpha Arbutin, Collagen, Glutathione, Dna Salmon, Titanium Deoxide.'],
 2 => ['nama' => 'Vreese Glow Booster Serum Whitening Premium', 'harga' => 'Rp 85.000', 'foto' =>
'images/produk_serum.jpg', 'deskripsi' => 'Gunakan Booster Serum mix Lotion/Booster hanya pada malam hari saja, sebelum tidur. Gunakan secada rutin untuk hasil yang maksimal.'],
 3 => ['nama' => 'Vreese Glow Booster Extra Whitening', 'harga' => 'Rp 110.000', 'foto' =>
'images/produk_booster.jpg', 'deskripsi' => 'Kenalin salah satu produk Best Seller karena ini adalah kunci dari serangkaian produk vreese glow, yaitu Booster Extra Whitening yang formulasinya lebih cepat memutihkan 10x daripada booster lain.'],
 4 => ['nama' => 'Vreese Glow Paket Extra Whitening Series', 'harga' => 'Rp 255.000', 'foto' =>
'images/produk_series.jpg', 'deskripsi' => 'Produk whitening series dapat memutihkan hanya dalam waktu 14 hari, tentunya dengan pemakaian yang rutin ya beautis.. nggak hanya membuat kulit semakin putih saja, kulit kamu bisa lebih sehat, lembab, dan halus.'],
 5 => ['nama' => 'Vreese Glow Paket Bundling (SPESIAL BIRTHDAY OWNER)', 'harga' => 'Rp 299.000', 'foto' =>
'images/produk_bundling.jpg', 'deskripsi' => 'PAKET BUNDLING HANYA BERLAKU DI BULAN NOVEMBER SAJA, BURUAN CHEKOUT SEKARANG JUGA !!!'],
 6 => ['nama' => 'Vreese Glow BOOSTER SERUM + BOOSTER EXTRA WHITENING', 'harga' => 'Rp 195.000', 'foto' =>
'images/produk_serumbooster.jpg', 'deskripsi' => 'DAPATKAN KUPON UNDIAN UANG TUNAI SENILAI 150.000, untuk 10 orang pemenang!!!'],
 ];
 // Pastikan ID valid
 if (!array_key_exists($id, $produk)) {
 abort(404, 'Produk tidak ditemukan');
 }
 $detail = $produk[$id];
 return view('detail', compact('detail'));
})->name('produk.detail');
// Logout
Route::get('/logout', function () {
 return redirect()->route('beranda');
})->name('logout');