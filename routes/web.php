<?php

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
Route::get('/', function () {
    return view('index');
})->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('Inupoi')->group(function(){
	Route::get('/Contact', 'frondend\FrondendController@contact')->name('Inupoi.Contact');
	Route::get('/About', 'frondend\FrondendController@about')->name('Inupoi.About');
	Route::get('/Produk', 'frondend\FrondendController@produk')->name('Inupoi.Produk');
	Route::get('/Transaksi', 'frondend\FrondendController@transaksi')->name('Inupoi.Transaksi');
	Route::get('/Detail', 'frondend\FrondendController@detail')->name('Inupoi.Detail');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('Inupoi/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('Inupoi/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::resource('Inupoi', 'FrondendController');
Route::resource('dashboard','dashboardController')->middleware('auth');
Route::resource('kategori','KategoriController')->middleware('auth');
Route::resource('barang','ProdukController')->middleware('auth');
Route::resource('keranjang','KeranjangController')->middleware('auth');
Route::resource('diskon','DiskonController')->middleware('auth');
Route::resource('retur','ReturController')->middleware('auth');
Route::resource('komentar','KomentarController')->middleware('auth');
Route::resource('laporanbarang','LabBarangController')->middleware('auth');
Route::resource('laporankeuangan','LapKeuanganController')->middleware('auth');
Route::resource('laporantransaksi','LapTransaksiController')->middleware('auth');
Route::resource('user','UserController')->middleware('auth');
Route::resource('setting','SettingController')->middleware('auth');
Route::resource('user','UserController')->middleware('auth');
Route::resource('userprofile','UserprofileController')->middleware('auth');
Route::resource('kategori','kategoriController')->middleware('auth');

});

Route::prefix('laporankeuangan')->group(function(){
	Route::get('/Filter', 'LapKeuanganController@filter')->name('Filter.laporankeuangan');
});

Route::resource('Inupoi', 'frondend\FrondendController');
Route::resource('dashboard','backend\dashboardController');
Route::resource('barang','backend\ProdukController');
Route::resource('keranjang','backend\KeranjangController');
Route::resource('diskon','backend\DiskonController');
Route::resource('retur','backend\ReturController');
Route::resource('komentar','backend\KomentarController');
Route::resource('laporanbarang','backend\LabBarangController');
Route::resource('laporankeuangan','backend\LapKeuanganController');
Route::resource('laporantransaksi','backend\LapTransaksiController');
Route::resource('user','backend\UserController');
Route::resource('setting','backend\SettingController');
Route::resource('user','backend\UserController');
Route::resource('userprofile','backend\UserprofileController');
Route::resource('kategori','backend\kategoriController');
Route::resource('fpro', 'frondend\FrontProductController');

