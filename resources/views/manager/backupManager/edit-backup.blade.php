@extends('manager.master-manager')

@section('content')
    <div class="container" style="padding-left: 30px;">
        <div class="row">
            <form action="{{route('update.manager.backup', $backup->id)}}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="form_permohonan">Form Permohonan</label>
                    <input type="text" class="form-control" id="form_permohonan" name="form_permohonan" value="{{old('form_permohonan', $backup->form_permohonan)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $backup->tanggal_permohonan)}}" readonly>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $backup->nama_pemohon)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $backup->bagian)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="nama_informasi">Nama Informasi</label>
                    <input type="text" class="form-control" id="nama_informasi" name="nama_informasi" value="{{old('nama_informasi', $backup->nama_informasi)}}">
                </div>

                @error('nama_informasi')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="metode_backup">Metode Backup</label>
                    <input type="text" class="form-control" id="metode_backup" name="metode_backup" value="{{old('metode_backup', $backup->metode_backup)}}">
                </div>

                <div class="form-group">
                    <label for="periode_backup">Periode Backup</label>
                    <input type="text" class="form-control" id="periode_backup" name="periode_backup" value="{{old('periode_backup', $backup->periode_backup)}}">
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $backup->status)}}"> {{old('status', $backup->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="APPROVAL">APPROVAL</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('manager.backup')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection