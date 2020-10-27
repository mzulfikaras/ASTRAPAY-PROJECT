@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form Akses Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Tanggal Permohonan</th>
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
                          @foreach ($data as $d)
                            <tr>
                              <td>{{ $d->tanggal_permohonan }}</td>
                              <td>{{ $d->nama_pemohon }}</td>
                              <td>{{ $d->nip }}</td>
                              <td>{{ $d->bagian}}</td>
                              <td>{{ $d->kategori_akses->kategori_akses }}</td>
                              <td>{{ $d->alasan_akses }}</td>
                              <td>{{ $d->tingkat_akses }}</td>
                              <td>{{ $d->status }}</td>
                              <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('form-akses.destroy',$d->id)}}" method="POST">
                                  <a href="{{ route('form-akses.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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