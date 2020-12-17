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

Route::get('/admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminAuthController@postLogin');
Route::get('/admin/logout', 'Auth\AdminAuthController@postLogout')->name('admin.logout');

Route::get('/manager/login', 'Auth\ManagerAuthController@getLogin')->name('manager.login');
Route::post('/manager/login', 'Auth\ManagerAuthController@postLogin');
Route::post('/manager/logout', 'Auth\ManagerAuthController@postLogout')->name('manager.logout');

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
    Route::get('/edit/{user}/edit', 'BackController@editKaryawan')->name('karyawan.edit');
    Route::put('/update-karyawan/{user}','BackController@updateKaryawan')->name('karyawan.update');
    Route::delete('/delete-karyawan/{user}', 'BackController@deleteKaryawan')->name('karyawan.delete');
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


Route::prefix('manager')->middleware('auth:manager')->group( function(){
    Route::get('/dashboard', 'ManagerController@index')->name('manager.dashboard');
    Route::get('/index-formAkses', 'ManagerController@aksesManager')->name('manager.akses');
    Route::get('/edit-formAkses/{akses}/edit', 'FormAksesController@editAksesManager')->name('edit.manager.akses');
    Route::put('/edit-formAkses/{akses}', 'FormAksesController@updateAksesManager')->name('update.manager.akses');
    Route::delete('/delete-formAkses/{akses}', 'FormAksesController@destroyAksesManager')->name('destroy.manager.akses');
    Route::get('/done-formAkses', 'ManagerController@doneAksesManager')->name('done.manager.akses');
    Route::get('/index-formAksesKhusus', 'ManagerController@aksesKhususManager')->name('manager.aksesKhusus');
    Route::get('/edit-formAksesKhusus/{akses_khusus}/edit', 'FormAksesKhususController@editAksesKhususManager')->name('edit.manager.aksesKhusus');
    Route::put('/edit-formAksesKhusus/{akses_khusus}', 'FormAksesKhususController@updateAksesKhususManager')->name('update.manager.aksesKhusus');
    Route::delete('/delete-formAksesKhusus/{akses_khusus}', 'FormAksesKhususController@destroyAksesKhususManager')->name('destroy.manager.aksesKhusus');
    Route::get('/done-formAksesKusus', 'ManagerController@doneAksesKhususManager')->name('done.manager.aksesKhusus');
    Route::get('/index-formBackup', 'ManagerController@backupManager')->name('manager.backup');
    Route::get('/edit-formBackup/{backup}/edit', 'FormBackupController@editBackupManager')->name('edit.manager.backup');
    Route::put('/edit-formBackup/{backup}', 'FormBackupController@updateBackupManager')->name('update.manager.backup');
    Route::delete('/delete-formBackup/{backup}', 'FormBackupController@destroyBackupManager')->name('destroy.manager.backup');
    Route::get('/done-formBackup', 'ManagerController@doneBackupManager')->name('done.manager.backup');
    Route::get('/index-formNDA', 'ManagerController@ndaManager')->name('manager.nda');
    Route::get('/edit-formNDA/{nda}/edit', 'FormNDAController@editNdaManager')->name('edit.manager.nda');
    Route::put('/edit-formNDA/{nda}', 'FormNDAController@updateNdaManager')->name('update.manager.nda');
    Route::delete('/delete-formNDA/{nda}', 'FormNDAController@destroyNdaManager')->name('destroy.manager.nda');
    Route::get('/done-formNDA', 'ManagerController@doneNdaManager')->name('done.manager.nda');
    Route::get('/index-restore', 'ManagerController@restoreManager')->name('manager.restore');
    Route::get('/edit-restore/{restore}/edit', 'FormRestoreController@editRestoreManager')->name('edit.manager.restore');
    Route::put('/edit-restore/{restore}', 'FormRestoreController@updateRestoreManager')->name('update.manager.restore');
    Route::delete('/delete-restore/{restore}', 'FormRestoreController@destroyRestoreManager')->name('destroy.manager.restore');
    Route::get('/done-restore', 'ManagerController@doneRestoreManager')->name('done.manager.restore');
});
