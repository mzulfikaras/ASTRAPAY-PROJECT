<?php

namespace App\Http\Controllers;

use App\Vpn;
use App\KategoriAkses;
use App\FormAkses;
use Illuminate\Http\Request;
use Alert;
use App\FormRestore;

class FrontController extends Controller
{
    public function home(){
        return view('home');
    }

    public function createFormAkses(){
        $kategori = KategoriAkses::all();
        return view('formAkses.create-formAkses', compact('kategori'));
    }


    public function storeFormAkses(Request $request){
        $this->validate($request, [
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
            return redirect()->route('home');
        } else{
            Alert::error('GAGAL', ' REQUEST FORM AKSES GAGAL DIKIRIM');
            return redirect()->route('home');
        }
        
    }

    public function createFormRestore(){
        return view('formRestore.create-formRestore');
    }


    public function storeFormRestore(Request $request){
        $this->validate($request, [
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'dasar_permohonan' => 'required',
            'nama_info' => 'required',
            'tujuan' => 'required',
            'rencana_pemulihan' => '',
            'status' => 'required',
        ]);

        $restore = FormRestore::create([
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'dasar_permohonan' => $request->dasar_permohonan,
            'nama_info' => $request->nama_info,
            'tujuan' => $request->tujuan,
            'rencana_pemulihan' => $request->rencana_pemulihan,
            'status' => $request->status,
        ]);
        
        if ($restore) {
            Alert::success('BERHASIL', ' REQUEST FORM AKSES BERHASIL DIKIRIM');
            return redirect()->route('home');
        } else {
            Alert::error('GAGAL', ' REQUEST FORM AKSES GAGAL DIKIRIM');
            return redirect()->route('home');
        }
        
    }

}
