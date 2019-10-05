@extends('layouts.appsverifipkikm', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Halaman Verifikasi
        <small>Sistem Informasi Administrasi Pembangunan Zona Integritas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Verifikasi</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">HALAMAN VERIFIKASI</h2></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              <li class="active"><a href="#tab_1" data-toggle="tab">Belum Terverifikasi</a></li>
              <li><a href="#tab_3" data-toggle="tab">Terverifikasi</a></li>

 
  
            </ul>


            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">


              <!-- /.tab-pane -->
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <!--table-->

            <div class="box-header">
              <h3 class="box-title">Data IPK & IKM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>NO</th>
          <th>UPT</th>
                  <th>PERIODE</th>
                  <th>TAHUN</th>
          <th>NILAI</th>
                  <th>BERKAS</th>
                  <th>STATUS</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($ipkikm))
                @php
                $i = 0;
                @endphp
                @foreach($ipkikm as $data)
                 @php
                $i++
                @endphp
                <tr>                

                  <td>{{$i}}</td>
                  <td>{{$data->CreatedUser->Upt->nama_upt}}</td>
                  <td>{{$data->triwulan}}</td>
                  <td>{{$data->tahun}}</td>
                  <td>{{$data->nilai}}</td>
                  <td>
                  <a href="{{url('download-ipkikm/'.$data->id)}}">{{$data->namafile}}</a>

                  </td>
                  <td>
                     @if($data->status ==1 )
                    <span class="badge bg-success">Terverifikasi</span>
                    @elseif($data->status ==0 )
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                     @elseif($data->status ==2 )
                    <span class="badge bg-warning">Revisi</span>
                    @endif
                  </td>
                </tr>
                @endforeach
                @endif
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->


					</div>
              <!-- /.tab-pane -->
             
            </div>
                     
<div class="tab-pane " id="tab_2">


              <!-- /.tab-pane -->
                
         <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            

          </div>
              <!-- /.tab-pane -->
             
            </div>


            <div class="tab-pane" id="tab_3">


              <!-- /.tab-pane -->
                
         <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            

          </div>
              <!-- /.tab-pane -->
             
            </div>
  
                     

            <!-- /.tab-content -->
            <!-- /.tab-content -->
            <!-- /.tab-content -->
          </div>

          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
			

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  


   

        </section>

    <!-- /.content -->
@endsection
