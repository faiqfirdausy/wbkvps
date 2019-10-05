@extends('layouts.appsawalverif', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Halaman PIMTI
        <small>Sistem Informasi Administrasi Pembangunan Zona Integritas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">PIMTI</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">PROGRES PEMBANGUNAN ZONA INTEGRITAS DI UPT</h2></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">

            <div class="tab-content">
			<div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA UPT</th>
                  <th>PROGRES PEMBANGUNAN</th>
                  <th>REKOMENDASI</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($listnilai as $list)
                  @php
                  $i = 1;
                  @endphp
                <tr>
					<td>
						{{$i}}
					</td>
                  <td>
						{{$list->CreatedUser->Upt->nama_upt}}
				  </td>
                  <td>
                    @if(!empty($list->sum))
						{{$list->sum}}%
                    @else
                    0%
                    @endif
                  </td>
                  <td>
						Tingkatkan Pengawasan
				  </td>
                </tr>
               
				</tbody>
                <tfoot>
                
                  @php
                  $i++;
                  @endphp
                @endforeach
                </tfoot>
              </table>
            </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
			

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  
</div>

   

        </section>

    <!-- /.content -->
@endsection
