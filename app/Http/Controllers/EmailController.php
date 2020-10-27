<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Email::where('status','REQUEST')->get();

        return view('email.index-email', compact('email'));
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
    public function edit(Email $email)
    {
        $email->find($email->id)->all();

        return view('email.edit-email', compact('email'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        $this->validate($request, [
            'pic' => 'required',
            'nama' => 'required',
            'tipe_titel' => 'required',
            'nomor_titel' => 'required',
            'departement' => 'required',
            'company' => 'required',
            'nomor_telepon' => 'required',
            'status' => 'required',
        ]);

        $email = Email::findOrFail($email->id);

        $email->update([
            'pic' => $request->pic,
            'nomor_tiket' => date('Y-m-d'),
            'nama' => $request->nama,
            'tipe_titel' => $request->tipe_titel,
            'nomor_titel' => $request->nomor_titel,
            'departement' => $request->departement,
            'company' => $request->company,
            'nomor_telepon' => $request->nomor_telepon,
            'status' => $request->status,
        ]);

        if ($email) {
            return redirect()->route('email.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        $email->find($email->id)->all();

        $email->delete();

        if ($email) {
            return redirect()->route('email.index');
        }
    }
}
