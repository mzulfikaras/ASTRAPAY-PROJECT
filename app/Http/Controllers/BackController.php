<?php

namespace App\Http\Controllers;

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
        return view('dashboard', compact('request_akses','done_akses','request_restore','done_restore'));
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
            'file' => 'required|mimes:csv,xls,xlsx','ods',
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

}
