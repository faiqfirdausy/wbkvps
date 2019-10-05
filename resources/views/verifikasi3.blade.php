@extends('layouts.apps', ['title' => 'Home'])

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
			   <center><p>MANAJEMEN PERUBAHAN LAPAS KELAS I SURABAYA</p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tim Kerja</a></li>
              <li><a href="#tab_2" data-toggle="tab">Dokumen</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>				
			<div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>INDIKATOR</th>
                  <th>JUKNIS</th>
                  <th>DAKUNG</th>
                  <th>STATUS</th>
				  <th>KETERANGAN</th>
                </tr>
                </thead>
                <tbody>
                <tr>
					<td>1</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
					<td>2</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
				</tbody>
                <tfoot>
                <tr>
                   <th>NO</th>
                  <th>INDIKATOR</th>
                  <th>JUKNIS</th>
                  <th>DAKUNG</th>
                  <th>STATUS</th>
				  <th>KETERANGAN</th>
                </tr>
                </tfoot>
              </table>
            </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <table class="table table-hover">
						<tr>
						  <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						</tr>
						<tr>
						  <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						</tr>
					  </table>
					</div>
					  </div>
              <!-- /.tab-pane -->
             
            </div>
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
