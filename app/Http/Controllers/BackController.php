<?php

namespace App\Http\Controllers;

use App\Exports\FormAksesExport;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\FormAkses;
use App\FormAksesKhusus;
use App\FormBackup;
use App\FormNda;
use App\FormRestore;
use App\KategoriAkses;
use App\Imports\FormAksesImport;
use App\Imports\FormAksesKhususImport;
use App\Imports\FormBackupImport;
use App\Imports\FormNDAImport;
use App\Imports\FormRestoreImport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use PDF;

class BackController extends Controller
{
    public function dashboard(){
        $request_akses = FormAkses::where('status','REQUEST')->get()->count();
        $done_akses = FormAkses::where('status','DONE')->get()->count();
        $request_restore = FormRestore::where('status','REQUEST')->get()->count();
        $done_restore = FormRestore::where('status','DONE')->get()->count();
        $request_backup = FormBackup::where('status','REQUEST')->get()->count();
        $done_backup = FormBackup::where('status','DONE')->get()->count();
        $request_akses_khusus = FormAksesKhusus::where('status','REQUEST')->get()->count();
        $done_akses_khusus = FormAksesKhusus::where('status','DONE')->get()->count();
        $request_nda = FormNda::where('status','REQUEST')->get()->count();
        $done_nda = FormNda::where('status','DONE')->get()->count();
        return view('dashboard', compact('request_akses','done_akses','request_restore','done_restore','request_backup','done_backup','request_akses_khusus','done_akses_khusus','request_nda','done_nda'));
    }

    public function indexKaryawan(){
        $karyawan = User::all();

        return view('karyawan.index-karyawan',compact('karyawan'));
    }

    public function formAksesDone(){
        $data = FormAkses::orderBy('created_at','DESC')->where('status','DONE')->get();

        return view('formAkses.done-formAkses', compact('data'));
    }

    public function formRestoreDone(){
        $data = FormRestore::orderBy('created_at','DESC')->where('status','DONE')->get();
        return view('formRestore.done-formRestore', compact('data'));
    }

    public function formBackupDone(){
        $data = FormBackup::orderBy('created_at','DESC')->where('status','DONE')->get();
        return view('formBackup.done-formBackup', compact('data'));
    }

    public function formAksesKhususDone(){
        $data = FormAksesKhusus::orderBy('created_at','DESC')->where('status','DONE')->get();
        return view('formAksesKhusus.done-formAksesKhusus', compact('data'));
    }

    public function formNDADone(){
        $data = FormNda::orderBy('created_at','DESC')->where('status','DONE')->get();
        return view('formNDA.done-formNDA', compact('data'));
    }

    public function getFormAkses(FormAkses $report){
        $form_akses = PDF::loadview('report.formAksesPdf', ['report' => $report])->setPaper('a4','potrait');

        return $form_akses->stream();

    }

    public function getFormRestore(FormRestore $report){
        $form_restore = PDF::loadview('report.formRestorePdf', ['report' => $report])->setPaper('a4','potrait');

        return $form_restore->stream();

    }

    public function getFormBackup(FormBackup $report){
        $form_backup = PDF::loadview('report.formBackupPdf', ['report' => $report])->setPaper('a4','potrait');

        return $form_backup->stream();
    }

    public function getFormAksesKhusus(FormAksesKhusus $report){
        $form_akses_khusus = PDF::loadview('report.formAksesKhususPdf', ['report' => $report])->setPaper('a4','potrait');

        return $form_akses_khusus->stream();

    }

    public function getFormNDA(FormNda $report){
        $form_NDA = PDF::loadview('report.formNDAPdf', ['report' => $report])->setPaper('a4','potrait');

        return $form_NDA->stream();
    }

    
    public function importAkses(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx,ods',
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new FormAksesImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if ($import) {
            return redirect()->route('formAkses.done');
        }
    }

    public function importRestore(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx,ods',
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new FormRestoreImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if ($import) {
            return redirect()->route('formRestore.done');
        }
    }

    public function importBackup(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx,ods',
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new FormBackupImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if ($import) {
            return redirect()->route('formBackup.done');
        }
    }

    public function importAksesKhusus(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx,ods',
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new FormAksesKhususImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if ($import) {
            return redirect()->route('formAksesKhusus.done');
        }
    }

    public function importNDA(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx,ods',
        ]);

        $file = $request->file('file');

        $nama_file = $file->hashName();

        $path = $file->storeAs('public/excel/',$nama_file);

        $import = Excel::import(new FormNDAImport(), storage_path('app/public/excel/'.$nama_file));

        Storage::delete($path);

        if ($import) {
            return redirect()->route('formNDA.done');
        }
    }

    public function exportAkses()
    {
        return Excel::download(new FormAksesExport(), 'form_akses.xlsx');
    }

}
