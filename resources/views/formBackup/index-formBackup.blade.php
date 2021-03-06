@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
              </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form Backup Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Tanggal Permohonan</th>
                            <th>Nama Pemohon</th>
                            <th>Nama Informasi</th>
                            <th>Metode Backup</th>
                            <th>Periode Backup</th>
                            <th>Status</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $d)
                            <tr>
                              <td>{{ $d->tanggal_permohonan }}</td>
                              <td>{{ $d->nama_pemohon }}</td>
                              <td>{{ $d->nama_informasi }}</td>
                              <td>{{ $d->metode_backup  }}</td>
                              <td>{{ $d->periode_backup }}</td>
                              <td>{{ $d->status }}</td>
                              <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('form-backup.destroy',$d->id)}}" method="POST">
                                  <a href="{{ route('form-backup.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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