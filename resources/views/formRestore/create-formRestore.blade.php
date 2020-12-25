@extends('master-page')
@section('title','Form Submission')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Restore Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.user.formRestore')}}" method="POST">

                    @csrf

                    <div class="form-row">
                        <div class="name">Form Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="form_permohonan" name="form_permohonan" value="FORM RESTORE" readonly>
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
                        <div class="name">Dasar Permohonan Restore</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="dasar_permohonan" name="dasar_permohonan">
                            </div>
                        </div>
                    </div>

                    @error('dasar_permohonan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Nama Informasi / Data</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="nama_info" name="nama_info">
                            </div>
                        </div>
                    </div>

                    @error('nama_info')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Tujuan / Target Restore</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="tujuan" name="tujuan">
                            </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="name">Rencana Pemulihan Jika Restore Gagal</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea name="rencana_pemulihan" id="rencana_pemulihan" cols="30" rows="10">{{old('rencana_pemulihan')}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Status</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="status" name="status" value="REQUEST" readonly>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Send</button>
                        <a href="{{route('home')}}" class="btn btn-secondary">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection