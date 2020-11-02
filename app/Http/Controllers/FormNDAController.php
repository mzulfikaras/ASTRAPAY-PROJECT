<?php

namespace App\Http\Controllers;

use App\FormNda;
use Illuminate\Http\Request;

class FormNDAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormNda::orderBy('created_at','DESC')->where('status','REQUEST')->get();

        return view('formNDA.index-formNDA', compact('data'));
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
    public function edit(FormNda $form_NDA)
    {
        $form_NDA->find($form_NDA->id)->all();

        return view('formNDA.edit-formNDA', compact('form_NDA'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormNda $form_NDA)
    {
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

        $form_NDA->update([
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

        if ($form_NDA) {
            return redirect()->route('form-NDA.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormNda $form_NDA)
    {
        $form_NDA->find($form_NDA->id)->all();

        $form_NDA->delete();
        
        return redirect()->route('form-NDA.index');
    }
}
