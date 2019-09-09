@extends('layouts.appsverifacplan', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Halaman Verifikasi
        <small>Sistem Monitoring & Evaluasi Pembangunan Zona Integritas</small>
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
					  <div class="box-header">
              <h3 class="box-title">Data Action Plan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>NO</th>
                  <th>PERIODE</th>
                  <th>TAHUN</th>
                  <th>BERKAS</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>
				<tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>  
				<tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>  
				<tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>  				
                </tbody>
                <tfoot>
                <tr>
				  <th>NO</th>
                  <th>PERIODE</th>
                  <th>TAHUN</th>
                  <th>BERKAS</th>
                </tr>
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
