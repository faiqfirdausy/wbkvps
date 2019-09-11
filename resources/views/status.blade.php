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
              <li><a href="#tab_2" data-toggle="tab">Revisi</a></li>
              <li><a href="#tab_3" data-toggle="tab">Terverifikasi</a></li>

 
  
            </ul>


            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">


              <!-- /.tab-pane -->
                
         <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table id="example1" class="table table-hover">

             
            <thead>
                <tr>
                  <th>NO</th>
                  <th>UPT</th>
                  <th>Indikator</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Capaian</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($tnonverif as $data)
                @php
                $j++;
                @endphp
                  <tr>
                  <td>{{$j}}</td>
                  <td>{{$data->CreatedUser->Upt->nama_upt}}</td>
                  <td>{{$data->AbcSoal->nama}}
                  </td>
                  <td>
                    @if($data->status== 0)
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                    @elseif($data->status==1)
                    <span class="badge bg-success">Terverifikasi</span>
                    @else
                    <span class="badge bg-warning">Revisi</span>
                    @endif
                  </td>
                  <td>
                    @if(!empty($data->keterangan))
                    {{$data->keterangan}}
                    @else
                     Belum ada Keterangan
                    @endif
                  </td>
                  <td>
                     @if(!empty($data->capaian))
                    @php $capaian = $data->capaian* 100;@endphp
                    {{$capaian}}%
                    @endif
                  </td>
                  <td><a href="{{url('verifikasi/'.$data->id)}}" class="btn btn-success " role="button" >Detail</a></td>
                </tr>
                @endforeach
                </tbody>
            
            </table>

          </div>
              <!-- /.tab-pane -->
             
            </div>
                     
<div class="tab-pane " id="tab_2">


              <!-- /.tab-pane -->
                
         <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table id="example2" class="table table-hover">

             
            <thead>
                <tr>
                  <th>NO</th>
                  <th>UPT</th>
                  <th>Indikator</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Capaian</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($trevisi as $data)
                @php
                $j++;
                @endphp
                  <tr>
                  <td>{{$j}}</td>
                  <td>{{$data->CreatedUser->Upt->nama_upt}}</td>
                  <td>{{$data->AbcSoal->nama}}
                  </td>
                  <td>
                     @if($data->status== 0)
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                    @elseif($data->status==1)
                    <span class="badge bg-success">Terverifikasi</span>
                    @else
                    <span class="badge bg-warning">Revisi</span>
                    @endif

                  </td>
                  <td>
                    @if(!empty($data->keterangan))
                    {{$data->keterangan}}
                    @else
                     Belum ada Keterangan
                    @endif
                  </td>
                  <td> @if(!empty($data->capaian))
                    @php $capaian = $data->capaian* 100;@endphp
                    {{$capaian}}%
                    @endif</td>
                  <td><a href="{{url('verifikasi/'.$data->id)}}" class="btn btn-success " role="button" >Detail</a></td>
                </tr>
                @endforeach
                </tbody>
            
            </table>

          </div>
              <!-- /.tab-pane -->
             
            </div>


            <div class="tab-pane" id="tab_3">


              <!-- /.tab-pane -->
                
         <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table id="example3" class="table table-hover">

             
            <thead>
                <tr>
                  <th>NO</th>
                  <th>UPT</th>
                  <th>Indikator</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Capaian</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($tverif as $data)
                @php
                $j++;
                @endphp
                  <tr>
                  <td>{{$j}}</td>
                  <td>{{$data->CreatedUser->Upt->nama_upt}}</td>
                  <td>{{$data->AbcSoal->nama}}
                  </td>
                  <td>
                    @if($data->status== 0)
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                    @elseif($data->status==1)
                    <span class="badge bg-success">Terverifikasi</span>
                    @else
                    <span class="badge bg-warning">Revisi</span>
                    @endif

                  </td>
                  <td>
                    @if(!empty($data->keterangan))
                    {{$data->keterangan}}
                    @else
                     Belum ada Keterangan
                    @endif
                  </td>
                  <td> @if(!empty($data->capaian))
                    @php $capaian = $data->capaian* 100;@endphp
                    {{$capaian}}%
                    @endif</td>
                  <td><a href="{{url('verifikasi/'.$data->id)}}" class="btn btn-success " role="button" >Detail</a></td>
                </tr>
                @endforeach
                </tbody>
            
            </table>

          </div>
              <!-- /.tab-pane -->
             
            </div>
  
             <div class="tab-pane " id="tab_4">


              <!-- /.tab-pane -->
                
         <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">

             
            <thead>
                <tr>
                  <th>NO</th>
                  <th>UPT</th>
                  <th>Indikator</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Capaian</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($trevisi as $data)
                @php
                $j++;
                @endphp
                  <tr>
                  <td>{{$j}}</td>
                  <td>{{$data->CreatedUser->Upt->nama_upt}}</td>
                  <td>{{$data->AbcSoal->nama}}
                  </td>
                  <td>
                     @if($data->status== 0)
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                    @elseif($data->status==1)
                    <span class="badge bg-success">Terverifikasi</span>
                    @else
                    <span class="badge bg-warning">Revisi</span>
                    @endif

                  </td>
                  <td>
                    @if(!empty($data->keterangan))
                    {{$data->keterangan}}
                    @else
                     Belum ada Keterangan
                    @endif
                  </td>
                  <td> @if(!empty($data->capaian))
                    @php $capaian = $data->capaian* 100;@endphp
                    {{$capaian}}%
                    @endif</td>
                  <td><a href="{{url('verifikasi/'.$data->id)}}" class="btn btn-success " role="button" >Detail</a></td>
                </tr>
                @endforeach
                </tbody>
            
            </table>

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
