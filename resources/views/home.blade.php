@extends('layouts.appsawal', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Beranda
        <small>Sistem Informasi Administrasi Pembangunan Zona Integritas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">@php print_r($session->upt->nama_upt) @endphp </h2></center>
            </div>
            <div class="box-body">
			
        @foreach($kategori as $data)
			<div class="col-lg-4">
			<a href="{{url('pertanyaan2/kategori/'.$data->id)}}" class="text-black">
			   <div class="container-login100-form-btn">
					<button class="login100-form-btn">
						{{$data->nama}}
					</button>
				</div>        
			</a>
		
			</div>
		@endforeach
	

		

			

			
            </div>
            
          </div>
		  
			<!-- DONUT CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Progres Capaian @php print_r($session->upt->nama_upt) @endphp</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
             <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


   

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@endsection
