<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormAkses;
use App\FormBackup;
use App\FormRestore;
use App\KategoriAkses;
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
        $data = FormAkses::where('status','DONE')->get();

        return view('formAkses.done-formAkses', compact('data'));
    }

    public function formRestoreDone(){
        $data = FormRestore::where('status','DONE')->get();
        return view('formRestore.done-formRestore', compact('data'));
    }

    public function internetDone(){
        $internet = FormAkses::where([
            ['status','DONE'],
            ['kategori_akses_id', 3]
            ])->get();
        return view('formAkses.internet.done-internet', compact('internet'));
    }

    public function serverDone(){
        $server = FormAkses::where([
            ['status','DONE'],
            ['kategori_akses_id', 4]
            ])->get();
        return view('formAkses.server.done-server', compact('server'));
    }

    public function sistemDone(){
        $sistem = FormAkses::where([
            ['status','DONE'],
            ['kategori_akses_id', 5]
            ])->get();
        return view('formAkses.sistem.done-sistem', compact('sistem'));
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

}
