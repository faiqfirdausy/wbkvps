@foreach($kategori as $data)
<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">{{$data->nama}}</h3>
        <div class="box-tools">
            <a href="#" class="text-muted" data-toggle="tooltip" data-placement="auto bottom" title="{{$data->keterangan}}"><i class="fa fa-question"></i></a>
        </div>
    </div>
    <div class="box-body">
            @foreach($data->NomorSoal as $nomor)
                @if(isset($nomor->AbcSoal[0]))
                    <div class="row"> 
                        <div class="col-md-10">
                            <a href="{{url('kategori/'.$nomor->id.'/'.$nomor->AbcSoal[0]->id)}}" class="text-black">
                                <p>{{$nomor->nama}}</p>
                            </a>
                        </div>
                        <div class="col-md-2 text-green">
                            <i class="fa fa-fw fa-check-square"></i>
                        </div>
                    </div>
                @endif
            @endforeach
    </div>
</div>
@endforeach
