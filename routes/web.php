<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');
Route::get('admin/logout', 'Auth\AdminAuthController@postLogout')->name('admin.logout');

Route::prefix('karyawan')->group( function(){
    Route::get('/home','FrontController@home')->name('home');
    Route::get('/dashboard-karyawan','FrontController@dashboardKaryawan')->name('dashboard.karyawan')->middleware('auth');
    Route::get('/input-formAkses','FrontController@createFormAkses')->name('create.user.formAkses')->middleware('auth');
    Route::post('/input-formAkses','FrontController@storeFormAkses')->name('store.user.formAkses')->middleware('auth');
    Route::get('/input-formRestore','FrontController@createFormRestore')->name('create.user.formRestore')->middleware('auth');
    Route::post('/input-formRestore','FrontController@storeFormRestore')->name('store.user.formRestore')->middleware('auth');
    Route::get('/input-formBackup','FrontController@createFormBackup')->name('create.user.formBackup')->middleware('auth');
    Route::post('/input-formBackup','FrontController@storeFormBackup')->name('store.user.formBackup')->middleware('auth');
    Route::get('/input-formAksesKhusus','FrontController@createFormAksesKhusus')->name('create.user.formAksesKhusus')->middleware('auth');
    Route::post('/input-formAksesKhusus','FrontController@storeFormAksesKhusus')->name('store.user.formAksesKhusus')->middleware('auth');
    Route::get('/input-formNDA','FrontController@createFormNDA')->name('create.user.formNDA')->middleware('auth');
    Route::post('/input-formNDA','FrontController@storeFormNDA')->name('store.user.formNDA')->middleware('auth');
});

Route::prefix('admin')->middleware('auth:admin')->group( function(){
    Route::get('/dashboard','BackController@dashboard')->name('dashboard.index');
    Route::get('index-karyawan','BackController@indexKaryawan')->name('karyawan.index');
    Route::resource('/form-akses','FormAksesController');
    Route::resource('/kategori','KategoriAksesController');
    Route::get('/form-akses-done','BackController@formAksesDone')->name('formAkses.done');
    Route::post('/form-akses/import', 'BackController@importAkses')->name('formAkses.import');
    Route::get('/form-akses/export', 'BackController@exportAkses')->name('formAkses.export');
    Route::resource('/form-restore', 'FormRestoreController');
    Route::get('/formRestore-done','BackController@formRestoreDone')->name('formRestore.done');
    Route::post('/form-restore/import', 'BackController@importRestore')->name('formRestore.import');
    Route::resource('/form-backup', 'FormBackupController');
    Route::get('/formBackup-done','BackController@formBackupDone')->name('formBackup.done');
    Route::post('/form-backup/import', 'BackController@importBackup')->name('formBackup.import');
    Route::resource('/form-akses-khusus', 'FormAksesKhususController');
    Route::get('/formAksesKhusus-done','BackController@formAksesKhususDone')->name('formAksesKhusus.done');
    Route::post('/form-akses-khusus/import', 'BackController@importAksesKhusus')->name('formAksesKhusus.import');
    Route::resource('/form-NDA', 'FormNDAController');
    Route::get('/form-NDA-done','BackController@formNDADone')->name('formNDA.done');
    Route::post('/form-nda/import', 'BackController@importNDA')->name('formNDA.import');
    Route::get('/{report}/print-formAkses', 'BackController@getFormAkses')->name('done.print.formAkses');
    Route::get('/{report}/print-formRestore', 'BackController@getFormRestore')->name('done.print.formRestore');
    Route::get('/{report}/print-formBackup', 'BackController@getFormBackup')->name('done.print.formBackup');
    Route::get('/{report}/print-formAksesKhusus', 'BackController@getFormAksesKhusus')->name('done.print.formAksesKhusus');
    Route::get('/{report}/print-formNDA', 'BackController@getformNDA')->name('done.print.formNDA');
});

