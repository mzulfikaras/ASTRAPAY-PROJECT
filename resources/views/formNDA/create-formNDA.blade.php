@extends('master-page')
@section('title','Form Submission')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">NDA Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.user.formNDA')}}" method="POST">

                    @csrf

                    <div class="form-row">
                        <div class="name">Form Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="form_permohonan" name="form_permohonan" value="FORM NDA" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Tanggal Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="tanggal_permohonan" name="tanggal_permohonan" value="{{$tanggal}}" readonly>
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
                    
                    @error('nama_pemohon')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Nama (Sesuai KTP)</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="nama_identitas" name="nama_identitas">
                            </div>
                        </div>
                    </div>
                    
                    @error('nama_identitas')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">No Identitas (KTP)</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="no_identitas" name="no_identitas" >
                            </div>
                        </div>
                    </div>

                    @error('no_identitas')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Instansi</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="instansi" name="instansi">
                            </div>
                        </div>
                    </div>

                    @error('instansi')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Nama Kegiatan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="nama_kegiatan" name="nama_kegiatan">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Periode Kegiatan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="periode_kegiatan" name="periode_kegiatan">
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
                        <a href="{{route('dashboard.karyawan')}}" class="btn btn-secondary">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection