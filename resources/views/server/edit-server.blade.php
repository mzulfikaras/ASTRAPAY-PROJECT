@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('server.update', $server->id)}}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $server->tanggal_permohonan)}}" disabled>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror


                <div class="form-group">
                    <label for="nama_requested">Nama Requested</label>
                    <input type="text" class="form-control" id="nama_requested" name="nama_requested" value="{{old('nama_requested', $server->nama_requested)}}">
                </div>

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $server->nama_pemohon)}}">
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{old('nip', $server->nip)}}">
                </div>

                @error('nip')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $server->bagian)}}">
                </div>

                <label for="kategori_akses_id">Sistem Akses</label><br>
                <select class="custom-select" name="kategori_akses_id">
                    <option selected>Select Kategori Akses</option>
                    @foreach ($kategori as $k)
                        <option value="{{$k->id}}"{{ (old('kategori_akses_id') ?? $server->kategori_akses_id == $k->id) ? 'selected' : ''}}>
                            {{$k->kategori_akses}}                            
                        </option>
                    @endforeach
                </select>

                <div class="form-group">
                    <label for="alasan_akses">Alasan Akses</label>
                    <textarea name="alasan_akses" class="form-control" id="alasan_akses" cols="50" rows="10">{{old('alasan_akses', $server->alasan_akses)}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="tingkat_akses">Tingkat Akses</label>
                    <input type="text" class="form-control" id="tingkat_akses" name="tingkat_akses" value="{{old('tingkat_akses', $server->tingkat_akses)}}">
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $server->status)}}"> {{old('status', $server->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="DONE">DONE</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('server.index')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection