@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('form-backup.update', $form_backup->id)}}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_informasi">Nama Informasi</label>
                    <input type="text" class="form-control" id="nama_informasi" name="nama_informasi" value="{{old('nama_informasi', $form_backup->nama_informasi)}}">
                </div>

                @error('nama_informasi')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror


                <div class="form-group">
                    <label for="metode_backup">Metode Backup</label>
                    <input type="text" class="form-control" id="metode_backup" name="metode_backup" value="{{old('metode_backup', $form_backup->metode_backup)}}">
                </div>

                <div class="form-group">
                    <label for="periode_backup">Periode Backup</label>
                    <input type="text" class="form-control" id="periode_backup" name="periode_backup" value="{{old('periode_backup', $form_backup->periode_backup)}}">
                </div>


                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('form-backup.index')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection