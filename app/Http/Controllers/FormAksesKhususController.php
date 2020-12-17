<?php

namespace App\Http\Controllers;

use App\FormAksesKhusus;
use Illuminate\Http\Request;

class FormAksesKhususController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormAksesKhusus::orderBy('created_at','DESC')->where('status','REQUEST')->orWhere('status','APPROVAL')->get();

        return view('formAksesKhusus.index-formAksesKhusus', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormAksesKhusus $form_akses_khusu)
    {
        $form_akses_khusu->find($form_akses_khusu->id)->all();

        return view('formAksesKhusus.edit-formAksesKhusus', compact('form_akses_khusu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormAksesKhusus $form_akses_khusu)
    {
        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'bagian' => 'required',
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

        $form_akses_khusu->update([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'bagian' => $request->bagian,
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
            'nama_perangkat_5' => $request->nama_perangkat_5,
            'mac_address_1' => $request->mac_address_1,
            'mac_address_2' => $request->mac_address_2,
            'mac_address_3' => $request->mac_address_3,
            'mac_address_4' => $request->mac_address_4,
            'mac_address_5' => $request->mac_address_5,
            'status' => $request->status,
        ]);

        if ($form_akses_khusu) {
            return redirect()->route('form-akses-khusus.index');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormAksesKhusus $form_akses_khusu)
    {
        $form_akses_khusu->find($form_akses_khusu->id)->all();

        $form_akses_khusu->delete();

        if ($form_akses_khusu) {
            return redirect()->route('form-akses-khusus.index');
        }
    }

    public function editAksesKhususManager(FormAksesKhusus $akses_khusus){

        $akses_khusus->find($akses_khusus->id)->all();

        return view('manager.aksesKhususManager.edit-aksesKhusus', compact('akses_khusus'));
    }

    public function updateAksesKhususManager(Request $request, FormAksesKhusus $akses_khusus){

        $this->validate($request, [
            'form_permohonan' => 'required',
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'bagian' => 'required',
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

        $akses_khusus->update([
            'form_permohonan' => $request->form_permohonan,
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'bagian' => $request->bagian,
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
            'nama_perangkat_5' => $request->nama_perangkat_5,
            'mac_address_1' => $request->mac_address_1,
            'mac_address_2' => $request->mac_address_2,
            'mac_address_3' => $request->mac_address_3,
            'mac_address_4' => $request->mac_address_4,
            'mac_address_5' => $request->mac_address_5,
            'status' => $request->status,
        ]);

        if ($akses_khusus) {
            return redirect()->route('manager.aksesKhusus');
        } 
    }

    public function destroyAksesKhususManager(FormAksesKhusus $akses_khusus)
    {
        $akses_khusus->find($akses_khusus->id)->all();

        $akses_khusus->delete();

        if ($akses_khusus) {
            return redirect()->route('manager.aksesKhusus');
        }
    }
}
