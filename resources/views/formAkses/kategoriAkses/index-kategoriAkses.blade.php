@extends('master')
    
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card-header py-3">
                    <a href="{{route('kategori.create')}}" class="btn btn-warning">Register Kategori Akses</a>
                  </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori Akses Tables</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Kategori Akses</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                          @foreach ($kategori as $k)
                            <tr>
                              <td>{{ $k->kategori_akses }}</td>
                              {{-- <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('email.destroy',$e->id)}}" method="POST">
                                  <a href="{{ route('email.edit', $e->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                              </td> --}}
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