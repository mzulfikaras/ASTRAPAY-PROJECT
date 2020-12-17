@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('form-akses-khusus.update', $form_akses_khusu->id)}}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="form_permohonan">Form Permohonan</label>
                    <input type="text" class="form-control" id="form_permohonan" name="form_permohonan" value="{{old('form_permohonan', $form_akses_khusu->form_permohonan)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $form_akses_khusu->tanggal_permohonan)}}" readonly>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $form_akses_khusu->nama_pemohon)}}">
                </div>

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $form_akse->bagian)}}">
                </div>

                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{old('nama_kegiatan', $form_akses_khusu->nama_kegiatan)}}">
                </div>

                @error('nama_kegiatan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label>Jangka Waktu</label>
                    <div class="col">
                        <input type="date" class="form-control" id="waktu_awal" name="waktu_awal" value="{{old('waktu_awal', $form_akses_khusu->waktu_awal)}}">
                    </div>
                    s.d
                    <div class="col">
                        <input type="date" class="form-control" id="waktu_akhir" name="waktu_akhir" value="{{old('waktu_akhir', $form_akses_khusu->waktu_akhir)}}">
                    </div>

                </div>

                <div class="form-group">
                    <label for="rincian">Rincian Kegiatan/Pekerjaan</label>
                    <textarea name="rincian" class="form-control" id="rincian" cols="50" rows="10">{{old('rincian', $form_akses_khusu->rincian)}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="sistem">Sistem/Aset</label>
                    <input type="text" class="form-control" id="sistem" name="sistem" value="{{old('sistem', $form_akses_khusu->sistem)}}">
                </div>

                <div class="form-group">
                    <label for="tingkat_akses">Jenis & Tingkat Hak Akses</label>
                    <input type="text" class="form-control" id="tingkat_akses" name="tingkat_akses" value="{{old('tingkat_akses', $form_akses_khusu->tingkat_akses)}}">
                </div>

                <div class="form-group">
                    <label for="nama_personil_1">Nama Personil 1</label>
                    <input type="text" class="form-control" id="nama_personil_1" name="nama_personil_1" value="{{old('nama_personil_1', $form_akses_khusu->nama_personil_1)}}">
                </div>

                <div class="form-group">
                    <label for="nama_personil_2">Nama Personil 2</label>
                    <input type="text" class="form-control" id="nama_personil_2" name="nama_personil_2" value="{{old('nama_personil_2', $form_akses_khusu->nama_personil_2)}}">
                </div>

                <div class="form-group">
                    <label for="nama_personil_3">Nama Personil 3</label>
                    <input type="text" class="form-control" id="nama_personil_3" name="nama_personil_3" value="{{old('nama_personil_3', $form_akses_khusu->nama_personil_3)}}">
                </div>

                <div class="form-group">
                    <label for="nama_personil_4">Nama Personil 4</label>
                    <input type="text" class="form-control" id="nama_personil_4" name="nama_personil_4" value="{{old('nama_personil_4', $form_akses_khusu->nama_personil_4)}}">
                </div>

                <div class="form-group">
                    <label for="nama_personil_5">Nama Personil 5</label>
                    <input type="text" class="form-control" id="nama_personil_5" name="nama_personil_5" value="{{old('nama_personil_5', $form_akses_khusu->nama_personil_5)}}">
                </div>

                <div class="form-group">
                    <label for="nama_perangkat_1">Nama Perangkat 1</label>
                    <input type="text" class="form-control" id="nama_perangkat_1" name="nama_perangkat_1" value="{{old('nama_perangkat_1', $form_akses_khusu->nama_perangkat_1)}}">
                </div>

                <div class="form-group">
                    <label for="nama_perangkat_2">Nama Perangkat 2</label>
                    <input type="text" class="form-control" id="nama_perangkat_2" name="nama_perangkat_2" value="{{old('nama_perangkat_2', $form_akses_khusu->nama_perangkat_2)}}">
                </div>

                <div class="form-group">
                    <label for="nama_perangkat_3">Nama Perangkat 3</label>
                    <input type="text" class="form-control" id="nama_perangkat_3" name="nama_perangkat_3" value="{{old('nama_perangkat_3', $form_akses_khusu->nama_perangkat_3)}}">
                </div>

                <div class="form-group">
                    <label for="nama_perangkat_4">Nama Perangkat 4</label>
                    <input type="text" class="form-control" id="nama_perangkat_4" name="nama_perangkat_4" value="{{old('nama_perangkat_4', $form_akses_khusu->nama_perangkat_4)}}">
                </div>

                <div class="form-group">
                    <label for="nama_perangkat_5">Nama Perangkat 5</label>
                    <input type="text" class="form-control" id="nama_perangkat_5" name="nama_perangkat_5" value="{{old('nama_perangkat_5', $form_akses_khusu->nama_perangkat_5)}}">
                </div>

                <div class="form-group">
                    <label for="mac_address_1">Mac Address 1</label>
                    <input type="text" class="form-control" id="mac_address_1" name="mac_address_1" value="{{old('mac_address_1', $form_akses_khusu->mac_address_1)}}">
                </div>

                <div class="form-group">
                    <label for="mac_address_2">Mac Address 2</label>
                    <input type="text" class="form-control" id="mac_address_2" name="mac_address_2" value="{{old('mac_address_2', $form_akses_khusu->mac_address_2)}}">
                </div>

                <div class="form-group">
                    <label for="mac_address_3">Mac Address 3</label>
                    <input type="text" class="form-control" id="mac_address_3" name="mac_address_3" value="{{old('mac_address_3', $form_akses_khusu->mac_address_3)}}">
                </div>

                <div class="form-group">
                    <label for="mac_address_4">Mac Address 4</label>
                    <input type="text" class="form-control" id="mac_address_4" name="mac_address_4" value="{{old('mac_address_4', $form_akses_khusu->mac_address_4)}}">
                </div>

                <div class="form-group">
                    <label for="mac_address_5">Mac Address 5</label>
                    <input type="text" class="form-control" id="mac_address_5" name="mac_address_5" value="{{old('mac_address_5', $form_akses_khusu->mac_address_5)}}">
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $form_akses_khusu->status)}}"> {{old('status', $form_akses_khusu->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="CLOSE">CLOSE</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('form-akses-khusus.index')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection