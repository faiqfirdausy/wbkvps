@extends('layouts.appsviewdownload', ['title' => 'Home'])

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
              <h3 class="box-title">Download Panduan</h3>
			   <center><p></p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
				 <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('acplan/update') }}" enctype="multipart/form-data">
              {!! csrf_field() !!}

              <div class="box-body">
                <!-- select -->
                <div class="form-group">
                  <label>SOP :</label>
                  <br>

  <a href="http://localhost/wbkvps/public/downloadsop" class="btn btn-danger " role="button" data-toggle="modal" data-target="#">Download SOP</a>
                </div>
				<!-- Date -->
              <div class="form-group">
                <label>Buku Panduan Aplikasi SIAP ZI</label>
                  <br>

         

  <a href="http://localhost/wbkvps/public/downloadmanual" class="btn btn-danger " role="button" data-toggle="modal" data-target="#">Download Buku Panduan</a>                </div>
                <!-- /.input group -->
              </div>

              </div>
              <!-- /.box-body -->


            </form>
          </div>

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  </div>
		
		<!--table-->
		

        </section>


    <!-- /.content -->
@endsection
@section('scripts')
<script type="text/javascript">
  @if(!empty(session('pesan')))
    @if(session('pesan') == 'sukses')
      $( document ).ready(function() {

        Swal.fire(
        'Sukses!',
        'Anda Berhasil Mengupload File',
        'success',
        )
        });
    @elseif(session('pesan') == 'kosong')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'Field Tidak Boleh Kosong',
        'error',
        )
        });
     @elseif(session('pesan') == 'filekosong')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Tidak Ditemukan',
        'error',
        )
        });
    @elseif(session('pesan') == 'besar')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Tidak Boleh Lebih Besar dari 50 MB',
        'error',
        )
        });
    @endif


  @endif
</script>
@endsection