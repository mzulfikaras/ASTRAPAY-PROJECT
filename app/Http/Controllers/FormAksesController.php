<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormAkses;
use App\KategoriAkses;

class FormAksesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormAkses::where('status','REQUEST')->get();

        return view('formAkses.index-formAkses',compact('data'));
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
    public function edit(FormAkses $form_akse)
    {
        $form_akse->find($form_akse->id)->all();

        $kategori = KategoriAkses::all();

        return view('formAkses.edit-formAkses',compact('form_akse','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormAkses $form_akse)
    {
        $this->validate($request, [
            'nama_pemohon' => 'required',
            'nip' => 'required|min:5|max:10',
            'bagian' => 'required',
            'kategori_akses_id' => 'required',
            'alasan_akses' => 'required',
            'tingkat_akses' => 'required',
            'status' => 'required',
        ]);

        // $form_akse = FormAkses::findOrFail($form_akse->id);

        $form_akse->update([
            'nama_pemohon' => $request->nama_pemohon,
            'nip' => $request->nip,
            'bagian' => $request->bagian,
            'kategori_akses_id' => $request->kategori_akses_id,
            'alasan_akses' => $request->alasan_akses,
            'tingkat_akses' => $request->tingkat_akses,
            'status' => $request->status,
        ]);

        if ($form_akse) {
            return redirect()->route('form-akses.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormAkses $form_akse)
    {
        $form_akse->find($form_akse->id)->all();

        $form_akse->delete();

        if ($form_akse) {
            return redirect()->route('form-akses.index');
        }
    }
}
