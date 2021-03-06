@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
      
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form Tables</h6>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import" style="margin-top: 20px;">
                      IMPORT FORM AKSES KHUSUS
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
                            <th>Nama Kegiatan/Pekerjaan</th>
                            <th>Jangka Waktu</th>
                            <th>Rincian Kegiatan/Pekerjaan</th>
                            <th>Sistem/Aset</th>
                            <th>Jenis & Tingkat Hak Akses</th>
                            <th>Nama Personil 1</th>
                            <th>Nama Personil 2</th>
                            <th>Nama Personil 3</th>
                            <th>Nama Personil 4</th>
                            <th>Nama Personil 5</th>
                            <th>Nama Perangkat 1</th>
                            <th>Nama Perangkat 2</th>
                            <th>Nama Perangkat 3</th>
                            <th>Nama Perangkat 4</th>
                            <th>Nama Perangkat 5</th>
                            <th>Mac Address 1</th>
                            <th>Mac Address 2</th>
                            <th>Mac Address 3</th>
                            <th>Mac Address 4</th>
                            <th>Mac Address 5</th>
                            <th>Status</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $d)
                            <tr>
                              <td>{{ $d->form_permohonan }}</td>
                              <td>{{ $d->tanggal_permohonan }}</td>
                              <td>{{ $d->nama_pemohon }}</td>
                              <td>{{ $d->nama_kegiatan }}</td>
                              <td>{{ $d->waktu_awal}} sd. {{ $d->waktu_akhir }}</td>
                              <td>{{ $d->rincian }}</td>
                              <td>{{ $d->sistem }}</td>
                              <td>{{ $d->tingkat_akses }}</td>
                              <td>{{ $d->nama_personil_1 }}</td>
                              <td>{{ $d->nama_personil_2 }}</td>
                              <td>{{ $d->nama_personil_3 }}</td>
                              <td>{{ $d->nama_personil_4 }}</td>
                              <td>{{ $d->nama_personil_5 }}</td>
                              <td>{{ $d->nama_perangkat_1 }}</td>
                              <td>{{ $d->nama_perangkat_2 }}</td>
                              <td>{{ $d->nama_perangkat_3 }}</td>
                              <td>{{ $d->nama_perangkat_4 }}</td>
                              <td>{{ $d->nama_perangkat_5 }}</td>
                              <td>{{ $d->mac_address_1 }}</td>
                              <td>{{ $d->mac_address_2 }}</td>
                              <td>{{ $d->mac_address_3 }}</td>
                              <td>{{ $d->mac_address_4 }}</td>
                              <td>{{ $d->mac_address_5 }}</td>
                              <td>{{ $d->status }}</td>
                              <td>
                                <a href="{{ route('done.print.formAksesKhusus', $d->id)}}" class="btn btn-secondary btn-sm">Print PDF</a>
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
                      <form action="{{ route('formAksesKhusus.import') }}" method="POST" enctype="multipart/form-data">
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