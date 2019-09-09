<div class="row">
    @php 
        $no = 0;
        $selesai = 0;
    @endphp
    @foreach($getkategori_id->AbcSoal as $jawaban) 
        @php 
            ++$no;
            $url =  url('kategori/'.$id_kategori.'/'.$jawaban->id);
            $dukung = App\Model\DataDukung::where('id_abcsoal', $jawaban->id)->get();
            $files = array_column($transaksi->files->toArray(), 'id_datadukung');
            
            foreach ($dukung as $data) { 
                 if (in_array($data->id, $files)) {
                     $selesai += 1;
                 }
             }
        @endphp
        <div class="col-lg-3 col-xs-6">
            <a href="{{ url('kategori/'.$id_kategori.'/'.$jawaban->id) }}" class="small-box-footer">
                <div class="small-box bg-orange ">
                    <div class="inner">
                        <p>PERTANYAAN</p>
                        <h3>{{$no}}</h3>
                        @if ($url == url()->full())
                            <div class="separator"></div>
                        @endif
                    </div>
                    <div class="finish">
                      {{$selesai}} / {{ count($dukung) }}
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $getkategori_id->nama }}</h3>
        <div class="box-tools">
            <a href="#" class="text-muted" data-toggle="tooltip" data-placement="auto bottom" title="{{$getkategori_id->keterangan}}"><i class="fa fa-question"></i></a>
        </div>
    </div>
    @php
        $url = is_null($transaksi) ? "kategori/store" : "kategori/update";
    @endphp
    <form role="form" method="POST" action="{{ url($url) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="box-body">
            <input type="hidden" name="abcsoal" value="{{ $soaljawaban->id }}">
            <input type="hidden" name="kategori" value="{{ $id_kategori }}">
            @if (!is_null($transaksi))
            <input type="hidden" name="id_transaksi" value="{{ $transaksi->id_transaksi }}">
            @endif

            <div>
                <h5><strong>INDIKATOR</strong></h5>
                <p>{{$soaljawaban->nama}}</p>
            </div>
            <div class="mt-25">
                <h5><strong>PETUNJUK TEKNIS</strong></h5>
                <p>{!! $soaljawaban->petunjuk_teknis !!}</p>
            </div>

            <div class="hr">
                <span class="hr-span">
                    <strong>Unggah File Pendukung</strong>
                </span>
            </div>
        </div>
            <div class="mt-25">
                @php 
                    $numb=0;
                @endphp
                @foreach($soaljawaban->DataDukung as $data)
                    <div class="box-body">
                        @if (is_null($data->id_divisi) || ($data->id_divisi == Auth::user()->Upt->id_divisi))
                            <div class="wrapperr">
                                <div class="form-group">
                                    @php 
                                        $check = '';
                                        if (!is_null($files)) {
                                            if (in_array($data->id, $files)) {
                                                $check = '<a href="#" class="text-muted" data-toggle="tooltip" data-placement="auto bottom" title="" data-original-title="Belum dikonfirmasi"><i class="fa fa-check text-black"></i></a>';
                                            }
                                        }
                                    @endphp
                                    <label>{{ $data->nama }} &nbsp;&nbsp;{!! $check !!}</label>
                                    <input type="file" class="form-control" name="upload_files[]">
                                    <input type="hidden" name="id_datadukung[]" value="{{ $data->id }}">
                                    <input type="hidden" name="nama_datadukung[]" value="{{ $data->nama }}">
                                </div>
                            </div>
                            @if (!is_null($files))
                                @if (in_array($data->id, $files))
                                    <div class="box-body text-center">
                                        <img width="130" src="{{ asset('img/file_icon.png') }}"/>
                                        @foreach ($file_nama as $file)
                                            @if ($file->id_datadukung == $data->id)
                                            <a href="{{url('/kategori/download-file/'.$id_kategori.'/'.$file->id)}}">
                                                <p class="mt-10">{{ $file->ori_nama }}</p>
                                            </a>
                                                <input type="hidden" name="file[]" value="{{ $file->id }}">
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                        @endif
                    </div>
                    @php 
                        $numb++;
                    @endphp
                @endforeach
                <input type="hidden" class="form-control" name="numb" value="{{ $numb }}">
            </div>
        
        <div class="box-footer">
            <button type="submit" class="btn btn-flat btn-primary pull-right">Simpan Data</button>
        </div>
    </form>
</div>