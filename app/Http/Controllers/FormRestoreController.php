<?php

namespace App\Http\Controllers;

use App\FormRestore;
use Illuminate\Http\Request;

class FormRestoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormRestore::where('status','REQUEST')->get();

        return view('formRestore.index-formRestore',compact('data'));
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
    public function edit(FormRestore $form_restore)
    {
        $form_restore->find($form_restore->id)->all();

        return view('formRestore.edit-formRestore',compact('form_restore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormRestore $form_restore)
    {
        $this->validate($request, [
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'dasar_permohonan' => 'required',
            'nama_info' => 'required',
            'tujuan' => 'required',
            'rencana_pemulihan' => '',
            'status' => 'required',
        ]);


        $form_restore->update([
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'dasar_permohonan' => $request->dasar_permohonan,
            'nama_info' => $request->nama_info,
            'tujuan' => $request->tujuan,
            'rencana_pemulihan' => $request->rencana_pemulihan,
            'status' => $request->status,
        ]);

        if ($form_restore) {
            return redirect()->route('form-restore.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormRestore $form_restore)
    {
        $form_restore->find($form_restore->id)->all();

        $form_restore->delete();

        if ($form_restore) {
            return redirect()->route('form-restore.index');
        }
    }
}
