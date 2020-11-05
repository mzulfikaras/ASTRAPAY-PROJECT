<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Auth;
use Illuminate\Support\Carbon;
use App\KategoriAkses;
use App\FormAkses;
use App\FormAksesKhusus;
use App\FormRestore;
use App\FormBackup;
use App\FormNda;

class FrontController extends Controller
{
    public function home(){
        return view('home');
    }

    public function dashboardKaryawan(){
        $akses = FormAkses::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        $restore = FormRestore::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        $backup = FormBackup::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        $akses_khusus = FormAksesKhusus::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        $nda = FormNda::orderBy('created_at','DESC')->where('nama_pemohon', Auth::user()->name)->get();
        return view('dashboard-karyawan', compact('akses','restore','backup','akses_khusus','nda'));
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

    public function createFormAksesKhusus(){
        return view('formAksesKhusus.create-formAksesKhusus');
    }

    public function storeFormAksesKhusus(Request $request){
        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'nama_kegiatan' => 'required',
            'waktu_awal' => 'required',
            'waktu_akhir' => 'required',
            'rincian' => 'required',
            'nama_personil_1' => 'required',
            'nama_personil_2' => '',
            'nama_personil_3' => '',
            'nama_personil_4' => '',
            'nama_personil_5' => '',
            'nama_perangkat_1' => 'required',
            'nama_perangkat_2' => '',
            'nama_perangkat_3' => '',
            'nama_perangkat_4' => '',
            'nama_perangkat_5' => '',
            'mac_address_1' => 'required',
            'mac_address_2' => '',
            'mac_address_3' => '',
            'mac_address_4' => '',
            'mac_address_5' => '',
            'status' => 'required'
        ]);

        $akses_khusus = FormAksesKhusus::create([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'nama_kegiatan' => $request->nama_kegiatan,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'rincian' => $request->rincian,
            'nama_personil_1' => $request->nama_personil_1,
            'nama_personil_2' => $request->nama_personil_2,
            'nama_personil_3' => $request->nama_personil_3,
            'nama_personil_4' => $request->nama_personil_4,
            'nama_personil_5' => $request->nama_personil_5,
            'nama_perangkat_1' => $request->nama_perangkat_1,
            'nama_perangkat_2' => $request->nama_perangkat_2,
            'nama_perangkat_3' => $request->nama_perangkat_3,
            'nama_perangkat_4' => $request->nama_perangkat_4,
            'nama_perangkat_5' => $request->nama_perangkat_5,
            'mac_address_1' => $request->mac_address_1,
            'mac_address_2' => $request->mac_address_2,
            'mac_address_3' => $request->mac_address_3,
            'mac_address_4' => $request->mac_address_4,
            'mac_address_5' => $request->mac_address_5,
            'status' => $request->status,
        ]);

        if ($akses_khusus) {
            Alert::success('BERHASIL','REQUEST FORM HAK AKSES KHUSUS BERHASIL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        } else {
            Alert::error('GAGAL','REQUEST FORM HAK AKSES KHUSUS GAGAL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        }

        
    }

    public function createFormNDA() {
        $tanggal = $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        return view('formNDA.create-formNDA', compact('tanggal'));
    }

    public function storeFormNDA(Request $request){
        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'nama_identitas' => 'required',
            'no_identitas' => 'required',
            'instansi' => 'required',
            'nama_kegiatan' => 'required',
            'periode_kegiatan' => 'required',
            'status' => 'required',
        ]);

        $nda = FormNda::create([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'nama_identitas' => $request->nama_identitas,
            'no_identitas' => $request->no_identitas,
            'instansi' => $request->instansi,
            'nama_kegiatan' => $request->nama_kegiatan,
            'periode_kegiatan' => $request->periode_kegiatan,
            'status' => $request->status,
        ]);

        if ($nda) {
            Alert::success('BERHASIL','REQUEST FORM NDA BERHASIL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        } else {
            Alert::error('GAGAL','REQUEST FORM NDA GAGAL DIKIRIM');
            return redirect()->route('dashboard.karyawan');
        }
    }

}
