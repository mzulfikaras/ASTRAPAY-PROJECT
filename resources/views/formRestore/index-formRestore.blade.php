@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form Restore Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Tanggal Permohonan</th>
                            <th>Nama Pemohon</th>
                            <th>Dasar Permohonan</th>
                            <th>Nama Informasi / Data</th>
                            <th>Tujuan Restore</th>
                            <th>Rencana Pemulihan</th>
                            <th>Status</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $d)
                            <tr>
                              <td>{{ $d->tanggal_permohonan }}</td>
                              <td>{{ $d->nama_pemohon }}</td>
                              <td>{{ $d->dasar_permohonan }}</td>
                              <td>{{ $d->nama_info}}</td>
                              <td>{{ $d->tujuan }}</td>
                              <td>{{ $d->rencana_pemulihan }}</td>
                              <td>{{ $d->status }}</td>
                              <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('form-restore.destroy',$d->id)}}" method="POST">
                                  <a href="{{ route('form-restore.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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