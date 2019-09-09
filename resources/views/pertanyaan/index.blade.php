@extends('layouts.apps', ['title' => 'Home'])

@section('content')
    <section class="content-header">
        <h1>
            @if (!is_null($getkategori_id->RomawiSoal)) 
            {{ $getkategori_id->RomawiSoal->nama }}
            @else 
                Penilaian
            @endif
        </h1>
        <div class="breadcrumb">
            <h1 class="font-realisasi label label-danger">Rencana Realisasi 5/10</h1>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                @include('pertanyaan.kategori')
            </div>
            <div class="col-md-9">
                @include('pertanyaan.soaljawaban')
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style type="text/css">
        .mt-25 {
            margin-top: 25px;
        }
        .mt-10 {
            margin-top: 10px;
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
        .finish {
            position: absolute; 
            top: 0; 
            right: 0; 
            padding: 10px;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();  
    </script>
@endsection
