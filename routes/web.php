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
});

Route::prefix('admin')->middleware('auth:admin')->group( function(){
    Route::get('/dashboard','BackController@dashboard')->name('dashboard.index');
    Route::get('index-karyawan','BackController@indexKaryawan')->name('karyawan.index');
    Route::resource('/form-akses','FormAksesController');
    Route::resource('/kategori','KategoriAksesController');
    Route::get('/form-akses-done','BackController@formAksesDone')->name('formAkses.done');
    Route::resource('/form-restore', 'FormRestoreController');
    Route::get('/formRestore-done','BackController@formRestoreDone')->name('formRestore.done');
    Route::resource('/form-backup', 'FormBackupController');
    Route::get('/formBackup-done','BackController@formBackupDone')->name('formBackup.done');
    // Route::get('/internet-done','BackController@internetDone')->name('internet.done');
    // Route::resource('/server', 'RequestServerController');
    // Route::get('/server-done','BackController@serverDone')->name('server.done');
    // Route::resource('/sistem', 'RequestSistemController');
    // Route::get('/sistem-done','BackController@sistemDone')->name('sistem.done');
    Route::get('/{report}/print-formAkses', 'BackController@getFormAkses')->name('done.print.formAkses');
    Route::get('/{report}/print-formRestore', 'BackController@getFormRestore')->name('done.print.formRestore');
    Route::get('/{report}/print-formBackup', 'BackController@getFormBackup')->name('done.print.formBackup');
});

