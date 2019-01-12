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

Route::get('/page', function () {
    return view('layouts/home');
});

Route::get('/', function () {
    return view('welcome');
});





Route::get('/absensi', function () {
        return view('absensi.index');
    });


// ------- Middleware Super Admin

Route::group(['middleware' => ['SuperAdmin']], function () {
    
    //masukan segala route super disini
    

    //route untuk menampilkan kegiatan 
    Route::get('/pertemuan', 'PertemuanController@index')->name('pertemuan.index');

    Route::get('/pertemuan_tambah', 'PertemuanController@create')->name('pertemuan.create');

    //routes untuk menampilkan form tambah kegiatan
    Route::get('/kegiatan_create', 'ActivityController@create')->name('kegiatan.create');
    //route untuk menampilkan kegiatan 
    Route::get('/kegiatan', 'ActivityController@index')->name('kegiatan.index');
    //route untuk menambahkan kegiatan 
    Route::post('/kegiatan_store', 'ActivityController@store')->name('kegiatan.store');
    //route untuk menampilkan form edit kegiatan 
    Route::get('/kegiatan_edit/{activity}', 'ActivityController@edit')->name('kegiatan.edit');
    //route untuk update kegiatan 
    Route::patch('/kegiatan_edit/{activity}', 'ActivityController@update')->name('kegiatan.update');
    //route untuk delete kegiatan 
    Route::delete('/kegiatan_delete/{activity}', 'ActivityController@destroy')->name('kegiatan.destroy');
    //route untuk menambahkan jenis pertemuan
    Route::get('/jenispertemuan', 'PertemuanController@indexJenis')->name('jenispertemuan.index');
    Route::get('/jenispertemuan_tambah', 'PertemuanController@createJenis')->name('jenispertemuan.create');

    //route untuk menambahkan pertemuan
    Route::post('/pertemuan_store', 'PertemuanController@store')->name('pertemuan.store');


});



// ------- Middleware Admin Disini

Route::group(['middleware' => ['LoginAuth']], function () {
    
    //route untuk menampilkan kegiatan 
    Route::get('/pertemuan', 'PertemuanController@index')->name('pertemuan.index');

    Route::get('/pertemuan_tambah', 'PertemuanController@create')->name('pertemuan.create');

    //routes untuk menampilkan form tambah kegiatan
    Route::get('/kegiatan_create', 'ActivityController@create')->name('kegiatan.create');
    //route untuk menampilkan kegiatan 
    Route::get('/kegiatan', 'ActivityController@index')->name('kegiatan.index');
    //route untuk menambahkan kegiatan 
    Route::post('/kegiatan_store', 'ActivityController@store')->name('kegiatan.store');
    //route untuk menampilkan form edit kegiatan 
    Route::get('/kegiatan_edit/{activity}', 'ActivityController@edit')->name('kegiatan.edit');
    //route untuk update kegiatan 
    Route::patch('/kegiatan_edit/{activity}', 'ActivityController@update')->name('kegiatan.update');
    //route untuk delete kegiatan 
    Route::delete('/kegiatan_delete/{activity}', 'ActivityController@destroy')->name('kegiatan.destroy');
    //route untuk menambahkan jenis pertemuan
    Route::get('/jenispertemuan', 'PertemuanController@indexJenis')->name('jenispertemuan.index');
    Route::get('/jenispertemuan_tambah', 'PertemuanController@createJenis')->name('jenispertemuan.create');

    Route::get('/jenispertemuan_edit/{jenis_pertemuan}', 'PertemuanController@editJenis')->name('jenispertemuan.edit');
    //route untuk update jenis pertemuan 
    Route::patch('/jenispertemuan_edit/{jenis_pertemuan}', 'PertemuanController@updateJenis')->name('jenispertemuan.update');
    //route untuk delete jenis pertemuan 
    Route::delete('/jenispertemuan_delete/{jenis_pertemuan}', 'PertemuanController@destroyJenis')->name('jenispertemuan.destroy');

    //route untuk menambahkan pertemuan
    Route::post('/pertemuan_store', 'PertemuanController@store')->name('pertemuan.store');

    //routes untuk menampilkan form tambah artikel
    Route::get('/artikel_create', 'ArtikelController@create')->name('artikel.create');
    //route untuk menampilkan artikel 
    Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
    //route untuk menambahkan artikel 
    Route::post('/artikel_store', 'ArtikelController@store')->name('artikel.store');
    //route untuk menampilkan form edit artikel 
    Route::get('/artikel_edit/{artikel}', 'ArtikelController@edit')->name('artikel.edit');
    //route untuk update artikel 
    Route::patch('/artikel_edit/{artikel}', 'ArtikelController@update')->name('artikel.update');
    //route untuk delete artikel 
    Route::delete('/artikel_delete/{artikel}', 'ArtikelController@destroy')->name('artikel.destroy');


});



// ------- Middleware Login Biasa

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/dp_edit', 'DataController@edit')->name('datapribadi.edit');
    Route::get('/dp', 'DataController@index')->name('datapribadi.index');
    Route::post('/dp_store', 'DataController@update')->name('datapribadi.update');

    //route untuk menampilkan kegiatan 
    Route::get('/absensi_pertemuan', 'PertemuanController@indexpertemuan')->name('pertemuan.pertemuan');

    //routes untuk menampilkan form tambah kegiatan
    Route::get('/prestasi_create', 'PrestasiController@create')->name('prestasi.create');
    //route untuk menampilkan kegiatan 
    Route::get('/prestasi', 'PrestasiController@index')->name('prestasi.index');
    //route untuk menambahkan kegiatan 
    Route::post('/prestasi_store', 'PrestasiController@store')->name('prestasi.store');
    //route untuk menampilkan form edit kegiatan 
    Route::get('/prestasi_edit/{prestasi}', 'PrestasiController@edit')->name('prestasi.edit');
    //route untuk update kegiatan 
    Route::patch('/prestasi_edit/{prestasi}', 'PrestasiController@update')->name('prestasi.update');
    //route untuk delete kegiatan 
    Route::delete('/prestasi_delete/{prestasi}', 'PrestasiController@destroy')->name('prestasi.destroy');
    //route untuk absen
    Route::post('/absensi_tambah/{pertemuan}', 'PertemuanController@storeAbsensi')->name('absensi.store');




});

// ------ Batasan Middleware







Route::get('/artikel', function () {
    return view('artikel.index');
});

Route::get('/artikel_tambah', function () {
    return view('artikel.create');
});

Route::get('/rekapabsensi', function () {
    return view('rekap_absensi.index');
});

//Route::get('/artikel_tambah', function () {
//    return view('artikel.create');
//});

//Route::get('/artikel', function () {
//    return view('artikel.index');
//});

//contoh yang sudah ada controllernya Route::get('/datapribadi','')->name('datapribadi.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
