@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form NDA Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Form Permohonan</th>
                            <th>Tanggal Permohonan</th>
                            <th>Nama Pemohon</th>
                            <th>Nama (KTP)</th>
                            <th>No Identitas</th>
                            <th>Instansi</th>
                            <th>Nama Kegiatan</th>
                            <th>Periode Kegiatan</th>
                            <th>Status</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $d)
                            <tr>
                              <td>{{ $d->form_permohonan }}</td>
                              <td>{{ $d->tanggal_permohonan }}</td>
                              <td>{{ $d->nama_pemohon  }}</td>
                              <td>{{ $d->nama_identitas}}</td>
                              <td>{{ $d->no_identitas }}</td>
                              <td>{{ $d->instansi}}</td>
                              <td>{{ $d->nama_kegiatan }}</td>
                              <td>{{ $d->periode_kegiatan }}</td>
                              <td>{{ $d->status }}</td>
                              <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('form-NDA.destroy',$d->id)}}" method="POST">
                                  <a href="{{ route('form-NDA.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
      
              </div>
              <!-- /.container-fluid -->
      
            </div>
@endsection