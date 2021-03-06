@extends('master')

@section('content')
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('form-akses.index')}}">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Request Form Akses</div>
                      </a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$request_akses}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('formAkses.done')}}">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Done Form Akses</div>
                      </a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $done_akses }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                        <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('form-restore.index')}}">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Request Form Restore</div>
                      </a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$request_restore}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Done Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{route('formRestore.done')}}">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Done Form Restore</div>
                      </a>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$done_restore}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <a href="{{route('form-backup.index')}}">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Request Form Backup</div>
                    </a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$request_backup}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <!-- Done Card Example --> --}}
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <a href="{{route('formBackup.done')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Done Form Backup</div>
                    </a>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$done_backup}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-check fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <a href="{{route('form-akses-khusus.index')}}">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Request Form Akses Khusus</div>
                    </a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$request_akses_khusus}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <!-- Done Card Example --> --}}
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <a href="{{route('formAksesKhusus.done')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Done Form Akses Khusus</div>
                    </a>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$done_akses_khusus}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-check fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <a href="{{route('form-NDA.index')}}">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Request Form NDA</div>
                    </a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$request_nda}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


          {{-- <!-- Done Card Example --> --}}
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <a href="{{route('formNDA.done')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Done Form NDA</div>
                    </a>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$done_nda}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-check fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
@endsection