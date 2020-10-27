@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Tanggal Permohonan</th>
                            <th>Nama Requested</th>
                            <th>Nama Pemohon</th>
                            <th>NIP</th>
                            <th>Bagian</th>
                            <th>Sistem Akses</th>
                            <th>Alasan Akses</th>
                            <th>Tingkat Akses</th>
                            <th>Status</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Tanggal Permohonan</th>
                            <th>Nama Requested</th>
                            <th>Nama Pemohon</th>
                            <th>NIP</th>
                            <th>Bagian</th>
                            <th>Sistem Akses</th>
                            <th>Alasan Akses</th>
                            <th>Tingkat Akses</th>
                            <th>Status</th>
                            <th>ACTION</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          @foreach ($sistem as $sis)
                            <tr>
                              <td>{{ $sis->tanggal_permohonan }}</td>
                              <td>{{ $sis->nama_requested  }}</td>
                              <td>{{ $sis->nama_pemohon }}</td>
                              <td>{{ $sis->nip }}</td>
                              <td>{{ $sis->bagian}}</td>
                              <td>{{ $sis->kategori_akses->kategori_akses }}</td>
                              <td>{{ $sis->alasan_akses }}</td>
                              <td>{{ $sis->tingkat_akses }}</td>
                              <td>{{ $sis->status }}</td>
                              <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('email.destroy',$sis->id)}}" method="POST">
                                  <a href="{{ route('email.edit', $sis->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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