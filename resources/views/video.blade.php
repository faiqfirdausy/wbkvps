@extends('layouts.appsvideo', ['title' => 'Home'])

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
              <h3 class="box-title">Unggah Video</h3>
			   <center><p></p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
				 <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('video/update') }}" enctype="multipart/form-data">
              {!! csrf_field() !!}

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Video</label>
                  <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Video">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Link Video</label>
                  <input name="link" type="text" class="form-control" id="exampleInputPassword1" placeholder="Link Video">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar Cover Video</label>
                  <input name="cover" type="file" id="exampleInputFile">

                  <p class="help-block">*ukuran dimensi gambar 400x300</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  </div>

					<!--table-->
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table Video</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>NO</th>
                  <th>JUDUL VIDEO</th>
                  <th>LINK VIDEO</th>
                  <th>COVER VIDEO</th>
                  
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
                  <th>JUDUL VIDEO</th>
                  <th>LINK VIDEO</th>
                  <th>COVER VIDEO</th>
                </tr>
                </tfoot>
              </table>
            </div>
			</div>
            <!-- /.box-body -->
          </div>
   

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
        'Anda Berhasil Menambahkan Video',
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
        'File Harus Gambar Berdimensi 300 x 400',
        'error',
        )
        });
    @endif


  @endif
</script>
@endsection