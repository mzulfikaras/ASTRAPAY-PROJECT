<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Auth;
use App\KategoriAkses;
use App\FormAkses;
use App\FormRestore;
use App\FormBackup;

class FrontController extends Controller
{
    public function home(){
        return view('home');
    }

    public function dashboardKaryawan(){
        $akses = FormAkses::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        $restore = FormRestore::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        $backup = FormBackup::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        return view('dashboard-karyawan', compact('akses','restore','backup'));
    }

    public function createFormAkses(){
        $kategori = KategoriAkses::all();
        return view('formAkses.create-formAkses', compact('kategori'));
    }


    public function storeFormAkses(Request $request){
        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'nip' => 'required',
            'bagian' => 'required',
            'kategori_akses_id' => 'required',
            'alasan_akses' => 'required',
            'tingkat_akses' => 'required',
            'status' => 'required',
        ]);

        $akses = FormAkses::create([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'nip' => $request->nip,
            'bagian' => $request->bagian,
            'kategori_akses_id' => $request->kategori_akses_id,
            'alasan_akses' => $request->alasan_akses,
            'tingkat_akses' => $request->tingkat_akses,
            'status' => $request->status,
        ]);
        
        if ($akses) {
            Alert::success('BERHASIL', ' REQUEST FORM AKSES BERHASIL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        } else{
            Alert::error('GAGAL', ' REQUEST FORM AKSES GAGAL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        }
        
    }

    public function createFormRestore(){
        return view('formRestore.create-formRestore');
    }


    public function storeFormRestore(Request $request){
        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'dasar_permohonan' => 'required',
            'nama_info' => 'required',
            'tujuan' => 'required',
            'rencana_pemulihan' => '',
            'status' => 'required',
        ]);

        $restore = FormRestore::create([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'dasar_permohonan' => $request->dasar_permohonan,
            'nama_info' => $request->nama_info,
            'tujuan' => $request->tujuan,
            'rencana_pemulihan' => $request->rencana_pemulihan,
            'status' => $request->status,
        ]);
        
        if ($restore) {
            Alert::success('BERHASIL', ' REQUEST FORM RESTORE BERHASIL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        } else {
            Alert::error('GAGAL', ' REQUEST FORM RESTORE GAGAL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        }
        
    }


    public function createFormBackup(){
        return view('formBackup.create-formBackup');
    }

    public function storeFormBackup(Request $request){
        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'nama_informasi' => 'required',
            'metode_backup' => 'required',
            'periode_backup' => 'required',
            'status' => 'required',
        ]);

        $backup = FormBackup::create([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'nama_informasi' => $request->nama_informasi,
            'metode_backup' => $request->metode_backup,
            'periode_backup' => $request->periode_backup,
            'status' => $request->status,
        ]);

        if ($backup) {
            Alert::success('BERHASIL','REQUEST FORM BACKUP BERHASIL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        } else{
            Alert::error('GAGAL','REQUEST FORM BACKUP GAGAL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        }
    }

}
