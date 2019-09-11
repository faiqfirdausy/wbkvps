@extends('layouts.appstatus', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	    <!-- Main content -->
      <section class="content">
		
		<!--table-->
		<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Status Progres Verifikasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <table id="example1" class="table table-hover">
                <thead>
                <tr>
				  <th>NO</th>
                  <th>UPT</th>
                  <th>INDIKATOR</th>
                  <th>STATUS</th>
				  <th>KETERANGAN</th>
				  <th>CAPAIAN</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Kantor Imigrasi Kelas II Blitar</td>
                  <td>a. Apakah unit kerja telah membentuk tim kerja WBK / WBBM untuk melakukan pembangunan Zona Integritas ?</td>
                  <td> <span class="badge bg-warning">Revisi</span></td>
				  <td>Belum lengkap</td>
				  <td>55%</td>
                </tr>
		 				
                </tbody>
                <tfoot>
                <tr>
				  <th>NO</th>
                  <th>UPT</th>
                  <th>INDIKATOR</th>
                  <th>STATUS</th>
				  <th>KETERANGAN</th>
				  <th>CAPAIAN</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
   

        </section>


    <!-- /.content -->
@endsection
