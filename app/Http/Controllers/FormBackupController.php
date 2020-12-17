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
        $data = FormBackup::orderBy('created_at','DESC')->where('status','REQUEST')->orWhere('status','APPROVAL')->get();

        return view('formBackup.index-formBackup',compact('data'));
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
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'bagian' => 'required',
            'nama_informasi' => 'required',
            'metode_backup' => 'required',
            'periode_backup' => 'required',
            'status' => 'required',
        ]);


        $form_backup->update([
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'bagian' => $request->bagian,
            'nama_informasi' => $request->nama_informasi,
            'metode_backup' => $request->metode_backup,
            'periode_backup' => $request->periode_backup,
            'status' => $request->status,
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

    public function editBackupManager(FormBackup $backup){
        $backup->find($backup->id)->all();

        return view('manager.backupManager.edit-backup',compact('backup'));
    }

    public function updateBackupManager(Request $request, FormBackup $backup){
        $this->validate($request, [
            'tanggal_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'bagian' => 'required',
            'nama_informasi' => 'required',
            'metode_backup' => 'required',
            'periode_backup' => 'required',
            'status' => 'required',
        ]);


        $backup->update([
            'tanggal_permohonan' => $request->tanggal_permohonan,
            'nama_pemohon' => $request->nama_pemohon,
            'bagian' => $request->bagian,
            'nama_informasi' => $request->nama_informasi,
            'metode_backup' => $request->metode_backup,
            'periode_backup' => $request->periode_backup,
            'status' => $request->status,
        ]);

        if ($backup) {
            return redirect()->route('manager.backup');
        }
    }

    public function destroyBackupManager(FormBackup $backup){
        $backup->find($backup->id)->all();

        $backup->delete();

        if ($backup) {
            return redirect()->route('manager.backup');
        }
    }
}
