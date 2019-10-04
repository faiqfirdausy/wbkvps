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
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            


            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">


              <!-- /.tab-pane -->
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <table class="table table-hover">

             
                <tr>
                  <th>Upt</th>
                  <td>{{$transaksi->CreatedUser->Upt->nama_upt}}</td>
                </tr>
                <tr>
                  <th>Indikator</th>
                  <td>{{$transaksi->AbcSoal->nama}}</td>
                </tr>
                <tr>
                  <th>Petunjuk Teknis</th>
                  <td>{!! $transaksi->AbcSoal->petunjuk_teknis !!}</td>

                </tr>
                <tr>
                  <th>Data Dukung</th>
                  <td>
                    @foreach($transaksi->AbcSoal->DataDukung as $dakung)
                    <p>{!! $dakung->nama !!}</p>
                     @php
                      $j = 0;
                      @endphp
                    @foreach($transaksi->filesx as $varfile)
                    @if($dakung->id == $varfile->id_datadukung)
                    <p><a href="{{url('pertanyaan2/download-fileverif/'.$varfile->id)}}" class="btn btn-warning " role="button" >Download</a></p>
                    <hr>
                    @php
                    $j = 1;
                    @endphp
                    @endif


                    @endforeach
                    @if($j ==0)
                    <p><i class="fa fa-close" style="font-size:18px;color:red"></i>
                    Belum Ada File<i class="fa fa-close" style="font-size:18px;color:red"></i>
                    </p>
                    <hr>
                    @endif
                    @endforeach
                    
                    
                  </td>
 

                </tr>
                  

                <tbody>
           
            
					  </table>

					</div>
              <!-- /.tab-pane -->
             
            </div>
                     

            <!-- /.tab-content -->

          </div>

          <!-- nav-tabs-custom -->
        </div>
            <div align="right">
                    <a href="#" class="btn btn-success " role="button" data-toggle="modal" data-target="#myModal">Verifikasi</a>
            </div>




             <form role="form" method="POST" action="{{ url('verifikasi/update') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}

  <!-- Modal Upload-->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Verifikasi </h4>
                                    </div>
                                    <div class="modal-body">
                                      <label>Status</label>
                                      <select name="capaian" class="form-control">
                                        <option value="">--</option>
                                        <option value="10">Verifikasi</option>
                                        <option value="0">Revisi</option>
                                     </select>
                                      <br>
                                      
                                      <label>Keterangan</label>

                                      <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
                                        <input type="hidden" name="idtransaksi" value="{{ $idtransaksi }}">
                                        <input type="hidden" name="id_abcsoal" value="{{$transaksi->AbcSoal->id}}">



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>

                                      </form>
                                    </div>
                                   </div>
          
                              </div>
                          </div>

        <!-- /.col -->
			

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  


   

        </section>

    <!-- /.content -->
@endsection
@section('scripts')
<script type="text/javascript">
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
  @elseif(session('pesan') == 'capaiankosong')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'Status Tidak Boleh Kosong',
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


  @endif
</script>
@endsection