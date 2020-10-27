<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormAkses;
use App\KategoriAkses;

class RequestSistemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistem = FormAkses::where([
            ['kategori_akses_id' , 5],
            ['status','REQUEST'],
        ])->get();

        return view('formAkses.sistem.index-sistem',compact('sistem'));
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
    public function edit(FormAkses $sistem)
    {
        $kategori = KategoriAkses::all();
        $sistem->find($sistem->id)->all();

        return view('formAkses.sistem.edit-sistem',compact('kategori','sistem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormAkses $sistem)
    {
        $this->validate($request, [
            'nama_requested' => 'required',
            'nama_pemohon' => 'required',
            'nip' => 'required|min:5|max:10',
            'bagian' => 'required',
            'kategori_akses_id' => 'required',
            'alasan_akses' => 'required',
            'tingkat_akses' => 'required',
            'status' => 'required',
        ]);


        $sistem->update([
            'nama_requested' => $request->nama_requested,
            'nama_pemohon' => $request->nama_pemohon,
            'nip' => $request->nip,
            'bagian' => $request->bagian,
            'kategori_akses_id' => $request->kategori_akses_id,
            'alasan_akses' => $request->alasan_akses,
            'tingkat_akses' => $request->tingkat_akses,
            'status' => $request->status,
        ]);

        if ($sistem) {
            return redirect()->route('sistem.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormAkses $sistem)
    {
        $sistem->find($sistem->id)->all();

        $sistem->delete();

        if ($sistem) {
            return redirect()->route('sistem.index');
        }
    }
}
