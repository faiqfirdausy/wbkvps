@extends('layouts.appsawal', ['title' => 'Home'])

@section('content')
    <section class="content-header">

        <div class="breadcrumb">
            <h1 class="font-realisasi label label-danger">Rencana Realisasi 5/10</h1>
        </div>


    <div class="box box-primary">

            <form action="{{url('kategori/kirim')}}" method="POST" role="form" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID ABC Soal :</label>
                  <input type="text" class="form-control" name="id" placeholder="Masukkan ID ABC SOAL">
                </div>
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" id="news_content_form_group">
                                        <label for="news_content">Petunjuk Teknis : </label>
                                        {{-- <textarea class="form-control textarea" cols="8" name="news_content" id="news_content" placeholder="Isikan Detail Berita"></textarea> --}}
                                        <textarea id="editor1" name="news_content" rows="10" cols="80"></textarea>
                                        <span class="help-block hidden error_msg" id="news_content_error_msg"></span>
                                    </div>
                                </div>
                            </div>
    
              <div class="box-footer">
                <button type="submit" class="btn btn-flat btn-primary">Simpan</button>
              </div>
            </form>
          </div>


    </section>
    <section class="content">

    </section>
@endsection

@section('css')
<script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>

    <style type="text/css">
        .mt-25 {
            margin-top: 25px;
        }
        .hr {
            width: 100%; 
            height: 20px; 
            border-bottom: 1px 
            solid #f3f4f7; 
            text-align: center;
        }
        .hr-span {
            font-size: 15px; 
            background-color: #FFF; 
            padding: 0 10px; 
            position: relative; 
            top: 7px;
        }
        .font-realisasi {
            font-size: 110%;
        }
        .tooltip-inner {
            max-width: 350px;
            /* If max-width does not work, try using width instead */
            width: 350px; 
            text-align:left !important;
        }
        .bg-dark-orange {
            background-color: #d76502 !important;
            color: #fff !important;
        }
        .separator {
            margin-top: -1px; 
            border-top: 1px solid #fff;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();  
    </script>
    <script src="{{asset('js/ckeditor.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
     CKEDITOR.replace('editor1');
});
</script>
@endsection
