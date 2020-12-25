@extends('manager.master-manager')

@section('content')
    <div class="container" style="padding-left: 30px;">
        <div class="row">
            <form action="{{route('update.manager.restore', $restore->id)}}" method="POST">
                
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="form_permohonan">Form Permohonan</label>
                    <input type="text" class="form-control" id="form_permohonan" name="form_permohonan" value="{{old('form_permohonan', $restore->form_permohonan)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_permohonan">Tanggal Permohonan</label>
                    <input type="text" class="form-control" id="tanggal_permohonan" name="tanggal_permohonan" value="{{old('tanggal_permohonan', $restore->tanggal_permohonan)}}" readonly>
                </div>

                @error('tanggal_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="nama_pemohon">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="{{old('nama_pemohon', $restore->nama_pemohon)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" value="{{old('bagian', $restore->bagian)}}" readonly>
                </div>

                <div class="form-group">
                    <label for="dasar_permohonan">Dasar Permohonan</label>
                    <input type="text" class="form-control" id="dasar_permohonan" name="dasar_permohonan" value="{{old('dasar_permohonan', $restore->dasar_permohonan)}}">
                </div>

                @error('dasar_permohonan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="nama_info">Nama Informasi / Data</label>
                    <input type="text" class="form-control" id="nama_info" name="nama_info" value="{{old('nama_info', $restore->nama_info)}}">
                </div>

                <div class="form-group">
                    <label for="tujuan">Tujuan Restore</label>
                    <input type="text" class="form-control"  name="tujuan" id="tujuan" value="{{old('tujuan', $restore->tujuan)}}">
                </div>
                
                <div class="form-group"><br>
                    <label for="rencana_pemulihan">Rencana Pemulihan</label>
                    <textarea name="rencana_pemulihan" class="form-control"  id="rencana_pemulihan" cols="30" rows="10">{{old('rencana_pemulihan', $restore->rencana_pemulihan)}}</textarea>
                </div>

                <label for="status">STATUS</label><br>
                <select class="custom-select" name="status">
                    <option value="{{old('status', $restore->status)}}"> {{old('status', $restore->status)}}</option>
                    <option value="REQUEST">REQUEST</option>
                    <option value="APPROVAL">APPROVAL</option>
                </select>

                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('manager.restore')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection