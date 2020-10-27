<?php

namespace App\Http\Controllers;

use App\FormBackup;
use Illuminate\Http\Request;

class FormBackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormBackup::all() ;

        return view('formBackup.index-formBackup',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formBackup.create-formBackup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_informasi' => 'required',
            'metode_backup' => 'required',
            'periode_backup' => 'required',
        ]);

        $backup = FormBackup::create([
            'nama_informasi' => $request->nama_informasi,
            'metode_backup' => $request->metode_backup,
            'periode_backup' => $request->periode_backup
        ]);

        if ($backup) {
            return redirect()->route('form-backup.index');
        }
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
    public function edit(FormBackup $form_backup)
    {
        $form_backup->find($form_backup->id)->all();

        return view('formBackup.edit-formBackup',compact('form_backup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormBackup $form_backup)
    {
        $this->validate($request, [
            'nama_informasi' => 'required',
            'metode_backup' => 'required',
            'periode_backup' => 'required',
        ]);


        $form_backup->update([
            'nama_informasi' => $request->nama_informasi,
            'metode_backup' => $request->metode_backup,
            'periode_backup' => $request->periode_backup
        ]);

        if ($form_backup) {
            return redirect()->route('form-backup.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormBackup $form_backup)
    {
        $form_backup->find($form_backup->id)->all();

        $form_backup->delete();

        if ($form_backup) {
            return redirect()->route('form-backup.index');
        }
    }
}
