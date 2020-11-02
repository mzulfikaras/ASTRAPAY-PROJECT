@extends('master')
{{-- @section('title','blog') --}}
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Done Form Akses Tables</h6>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import" style="margin-top: 20px;">
                      IMPORT FORM AKSES
                    </button>
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
                                <a href="{{ route('done.print.formAkses', $d->id) }}" class="btn btn-secondary btn-sm">Print PDF</a>
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

            {{-- MOdAL IMPORT --}}
            <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">IMPORT DATA</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="{{ route('formAkses.import') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="modal-body">
                              <div class="form-group">
                                  <label>PILIH FILE</label>
                                  <input type="file" name="file" class="form-control" required>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                              <button type="submit" class="btn btn-success">IMPORT</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
@endsection