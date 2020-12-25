@extends('master-page')
@section('title','Form Submission')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Akses Khusus Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.user.formAksesKhusus')}}" method="POST">

                    @csrf

                    <div class="form-row">
                        <div class="name">Form Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="form_permohonan" name="form_permohonan" value="FORM AKSES KHUSUS" readonly>
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
                        <div class="name">Nama Kegiatan / Pekerjaan</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="nama_kegiatan" name="nama_kegiatan">
                            </div>
                        </div>
                    </div>

                    @error('nama_kegiatan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Jangka Waktu</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="date" id="waktu_awal" name="waktu_awal"> 
                                </div>
                                s.d 
                                <div class="col">
                                    <input class="input--style-5" type="date" id="waktu_akhir" name="waktu_akhir">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Rincian Pekerjanan/Pekerjaan</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-5" name="rincian" id="rincian" cols="50" rows="4">{{old('rincian')}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Sistem</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="sistem" name="sistem">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Tingkat Akses</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="tingkat_akses" name="tingkat_akses">
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Nama Personil 1</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="nama_personil_1" name="nama_personil_1">
                                </div>
                                <div class="col" id="col2">
                                    <button type="button" class="btn btn-warning btn-sm" id="formButton2" style="font-size:10px;">Tambah Personil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @error('nama_personil_1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row" id="form2" style="display: none;">
                        <div class="name">Nama Personil 2</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="nama_personil_2" name="nama_personil_2">
                                </div>
                                <div class="col" id="col3">
                                    <button type="button" class="btn btn-warning btn-sm" id="formButton3" style="font-size:10px;">Tambah Personil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form3" style="display: none;">
                        <div class="name">Nama Personil 3</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="nama_personil_3" name="nama_personil_3">
                                </div>
                                <div class="col" id="col4">
                                    <button type="button" class="btn btn-warning btn-sm" id="formButton4" style="font-size:20px;">Tambah Personil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form4" style="display: none;">
                        <div class="name">Nama Personil 4</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="nama_personil_4" name="nama_personil_4">
                                </div>
                                <div class="col" id="col5">
                                    <button type="button" class="btn btn-warning btn-sm" id="formButton5" style="font-size:10px;">Tambah Personil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form5" style="display: none;">
                        <div class="name">Nama Personil 5</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="nama_personil_5" name="nama_personil_5">
                                </div>
                                <div class="col">
                                    <div class="text-danger" id="message">
                                        *Form Tambahan Sudah Maksimal
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Nama Perangkat 1</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="nama_perangkat_1" name="nama_perangkat_1">
                            </div>
                        </div>
                    </div>

                    @error('nama_perangkat_1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row" id="form6" style="display: none;">
                        <div class="name">Nama Perangkat 2</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="nama_perangkat_2" name="nama_perangkat_2">
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form7" style="display: none;">
                        <div class="name">Nama Perangkat 3</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="nama_perangkat_3" name="nama_perangkat_3">
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form8" style="display: none;">
                        <div class="name">Nama Perangkat 4</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="nama_perangkat_4" name="nama_perangkat_4">
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form9" style="display: none;">
                        <div class="name">Nama Perangkat 5</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="nama_perangkat_5" name="nama_perangkat_5">
                                </div>
                                <div class="col">
                                    <div class="text-danger" id="message">
                                       *Form Tambahan Sudah Maksimal
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Mac Address 1</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="mac_address_1" name="mac_address_1">
                            </div>
                        </div>
                    </div>

                    @error('mac_address_1')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row" id="form10" style="display: none;">
                        <div class="name">Mac Address 2</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="mac_address_2" name="mac_address_2">
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form11" style="display: none;">
                        <div class="name">Mac Address 3</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="mac_address_3" name="mac_address_3">
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form12" style="display: none;">
                        <div class="name">Mac Address 4</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="mac_address_4" name="mac_address_4">
                            </div>
                        </div>
                    </div>

                    <div class="form-row" id="form13" style="display: none;">
                        <div class="name">Mac Address 5</div>
                        <div class="value">
                            <div class="input-group row">
                                <div class="col">
                                    <input class="input--style-5" type="text" id="mac_address_5" name="mac_address_5">
                                </div>
                                <div class="col">
                                    <div class="text-danger" id="message">
                                       *Form Tambahan Sudah Maksimal
                                    </div>
                                </div>
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

@section('js')
    <script>
        $("#formButton2").click(function(){
            $("#form2").show();
            $("#form6").show();
            $("#form10").show();
            $('#col2').hide();
        });

        $("#formButton3").click(function(){
            $("#form3").show();
            $("#form7").show();
            $("#form11").show();
            $('#col3').hide();
        });

        $("#formButton4").click(function(){
            $("#form4").show();
            $("#form8").show();
            $("#form12").show();
            $('#col4').hide();
        });

        $("#formButton5").click(function(){
            $("#form5").show();
            $("#form9").show();
            $("#form13").show();
            $('#col5').hide();
        });

        
    </script>
@endsection