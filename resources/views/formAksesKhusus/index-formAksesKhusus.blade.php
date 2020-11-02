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
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('form-akses-khusus.destroy',$d->id)}}" method="POST">
                                  <a href="{{ route('form-akses-khusus.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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