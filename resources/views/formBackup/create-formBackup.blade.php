@extends('master-page')
@section('title','Form Submission')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title" style="margin-left: 20px; margin-top:20px ">Backup Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.user.formBackup')}}" method="POST">

                    @csrf

                    <div class="form-row">
                        <div class="name">Form Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="form_permohonan" name="form_permohonan" value="FORM BACKUP" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Tanggal Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="tanggal_permohonan" name="tanggal_permohonan" value="<?php echo date('d-M-Y')?>" readonly>
                            </div>
                        </div>
                    </div>
                    @error('tanggal_permohonan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Nama Pemohon</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="nama_pemohon" name="nama_pemohon" value="{{Auth::user()->name}}" readonly>
                            </div>
                        </div>
                    </div>
                    
                    @error('nama_pemohon')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Bagian/Fungsi</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="bagian" name="bagian" value="{{Auth::user()->departement}}" readonly>
                            </div>
                        </div>
                    </div>

                    @error('bagian')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Nama Informasi</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="nama_informasi" name="nama_informasi">
                            </div>
                        </div>
                    </div>
    
                    @error('nama_informasi')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
    
    
                    <div class="form-row">
                        <div class="name">Metode Backup</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="metode_backup" name="metode_backup" >
                            </div>
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="name">Periode Backup</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="periode_backup" name="periode_backup">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-row">
                            <div class="name">Status</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="status" name="status" value="REQUEST" readonly>
                                </div>
                            </div>
                        </div>
    
    
                    <div class="form-group" style="margin-top:20px;">
                        <button type="submit" class="btn btn-md btn-primary">UPLOAD</button>
                        <a href="{{route('home')}}" class="btn btn-secondary">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection