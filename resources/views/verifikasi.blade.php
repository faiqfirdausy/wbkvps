@extends('layouts.appsawalverif', ['title' => 'Home'])

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
			   <center><p>Pilih Satker Yang Akan Diverifikasi</p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @foreach($datadivisi as $data)
              @if($data->id == 1)
              <li class="active"><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>
              @else
              <li><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>

              @endif
              @endforeach
  
            </ul>


            <div class="tab-content">
              @foreach($datadivisi as $data2)
              @if($data2->id == 1)
              <div class="tab-pane active" id="tab_{{$data2->id}}">
              @else
              <div class="tab-pane" id="tab_{{$data2->id}}">
              @endif

              <!-- /.tab-pane -->
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <table class="table table-hover">
               @php
              $i = 0;
              @endphp
            @foreach($dataupt as $listupt)

            @if($listupt->id_divisi == $data2->id)
              @php
              $i++;
              @endphp
              @if($i == 1)
              <tr>
                <td>
							<button class="login100-form-btn">
                {{$listupt->nama_upt}}
							</button>
		        </td>
            @elseif($i==2)
            <td>
              <button class="login100-form-btn">
                {{$listupt->nama_upt}}
              </button>
            </td>
            @elseif($i==3)
            <td>
              <button class="login100-form-btn">
                {{$listupt->nama_upt}}
              </button>
            </td>
          </tr>
             @php
              $i=0;
              @endphp
              @endif


            @endif

           @endforeach

					  </table>
					</div>
              <!-- /.tab-pane -->
             
            </div>
                      @endforeach

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
