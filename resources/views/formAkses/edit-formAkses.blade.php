@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('form-akses.update', $form_akse->id)}}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="form_permohonan">Form Permohonan</label>
                    <input type="text" class="form-control" id="form_permohonan" name="form_permohonan" value="{{old('form_permohonan', $form_akse->form_permohonan)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $form_akse->tanggal_permohonan)}}" readonly>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $form_akse->nama_pemohon)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{old('nip', $form_akse->nip)}}" readonly>
                </div>

                @error('nip')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $form_akse->bagian)}}">
                </div>

                <label for="kategori_akses_id">Sistem Akses</label><br>
                <select class="custom-select" name="kategori_akses_id">
                    <option selected>Select Kategori Akses</option>
                    @foreach ($kategori as $k)
                        <option value="{{$k->id}}"{{ (old('kategori_akses_id') ?? $form_akse->kategori_akses_id == $k->id) ? 'selected' : ''}}>
                            {{$k->kategori_akses}}                            
                        </option>
                    @endforeach
                </select>

                <div class="form-group">
                    <label for="alasan_akses">Alasan Akses</label>
                    <textarea name="alasan_akses" class="form-control" id="alasan_akses" cols="50" rows="10">{{old('alasan_akses', $form_akse->alasan_akses)}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="tingkat_akses">Tingkat Akses</label>
                    <input type="text" class="form-control" id="tingkat_akses" name="tingkat_akses" value="{{old('tingkat_akses', $form_akse->tingkat_akses)}}">
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $form_akse->status)}}"> {{old('status', $form_akse->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="DONE">DONE</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('form-akses.index')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection