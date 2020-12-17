@extends('manager.master-manager')
    
@section('content')
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Manager Dashboard</h2>
										<p>PT Astra Digital <span class="bread-ntd">Manager Table</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Form Permohonan</th>
                                        <th>Tanggal Permohonan</th>
                                        <th>Tanggal Approval</th>
                                        <th>Nama Pemohon</th>
                                        <th>Status Permohonan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->form_permohonan}}</td>
                                        <td>{{$d->tanggal_permohonan}}</td>
                                        <td>
                                            @if($d->status == 'CLOSE')
                                              {{$d->updated_at}}
                                            @endif
                                        </td>
                                        <td>{{$d->nama_pemohon}}</td>
                                        <td>{{$d->status}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
@endsection