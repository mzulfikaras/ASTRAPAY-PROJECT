<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormAkses;
use App\KategoriAkses;

class RequestServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $server = FormAkses::where([
            ['kategori_akses_id' , 4],
            ['status','REQUEST'],
        ])->get();

        return view('formAkses.server.index-server',compact('server'));
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
    public function edit(FormAkses $server)
    {
        $kategori = KategoriAkses::all();
        $server->find($server->id)->all();

        return view('formAkses.server.edit-server',compact('kategori','server'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormAkses $server)
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


        $server->update([
            'nama_requested' => $request->nama_requested,
            'nama_pemohon' => $request->nama_pemohon,
            'nip' => $request->nip,
            'bagian' => $request->bagian,
            'kategori_akses_id' => $request->kategori_akses_id,
            'alasan_akses' => $request->alasan_akses,
            'tingkat_akses' => $request->tingkat_akses,
            'status' => $request->status,
        ]);

        if ($server) {
            return redirect()->route('server.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormAkses $server)
    {
        $server->find($server->id)->all();

        $server->delete();

        if ($server) {
            return redirect()->route('server.index');
        }
    }
}
