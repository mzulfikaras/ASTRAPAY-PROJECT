@extends('master')
{{-- @section('title','blog') --}}
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card-header py-3">
                  <a href="{{route('register')}}" class="btn btn-warning">Register Karyawan</a>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Karyawan Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>NIP</th>
                            <th>DEPARTEMENT</th>
                            <th>PASSWORD</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($karyawan as $k)
                            <tr>
                              <td>{{ $k->name }}</td>
                              <td>{{ $k->email }}</td>
                              <td>{{ $k->nip }}</td>
                              <td>{{ $k->departement }}</td>
                              <td>{{ $k->password }}</td>
                              <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('karyawan.delete',$k->id)}}" method="POST">
                                  <a href="{{ route('karyawan.edit', $k->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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