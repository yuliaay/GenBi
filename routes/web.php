<?php
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/', 'HomeController@home')->name('home');


Route::get('/absensi', function () {
        return view('absensi.index');
    });


// ------- Middleware Super Admin

Route::group(['middleware' => ['SuperAdmin']], function () {
    
    //masukan segala route super disini
    

    //route untuk menampilkan kegiatan 
    Route::get('/pertemuan', 'PertemuanController@index')->name('pertemuan.index');

    Route::get('/pertemuan_tambah', 'PertemuanController@create')->name('pertemuan.create');
    Route::get('/pertemuan/get_datatable', 'PertemuanController@get_datatable_pertemuan')->name('get_pertemuan_datatable');


    //route rekapabsensi 
    Route::get('/rekap_absensi', 'AbsensiController@index')->name('rekap_absensi.index');
    Route::get('/rekap_absensi/getJoinsData', 'AbsensiController@getJoinsData')->name('getJoinsData_absensi');
    Route::get('/download_kegiatan', 'ActivityController@export')->name('download_kegiatan.export');

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
    Route::post('/jenispertemuan_store', 'PertemuanController@storeJenis')->name('jenispertemuan.store');
    Route::get('/jenispertemuan_edit/{jenis_pertemuan}', 'PertemuanController@editJenis')->name('jenispertemuan.edit');
    //route untuk update jenis pertemuan 
    Route::patch('/jenispertemuan_edit/{jenis_pertemuan}', 'PertemuanController@updateJenis')->name('jenispertemuan.update');
    Route::get('/jenispertemuan_destroy', 'PertemuanController@destroyJenis')->name('jenispertemuan.destroy');
    Route::get('/jenispertemuan/get_datatable', 'PertemuanController@get_datatable')->name('get_jenispertemuan_datatable');

    //route prestasi
    Route::get('/prestasi_genbi', 'PrestasiController@index')->name('prestasi.index');
    Route::get('/download_prestasi', 'PrestasiController@export')->name('download_prestasi.export');
    //route data user
    Route::get('/user/get_datatable', 'DataController@get_datatable')->name('get_datauser_datatable');
    Route::get('/user', 'DataController@index_user')->name('datauser.index');
    //route user genbi
    Route::get('/user_genbi/getJoinsData', 'DataController@getJoinsData')->name('getJoinsData_genbi');
    Route::get('/user_genbi', 'DataController@index_genbi')->name('datauser.index_genbi');

    Route::get('/user_edit/{user}', 'DataController@editAdmin')->name('datauser.edit');
    Route::patch('/user_edit/{user}', 'DataController@updateAdmin')->name('datauser.update');

    Route::delete('/user/{users}', 'DataController@destroyUser')->name('user.destroy');
    Route::get('/user/{user}', 'DataController@show')->name('user.show');

    Route::get('/download_user', 'DataController@export')->name('download_user.export');
    Route::get('/download_absensi', 'AbsensiController@export')->name('download_absensi.export');
    Route::get('/download_data', 'DataController@export_data')->name('download_data.export');
    


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

    //routes untuk menampilkan data table
    Route::get('/kegiatan/get_datatable', 'ActivityController@get_datatable')->name('get_kegiatan_datatable');
    Route::get('/artikel/get_datatable', 'ArtikelController@get_datatable')->name('get_artikel_datatable');
    
    
    Route::get('/absensi/get_datatable', 'ArtikelController@get_datatable')->name('get_absensi_datatable');

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
    Route::post('/jenispertemuan_store', 'PertemuanController@storeJenis')->name('jenispertemuan.store');
    Route::get('/jenispertemuan_edit/{jenis_pertemuan}', 'PertemuanController@editJenis')->name('jenispertemuan.edit');
    //route untuk update jenis pertemuan 
    Route::patch('/jenispertemuan_edit/{jenis_pertemuan}', 'PertemuanController@updateJenis')->name('jenispertemuan.update');
    //route untuk delete jenis pertemuan 
    Route::delete('/jenispertemuan_delete/{jenis_pertemuan}', 'PertemuanController@destroyJenis')->name('jenispertemuan.destroy');
    Route::get('/jenispertemuan/get_datatable', 'PertemuanController@get_datatable')->name('get_jenispertemuan_datatable');

    //route untuk menambahkan pertemuan
    Route::post('/pertemuan_store', 'PertemuanController@store')->name('pertemuan.store');
    Route::get('/pertemuan/get_datatable', 'PertemuanController@get_datatable_pertemuan')->name('get_pertemuan_datatable');

    Route::get('/artikel/{artikel}', 'ArtikelController@show')->name('artikel.show');

    //routes untuk menampilkan form tambah artikel
    Route::get('/artikel_create', 'ArtikelController@create')->name('artikel.create');
    Route::get('/artikel_all', 'ArtikelController@all')->name('artikel.all');
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
    
    Route::get('/dp_create', 'DataController@create')->name('datapribadi.create');
    Route::get('/dp', 'DataController@index')->name('datapribadi.index');
    Route::post('/dp_store', 'DataController@store')->name('datapribadi.store');
     Route::get('/dp_edit', 'DataController@edit')->name('datapribadi.edit');
    //route untuk update artikel 
    Route::patch('/dp_edit', 'DataController@update')->name('datapribadi.update');

    //route untuk menampilkan kegiatan 
    Route::get('/absensi_pertemuan', 'PertemuanController@indexpertemuan')->name('pertemuan.pertemuan');

    //routes untuk menampilkan form tambah kegiatan
    Route::get('/prestasi_create', 'PrestasiController@create')->name('prestasi.create');
    //route untuk menampilkan kegiatan 
    
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
    Route::get('/prestasi/get_datatable', 'PrestasiController@get_datatable')->name('get_prestasi_datatable');
    Route::get('/prestasi_individu/get_datatable', 'PrestasiController@get_datatable_id')->name('get_prestasi_datatable_id');
    Route::get('/prestasi_individu', 'PrestasiController@index_id')->name('prestasi.index_id');



});

// ------ Batasan Middleware







// Route::get('/artikel', function () {
//     return view('artikel.index');
// });

// Route::get('/artikel_tambah', function () {
//     return view('artikel.create');
// });

//Route::get('/rekapabsensi', function () {
//    return view('rekap_absensi.index');
//});

//Route::get('/artikel_tambah', function () {
//    return view('artikel.create');
//});

//Route::get('/artikel', function () {
//    return view('artikel.index');
//});

//contoh yang sudah ada controllernya Route::get('/datapribadi','')->name('datapribadi.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
