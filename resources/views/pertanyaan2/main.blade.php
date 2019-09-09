@extends('layouts.apps', ['title' => 'Home'])

@section('content')
    <section class="content-wrapper">
        <h1>
        {{ $romawi->nama }}
 
        @php 
        print_r($session->upt->nama_upt)
        @endphp
   
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>

        {{$romawi->keterangan}}

           @foreach($romawi->NomorSoal as $data)
           <h1>Indikator</h1>
           <p>{{$data->nama}}</p>
           <h1>Detail</h1>
           <p>{{$data->keterangan}}</p>
           <h1> Poin Yang Harus Dipenuhi</h1>
           @foreach($data->AbcSoal as $abc)
            <p>{{$abc->nama}}</p>
            <h1> Dakung</h1>
           @foreach($abc->DataDukung as $dakung)
           {{$dakung->nama}}
           @endforeach
           @endforeach
           @endforeach

    </section>
@endsection
