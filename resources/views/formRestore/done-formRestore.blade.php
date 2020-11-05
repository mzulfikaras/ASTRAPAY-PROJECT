@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Done Form Restore Tables</h6>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import" style="margin-top: 20px;">
                      IMPORT FORM RESTORE
                    </button>
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
                                <a href="{{route('done.print.formRestore', $d->id)}}" class="btn btn-secondary btn-sm">Print PDF</a>
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
                      <form action="{{ route('formRestore.import') }}" method="POST" enctype="multipart/form-data">
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