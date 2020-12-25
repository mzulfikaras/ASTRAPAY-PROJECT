@extends('manager.master-manager')

@section('content')
    <div class="container" style="padding-left: 30px;">
        <div class="row">
            <form action="{{route('update.manager.nda', $nda->id)}}" method="POST">
                
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="form_permohonan">Form Permohonan</label>
                    <input type="text" class="form-control" id="form_permohonan" name="form_permohonan" value="{{old('form_permohonan', $nda->form_permohonan)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $nda->tanggal_permohonan)}}" readonly>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $nda->nama_pemohon)}}">
                </div>

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $nda->bagian)}}">
                </div>

                <div class="form-group">
                    <label for="nama_identitas">Nama (KTP)</label>
                    <input type="text" class="form-control" id="nama_identitas" name="nama_identitas" value="{{old('nama_identitas', $nda->nama_identitas)}}">
                </div>

                @error('nama_identitas')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="no_identitas">No. Identitas</label>
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" value="{{old('no_identitas', $nda->no_identitas)}}">
                </div>


                <div class="form-group">
                    <label for="instansi">Instansi</label>
                    <input type="text" class="form-control" id="instansi" name="instansi" value="{{old('instansi', $nda->instansi)}}">
                </div>


                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{old('nama_kegiatan', $nda->nama_kegiatan)}}">
                </div>
                
                <div class="form-group">
                    <label for="periode_kegiatan">Periode Kegiatan</label>
                    <input type="text" class="form-control" id="periode_kegiatan" name="periode_kegiatan" value="{{old('periode_kegiatan', $nda->periode_kegiatan)}}">
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $nda->status)}}"> {{old('status', $nda->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="APPROVAL">APPROVAL</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('manager.nda')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection