@extends('master')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title" style="margin-left: 20px; margin-top:20px "> Backup Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('form-backup.store')}}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="nama_informasi">Nama Informasi</label>
                        <input type="text" class="form-control" id="nama_informasi" name="nama_informasi" value="{{old('nama_informasi')}}">
                    </div>
    
                    @error('nama_informasi')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
    
    
                    <div class="form-group">
                        <label for="metode_backup">Metode Backup</label>
                        <input type="text" class="form-control" id="metode_backup" name="metode_backup" value="{{old('metode_backup')}}">
                    </div>
    
                    <div class="form-group">
                        <label for="periode_backup">Periode Backup</label>
                        <input type="text" class="form-control" id="periode_backup" name="periode_backup" value="{{old('periode_backup')}}">
                    </div>
    
    
                    <div class="form-group" style="margin-top:20px;">
                        <button type="submit" class="btn btn-md btn-primary">UPLOAD</button>
                        <a href="{{route('form-backup.index')}}" class="btn btn-secondary">BACK</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection