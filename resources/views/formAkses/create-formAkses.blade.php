@extends('master-page')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Akses Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.user.formAkses')}}" method="POST">

                    @csrf

                    <div class="form-row">
                        <div class="name">Tanggal Pemohonan</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="tanggal_permohonan" name="tanggal_permohonan" value="<?php echo date('d-M-Y')?>">
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
                            <input class="input--style-5" type="text" id="nama_pemohon" name="nama_pemohon" value="{{Auth::user()->name}}">
                            </div>
                        </div>
                    </div>
                    
                    @error('nama_pemohon')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">NIP</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="nip" name="nip" value="{{Auth::user()->nip}}" >
                            </div>
                        </div>
                    </div>

                    @error('nip')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Bagian/Fungsi</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="text" id="bagian" name="bagian">
                            </div>
                        </div>
                    </div>

                    @error('bagian')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-row">
                        <div class="name">Sistem / Aset Yang Akan Di Akses</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="kategori_akses_id">
                                        <option disabled="disabled" selected="selected">Pilih tipe</option>
                                            @foreach ($kategori as $k)
                                                <option value="{{$k->id}}" {{ (old('kategori_akses_id') == "$k->id") ? 'selected' : ''}}>
                                                    {{$k->kategori_akses}}
                                                </option>
                                            @endforeach
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="name">Alasan Kebutuhan</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea name="alasan_akses" id="alasan_akses" cols="30" rows="10">{{old('alasan_akses')}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Tingkat Hak Akses</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="tingkat_akses" name="tingkat_akses">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Status</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="status">
                                        <option disabled="disabled" selected="selected">Pilih Status</option>
                                        <option value="REQUEST">REQUEST</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
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