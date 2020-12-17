<?php

namespace App\Http\Controllers;

use App\FormAkses;
use App\FormAksesKhusus;
use App\FormBackup;
use App\FormNda;
use App\FormRestore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.dashboard-manager');
    }

    public function aksesManager(){
        $data = FormAkses::orderBy('created_at','DESC')->where([
            ['status', '=', 'REQUEST'],
            ['bagian', '=', Auth::user()->departement],
        ])->orWhere('status','APPROVAL')->get();

        return view('manager.aksesManager.index-akses', compact('data'));
    }

    public function doneAksesManager(){
        $data = FormAkses::orderBy('created_at','DESC')->where('status','CLOSE')->get();

        return view('manager.aksesManager.done-akses', compact('data'));
    }

    public function aksesKhususManager(){
        $data = FormAksesKhusus::orderBy('created_at','DESC')->where([
            ['status', '=', 'REQUEST'],
            ['bagian', '=', Auth::user()->departement],
        ])->orWhere('status','APPROVAL')->get();

        return view('manager.aksesKhususManager.index-aksesKhusus', compact('data'));
    }

    public function doneAksesKhususManager(){
        $data = FormAksesKhusus::orderBy('created_at','DESC')->where('status','CLOSE')->get();

        return view('manager.akseskhususManager.done-aksesKhusus', compact('data'));
    }

    public function backupManager(){
        $data = FormBackup::orderBy('created_at','DESC')->where([
            ['status', '=', 'REQUEST'],
            ['bagian', '=', Auth::user()->departement],
        ])->orWhere('status','APPROVAL')->get();

        return view('manager.backupManager.index-backup', compact('data'));
    }

    public function doneBackupManager(){
        $data = FormBackup::orderBy('created_at','DESC')->where('status','CLOSE')->get();

        return view('manager.backupManager.done-backup', compact('data'));
    }

    public function ndaManager(){
        $data = FormNda::orderBy('created_at','DESC')->where([
            ['status', '=', 'REQUEST'],
            ['bagian', '=', Auth::user()->departement],
        ])->orWhere('status','APPROVAL')->get();

        return view('manager.ndaManager.index-nda', compact('data'));
    }

    public function doneNdaManager(){
        $data = FormNda::orderBy('created_at','DESC')->where('status','CLOSE')->get();

        return view('manager.ndaManager.done-nda', compact('data'));
    }

    public function restoreManager(){
        $data = FormRestore::orderBy('created_at','DESC')->where([
            ['status', '=', 'REQUEST'],
            ['bagian', '=', Auth::user()->departement],
        ])->orWhere('status','APPROVAL')->get();

        return view('manager.restoreManager.index-restore', compact('data'));
    }

    public function doneRestoreManager(){
        $data = FormRestore::orderBy('created_at','DESC')->where('status','CLOSE')->get();

        return view('manager.restoreManager.done-restore', compact('data'));
    }
}
