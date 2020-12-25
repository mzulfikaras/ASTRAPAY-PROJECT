@extends('manager.master-manager')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Data Tables Manager</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Form Akses</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data Table Manager PT. Astra Digital Arta. </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Form Permohonan</th>
                                <th>Tanggal Permohonan</th>
                                <th>Tanggal Approval</th>
                                <th>Nama Pemohon</th>
                                <th>Status Permohonan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                        <td>{{$d->form_permohonan}}</td>
                                        <td>{{$d->tanggal_permohonan}}</td>
                                        <td>
                                          @if($d->status == 'APPROVAL')
                                            {{$d->updated_at}}
                                          @else
                                            <center><h5>- Need Approval -</h5></center>
                                          @endif
                                        </td>
                                        <td>{{$d->nama_pemohon}}</td>
                                        <td>{{$d->status}}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('destroy.manager.restore',$d->id)}}" method="POST">
                                              <a href="{{ route('edit.manager.restore', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
@endsection