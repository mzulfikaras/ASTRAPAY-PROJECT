@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form NDA Tables</h6>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import" style="margin-top: 20px;">
                      IMPORT FORM NDA
                    </button>
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
                                <a href="{{ route('done.print.formNDA', $d->id) }}" class="btn btn-secondary btn-sm">Print PDF</a>
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

            {{-- ModaL IMPORT --}}
            <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">IMPORT DATA</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="{{ route('formNDA.import') }}" method="POST" enctype="multipart/form-data">
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