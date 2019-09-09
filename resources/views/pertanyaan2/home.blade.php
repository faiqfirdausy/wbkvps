@extends('layouts.apps', ['title' => 'Home'])

@section('content')
    <section class="content-wrapper">
        <h1>

        @php 
        print_r($session->upt->nama_upt)
        @endphp
        
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
@php
$i = 0;

@endphp

 <table>
     <tr>
        @foreach($kategori as $data)

@php
$i++;
@endphp

            <td><a href="{{url('pertanyaan2/kategori/'.$data->id)}}" class="btn btn-default"> <p>{{$data->nama}}</p></a></td>
@if($i==3)
</tr><tr>
@php
$i==0
@endphp
@endif
@endforeach
</tr>
</table>

    </section>
@endsection
