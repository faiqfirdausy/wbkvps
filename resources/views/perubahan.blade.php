@extends('layouts.apps', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
          {{ $romawi->nama }}
        <small> @php print_r($session->upt->nama_upt)@endphp</small>
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
              <center><h2 class="box-title">  {{ $romawi->nama }}</h2></center>
			   <center><p>  {{$romawi->keterangan}}</p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @php
              $i = 0;
              @endphp
              @foreach($romawi->NomorSoal as $data)
              @php
              $i++;
              @endphp
              @if($tab==1)
                @if($i==1)
                <li class="active"><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>

                @else
                <li ><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>

                @endif
              @else
                @if($data->id==$tab)
              
                <li class="active"><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>
                @else
                <li ><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>
                @endif
              @endif
              @endforeach

            </ul>
            <div class="tab-content">
              @php
              $i = 0;
              @endphp
              @foreach($romawi->NomorSoal as $data)
              @php
              $i++;
              @endphp

              @if($tab==1)
                @if($i==1)
                <div class="tab-pane active" id="tab_{{$data->id}}">

                @else
               <div class="tab-pane " id="tab_{{$data->id}}">

                @endif
              @else
                @if($data->id==$tab)
              
                <div class="tab-pane active" id="tab_{{$data->id}}">
                @else
               <div class="tab-pane " id="tab_{{$data->id}}">
                @endif
              @endif

                <p></p>

				
			<div class="box-body">
        <p>{{$data->keterangan}}</p>
		<div class="table-responsive no-padding">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="  text-align: center;">NO</th>
                  <th style="  text-align: center;">INDIKATOR</th>
                  <th style="  text-align: center;">JUKNIS</th>
                  <th style="  text-align: center;">DAKUNG</th>
                  <th style="  text-align: center;">STATUS</th>
                  <th style="  text-align: center;">CATATAN VERIFIKATOR</th>
				          <th>CAPAIAN</th>
                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($data->AbcSoal as $abc)
                @php
                $j++;
                @endphp
                <tr>
					         <td id="abc{{$abc->id}}">{{$j}}</td>
                  <td>{{$abc->nama}}</td>
                  <td>{!! $abc->petunjuk_teknis !!}
                  </td>


                  <td>@foreach($abc->DataDukung as $dakung)
                    @if(!empty($dakung->id_divisi))

                    @if($dakung->id_divisi == $session->Upt->id_divisi)
                    <li>
                    
                    {!! $dakung->nama !!}


                    </li>
                    <a href="{{url('pertanyaan2/download-dakung/'.$dakung->id)}}" class="btn btn-success " role="button" data-toggle="modal" data-target="#">Contoh File</a>

                    <hr>
                    @if(!empty($dakung->filesxuser))

                    <a href="{{url('pertanyaan2/download-file/'.$dakung->filesxuser->id)}}">{{$dakung->filesxuser->namafile}}</a>
                    <br>
                    <a href="#" class="btn btn-warning " role="button" data-toggle="modal" data-target="#myModal{{$dakung->id}}">Ubah</a>

                    <a href="#" class="btn btn-danger " role="button" data-toggle="modal" data-target="#myDeleteModal{{$dakung->id}}">Hapus</a>
  <!-- Modal Delete-->

                      <form role="form" method="POST" action="{{ url('perubahan/delete') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}


                          <div class="modal fade" id="myDeleteModal{{$dakung->id}}" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Anda yakin akan menghapus {{$dakung->nama}} ?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id_datadukung" value="{{ $dakung->id }}">
                                        <input type="hidden" name="id_abcsoal" value="{{ $abc->id }}">

                                      @if(!empty($abc->myTransaksi) &&   $abc->myTransaksi->created_by == $user_id)
                                      
                                        <input type="hidden" name="id_transaksi" value="{{$abc->myTransaksi->id}}">
                                        @if(!empty($dakung->filesxuser))

                                          <input type="hidden" name="id_file" value="{{$dakung->filesxuser->id}}">
                                        @else
                                          <input type="hidden" name="id_file" value="">

                                        @endif


                                      @else

                                        <input type="hidden" name="id_transaksi" value="">

                                      @endif

                                        <input type="hidden" name="kategori" value="{{ $romawi->id }}">


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>

                                      </form>
                                    </div>
                                   </div>
          
                              </div>
                          </div>
  <!--End of Modal Delete-->
                    @else
                    <a href="#" class="btn btn-info " role="button" data-toggle="modal" data-target="#myModal{{$dakung->id}}">Upload</a>


                    @endif
                    @php
                    $temp =0
                    @endphp

                    <hr>
                      <form role="form" method="POST" action="{{ url('perubahan/upload') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}

  <!-- Modal Upload-->
                          <div class="modal fade" id="myModal{{$dakung->id}}" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{!! $dakung->nama !!}</h4>
										
                                    </div>
                                    <div class="modal-body">
                                      <label>File</label>
                                        <input type="file" class="form-control" name="upload_files">
                                        <input type="hidden" name="id_datadukung" value="{{ $dakung->id }}">
                                        <input type="hidden" name="id_abcsoal" value="{{ $abc->id }}">
                                        <input type="hidden" name="id_romawi" value="{{ $data->id }}">

                                      @if(!empty($abc->myTransaksi) &&   $abc->myTransaksi->created_by == $user_id)
                                        <input type="hidden" name="id_transaksi" value="{{$abc->myTransaksi->id}}">
                                        @if(!empty($dakung->filesxuser))
                                          <input type="hidden" name="id_file" value="{{$dakung->filesxuser->id}}">
                                        @else
                                          <input type="hidden" name="id_file" value="">

                                        @endif


                                      @else
                                        <input type="hidden" name="id_transaksi" value="">

                                      @endif

                                        <input type="hidden" name="kategori" value="{{ $romawi->id }}">
										
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>

                                      </form>

                                    </div>
                                   </div>
          
                              </div>
                          </div>

                    @else
                    @endif

                    @else
                    <li>
                    
                    {!! $dakung->nama !!}


                    </li>
                    <a href="{{url('pertanyaan2/download-dakung/'.$dakung->id)}}" class="btn btn-success " role="button" data-toggle="modal" data-target="#">Contoh File</a>
                    <hr>
                    @if(!empty($dakung->filesxuser))

                    <a href="{{url('pertanyaan2/download-file/'.$dakung->filesxuser->id)}}">{{$dakung->filesxuser->namafile}}</a>
                    <br>
                    <a href="#" class="btn btn-warning " role="button" data-toggle="modal" data-target="#myModal{{$dakung->id}}">Ubah</a>

                    <a href="#" class="btn btn-danger " role="button" data-toggle="modal" data-target="#myDeleteModal{{$dakung->id}}">Hapus</a>
  <!-- Modal Delete-->

                      <form role="form" method="POST" action="{{ url('perubahan/delete') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}


                          <div class="modal fade" id="myDeleteModal{{$dakung->id}}" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Anda yakin akan menghapus {!! $dakung->nama !!} </h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id_datadukung" value="{{ $dakung->id }}">
                                        <input type="hidden" name="id_abcsoal" value="{{ $abc->id }}">
                                        <input type="hidden" name="id_romawi" value="{{ $data->id }}">

                                      @if(!empty($abc->myTransaksi) &&   $abc->myTransaksi->created_by == $user_id)
                                      
                                        <input type="hidden" name="id_transaksi" value="{{$abc->myTransaksi->id}}">
                                        @if(!empty($dakung->filesxuser))

                                          <input type="hidden" name="id_file" value="{{$dakung->filesxuser->id}}">
                                        @else
                                          <input type="hidden" name="id_file" value="">

                                        @endif


                                      @else

                                        <input type="hidden" name="id_transaksi" value="">

                                      @endif

                                        <input type="hidden" name="kategori" value="{{ $romawi->id }}">


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>

                                      </form>
                                    </div>
                                   </div>
          
                              </div>
                          </div>
  <!--End of Modal Delete-->
                    @else
                    <a href="#" class="btn btn-info " role="button" data-toggle="modal" data-target="#myModal{{$dakung->id}}">Upload</a>


                    @endif
                    @php
                    $temp =0
                    @endphp

                    <hr>
                      <form role="form" method="POST" action="{{ url('perubahan/upload') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}

  <!-- Modal Upload-->
                          <div class="modal fade" id="myModal{{$dakung->id}}" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{!! $dakung->nama !!}</h4>
                                    </div>
                                    <div class="modal-body">
                                      <label>File</label>
                                        <input type="file" class="form-control" name="upload_files">
                                        <input type="hidden" name="id_datadukung" value="{{ $dakung->id }}">
                                        <input type="hidden" name="id_abcsoal" value="{{ $abc->id }}">
                                        <input type="hidden" name="id_romawi" value="{{ $data->id }}">

                                      @if(!empty($abc->myTransaksi) &&   $abc->myTransaksi->created_by == $user_id)
                                        <input type="hidden" name="id_transaksi" value="{{$abc->myTransaksi->id}}">
                                        @if(!empty($dakung->filesxuser))
                                          <input type="hidden" name="id_file" value="{{$dakung->filesxuser->id}}">
                                        @else
                                          <input type="hidden" name="id_file" value="">

                                        @endif


                                      @else
                                        <input type="hidden" name="id_transaksi" value="">

                                      @endif

                                        <input type="hidden" name="kategori" value="{{ $romawi->id }}">
										</br>
										<small>*berkas maksimal berukuran 50MB</small>
										</br>
										<small>*unggah berkas .zip atau .rar jika berkas lebih dari 1</small>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>

                                      </form>
                                    </div>
                                   </div>
          
                              </div>
                          </div>

                    @endif



                     @endforeach
                  </td>
                  <td> @if($abc->myTransaksi['status'] ==1 )
                    <span class="badge bg-success">Terverifikasi</span>
                    @elseif( $abc->myTransaksi['status'] ==0 )
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                     @elseif( $abc->myTransaksi['status'] ==2 )
                    <span class="badge bg-warning">Revisi</span>
                    @endif
                  </td>
                  <td> 
                    @if(!empty($abc->myTransaksi['keterangan']))
                    {{$abc->myTransaksi['keterangan']}}
                    @else
                    belum ada keterangan
                    @endif

                    </td>
                  <td>
                    @if(!empty($abc->myTransaksi['capaian']))
                    @php $capaian = $abc->myTransaksi->capaian* 100;@endphp
                    {{$capaian}}%
                    @endif
                  </td>
                </tr>
               @endforeach
				</tbody>
              </table>
			  </div>
            </div>
              </div>
              <!-- /.tab-pane -->
              @endforeach

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
		    <div class="modal fade" id="myModalsurvey" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Bagaimana Fitur Notifikasi Kami menurut anda?</h3>
        </div>
        <div class="modal-body">
          <img src="http://localhost/wbkvps/Logo-logo/notiftok.jpg" alt="Trulli" style="width:50%;display: block;
  margin-left: auto;
  margin-right: auto;">


                 
                    <div class="radio">
                    <label class="radio-inline">
                      <input type="radio" value="10" name="capaian" checked="checked"/>&nbsp;
                         Memudahkan Proses Revisi
                    </label>
                       <label class="radio-inline">
                       <input type="radio" value="0" name="capaian"/>&nbsp;
                                           Tidak Memudahkan Proses Revisi
                       </label>
                  </div>
                                      <br>
                                      
                                      <label>Kritik dan Saran</label>

                                      <textarea name="keterangan" class="form-control" rows="3" placeholder="Kritik & Saran"></textarea>        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a href="{{ route('logout') }}" class="btn btn-success "
  onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      Submit dan log Out</a>
          </div>
      </div>
      
    </div>
  </div>


   

        </section>


    <!-- /.content -->
@endsection
@section('scripts')
<script type="text/javascript">
  @if(!empty(session('id_abc')))
    $( document ).ready(function() {
      window.location.hash = '#abc{{session('id_abc')}}';
      });
  @endif
  @if(!empty(session('pesan')))
    @if(session('pesan') == 'upload')
      $( document ).ready(function() {

        Swal.fire(
        'Sukses!',
        'Anda Berhasil Mengupload File',
        'success',
        )
        });
    @elseif(session('pesan') == 'hapus')
        $( document ).ready(function() {

        Swal.fire(
        'Sukses!',
        'Anda Berhasil Menghapus File',
        'success',
        )
        });
    @elseif(session('pesan') == 'erorvalid')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Kosong atau Terlalu Besar',
        'error',
        )
        });
    @elseif(session('pesan') == 'erorkosong')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Tidak Ditemukan',
        'error',
        )
        });
    @elseif(session('pesan') == 'erorbelum')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Belum Ada',
        'error',
        )
        });

    @endif
  @elseif(empty(session('id_abc')))
   $( document ).ready(function() {

Swal.fire({

  imageUrl: 'http://localhost/wbkvps/Logo-logo/updatenotif.jpg',

  imageAlt: 'Custom image',
  animation: false
})
        });
  @endif
</script>
@endsection