@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('form-NDA.update', $form_NDA->id)}}" method="POST">
                
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="form_permohonan">Form Permohonan</label>
                    <input type="text" class="form-control" id="form_permohonan" name="form_permohonan" value="{{old('form_permohonan', $form_NDA->form_permohonan)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $form_NDA->tanggal_permohonan)}}" readonly>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $form_NDA->nama_pemohon)}}">
                </div>

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $form_NDA->bagian)}}">
                </div>

                <div class="form-group">
                    <label for="nama_identitas">Nama (KTP)</label>
                    <input type="text" class="form-control" id="nama_identitas" name="nama_identitas" value="{{old('nama_identitas', $form_NDA->nama_identitas)}}">
                </div>

                @error('nama_identitas')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="no_identitas">No. Identitas</label>
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" value="{{old('no_identitas', $form_NDA->no_identitas)}}">
                </div>


                <div class="form-group">
                    <label for="instansi">Instansi</label>
                    <input type="text" class="form-control" id="instansi" name="instansi" value="{{old('instansi', $form_NDA->instansi)}}">
                </div>


                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{old('nama_kegiatan', $form_NDA->nama_kegiatan)}}">
                </div>
                
                <div class="form-group">
                    <label for="periode_kegiatan">Periode Kegiatan</label>
                    <input type="text" class="form-control" id="periode_kegiatan" name="periode_kegiatan" value="{{old('periode_kegiatan', $form_NDA->periode_kegiatan)}}">
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $form_NDA->status)}}"> {{old('status', $form_NDA->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="CLOSE">CLOSE</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('form-NDA.index')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection