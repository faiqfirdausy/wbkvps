<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Model\Transaksi;
use App\Model\RomawiSoal;
use App\Model\NomorSoal;
use App\Model\AbcSoal;
use App\Model\Jawaban;
use App\Model\Upt;
use App\Model\DataFile;
use App\Model\DataDukung;
use App\Model\File2;
use App\Model\Divisi;
use App\Model\TransaksiIpk;
use App\Model\TransaksiVideo;
use App\Model\TransaksiAcplan;



use File;

use Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $userId = Auth::user()->id;
    $tercapai1 = Transaksi::where('created_by',$userId)
   ->selectRaw('*, sum(nilai) as sum')
   ->first(); 
    $belumtercapai = 100 - $tercapai1->sum ;
    $tercapai = $tercapai1->sum;
        $data['tercapai'] = $tercapai;
		$data['belumtercapai'] = $belumtercapai;

		$data['datadivisi'] = Divisi::with('Upt')->get();
       

        $datatok = Divisi::all();
        $data['dataupt'] = Upt::all();

        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $romawi =RomawiSoal::with('NomorSoal')->get();
        $ses =  Auth::user();
                $data['trevisi2'] = Transaksi::where('status',2)->where('created_by',$userId)->get();
        $data['jmlrevisi'] = Transaksi::where('status',2)->where('created_by',$userId)->count();
        $data['tnonverif'] = Transaksi::where('status',0)->get();
        $data['tverif'] = Transaksi::where('status',1)->get();
        $data['trevisi'] = Transaksi::where('status',2)->get();

        
       
        $data['session'] = Auth::user();
        return view('home2',$data);
    }
	    public function perubahan()
    {
        return view('perubahan');
    }
        public function updatevideo(Request $request)
    {
        $userId = Auth::user()->id;
        $upt = User::with('Upt')->find($userId);
        $nama_upt = $upt->Upt->nama_upt;
        $ruleskosong = array(
                    'judul'  => 'required',
                    'cover'  => 'required',
                    'link'   => 'required',
                );
        $rulesbesar = array(
                    'cover'  => 'max:52048|dimensions:width=400,height=300'
                );
        $error = Validator::make($request->all(), $ruleskosong);
        $errorbesar = Validator::make($request->all(), $rulesbesar);
        if($error->fails())
        {
        $id_transaksi = $request->idtransaksi;
        return redirect('video/')->with('pesan', 'kosong');

        }
        else if($errorbesar->fails())
        {
        return redirect('video/')->with('pesan', 'besar');

        }
        DB::beginTransaction();

            try {
                $TransaksiVideo = new TransaksiVideo;
                $TransaksiVideo->created_by = $userId;
                $TransaksiVideo->link = $request->link;
                $TransaksiVideo->judul = $request->judul;
                $uploaded = $request->file('cover');
                $ext = $uploaded->getClientOriginalExtension();
                $oriname = $uploaded->getClientOriginalName();
                $filename = $oriname;
                Storage::disk('local')->putFileAs('file_upload/'.$nama_upt.'/Video/', $uploaded, $filename);
                $fileUpload = 'file_upload/'.$nama_upt.'/Video/'.$filename;
                $TransaksiVideo->path = $fileUpload;
                $TransaksiVideo->namafile = $filename;
                $TransaksiVideo->save();
                

                
                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');

                return redirect('video/')->with('pesan', 'sukses');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }
		public function video()
    {
        $userId = Auth::user()->id;
        $data['Transaksi'] = TransaksiVideo::where('created_by',$userId)->get();
        $data['session'] = Auth::user();
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();


        return view('video',$data);
    }
		public function ipkikm()
    {
        $userId = Auth::user()->id;
		$data['session'] = Auth::user();
		$data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['ipkikm'] = TransaksiIpk::where('created_by',$userId)->get();
        return view('ipkikm',$data);
    }
        public function ipkikminsert(Request $request)
    {
        $userId = Auth::user()->id;
        $upt = User::with('Upt')->find($userId);
        $nama_upt = $upt->Upt->nama_upt;
        $ruleskosong = array(
                    'nilai'  => 'required',
                    'upload_files'  => 'required',
                    'tahun'         => 'required',
                    'triwulan'         => 'required'
                );
        $rulesbesar = array(
                    'upload_files'  => 'max:52048'
                );
        $error = Validator::make($request->all(), $ruleskosong);
        $errorbesar = Validator::make($request->all(), $rulesbesar);
        if($error->fails())
        {
        $id_transaksi = $request->idtransaksi;
        return redirect('ipkikm/')->with('pesan', 'kosong');

        }
        else if($errorbesar->fails())
        {
        return redirect('ipkikm/')->with('pesan', 'besar');

        }


         DB::beginTransaction();

            try {
                $TransaksiIpk = new TransaksiIpk;
                $TransaksiIpk->nilai = $request->nilai;
                $TransaksiIpk->triwulan = $request->triwulan;
                $TransaksiIpk->tahun = $request->tahun;
                $TransaksiIpk->created_by = $userId;

                $uploaded = $request->file('upload_files');
                $ext = $uploaded->getClientOriginalExtension();
                $oriname = $uploaded->getClientOriginalName();
                $filename = $oriname;
                Storage::disk('local')->putFileAs('file_upload/'.$nama_upt.'/IpkIkm/', $uploaded, $filename);
                $fileUpload = 'file_upload/'.$nama_upt.'/IpkIkm/'.$filename;
                $TransaksiIpk->path = $fileUpload;
                $TransaksiIpk->namafile = $filename;
                $TransaksiIpk->status =0;



                $TransaksiIpk->save();
                

                
                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');

            return redirect('ipkikm/')->with('pesan', 'sukses');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }
		public function acplaninsert(Request $request)
    {
		$userId = Auth::user()->id;
        $upt = User::with('Upt')->find($userId);
        $nama_upt = $upt->Upt->nama_upt;
        $ruleskosong = array(
                    'upload_files'  => 'required',
                    'tahun'         => 'required',
                    'semester'         => 'required'
                );
        $rulesbesar = array(
                    'upload_files'  => 'max:52048'
                );
        $error = Validator::make($request->all(), $ruleskosong);
        $errorbesar = Validator::make($request->all(), $rulesbesar);
        if($error->fails())
        {
        $id_transaksi = $request->idtransaksi;
        return redirect('acplan/')->with('pesan', 'kosong');

        }
        else if($errorbesar->fails())
        {
        return redirect('acplan/')->with('pesan', 'besar');

        }


         DB::beginTransaction();

            try {
                $TransaksiAcplan = new TransaksiAcplan;
                $TransaksiAcplan->periode = $request->semester;
                $TransaksiAcplan->tahun = $request->tahun;
                $TransaksiAcplan->created_by = $userId;

                $uploaded = $request->file('upload_files');
                $ext = $uploaded->getClientOriginalExtension();
                $oriname = $uploaded->getClientOriginalName();
                $filename = $oriname;
                Storage::disk('local')->putFileAs('file_upload/'.$nama_upt.'/ActPlan/', $uploaded, $filename);
                $fileUpload = 'file_upload/'.$nama_upt.'/ActPlan/'.$filename;
                $TransaksiAcplan->path = $fileUpload;
                $TransaksiAcplan->namafile = $filename;
                $TransaksiAcplan->status =0;



                $TransaksiAcplan->save();
                

                
                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');

            return redirect('acplan/')->with('pesan', 'sukses');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }
    public function acplan()
    {


        $userId = Auth::user()->id;
        $data['acplan'] = TransaksiAcplan::where('created_by',$userId)->get();

        $data['session'] = Auth::user();
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        return view('acplan', $data);
    }
      public function viewDownload()
    {


        $userId = Auth::user()->id;

        $data['session'] = Auth::user();
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        return view('viewdownload', $data);
    }
     public function updateverif(Request $request)
    {
        $rules = array(
                    'capaian'  => 'required'
                );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
        $id_transaksi = $request->idtransaksi;
        return redirect('verifikasi/'.$id_transaksi)->with('pesan', 'capaiankosong');

        }
        DB::beginTransaction();

            try {
                $capaian = $request->capaian;

                $capaian = $capaian / 10;
                $abc = AbcSoal::findorFail($request->id_abcsoal);
                $Transaksi = Transaksi::findorFail($request->idtransaksi);
                $time = Carbon\Carbon::now()->format('Y-m-d H:i:s');
                if($capaian == 1)
                {
                $Transaksi->status = 1;
                }
                else
                {
                $Transaksi->status = 2;
                }

                $totalnilai = $abc->nilai * $capaian * 1.66;
                $Transaksi->nilai = $totalnilai;
                $Transaksi->keterangan = $request->keterangan;
                $Transaksi->capaian = $capaian;
                $Transaksi->updated_by =  Auth::user()->id;
                $Transaksi->updated_at = $time;
                $Transaksi->save();

                
                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');

                return redirect('/home');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }

		public function pimti()
    {
        $data['session'] = Auth::user();
        $data['listnilai'] = Transaksi::groupBy('created_by')
   ->selectRaw('*, sum(nilai) as sum')
   ->get();
        return view('pimti',$data);
    }
		public function verifikasi($id)
    {

        $data['transaksi'] = Transaksi::where('id',$id)->first();
        $data['session'] = Auth::user();
        $data['idtransaksi'] = $id;


        return view('verifikasifix2',$data);
    }
	
		public function status()
    {
                $ses =  Auth::user();

         $data['tnonverif'] = Transaksi::where('status',0)->where('created_by',$ses->id)->get();
        $data['tverif'] = Transaksi::where('status',1)->where('created_by',$ses->id)->get();
        $data['trevisi'] = Transaksi::where('status',2)->where('created_by',$ses->id)->get();
		$data['session'] = Auth::user();
		$data['kategori'] = RomawiSoal::with('NomorSoal')->get();

        return view('status',$data);
    }
	
		public function verifipkikm()
    {
        $data['ipkikm'] = TransaksiIpk::all();

		$data['session'] = Auth::user();
		$data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        return view('verifipkikm',$data);
    }
		public function verifacplan()
    {
		$data['session'] = Auth::user();
		$data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        return view('verifacplan',$data);
    }
	
		public function verifikasi2()
    {

      $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['session'] = Auth::user();
        return view('verifikasi2',$data);
    }
            public function pertanyaan2()
    {
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['session'] = Auth::user();

        return view('pertanyaan2.home',$data);
    }
           public function notifikasi($id)
    {
        $userId = Auth::user()->id;

        $data['session'] = Auth::user();
        $datatransaksi = Transaksi::findorFail($id);
        return redirect('pertanyaan2/kategori/'.$datatransaksi->AbcSoal->NomorSoal->RomawiSoal->id)->with('id_romawi', $datatransaksi->AbcSoal->NomorSoal->id)->with('id_abc',$datatransaksi->AbcSoal->id);

    }
        public function subindikator($id)
    {
        $userId = Auth::user()->id;

        $data['session'] = Auth::user();
        $c = session('id_romawi');
        $data['tab'] = session('id_romawi') ?? 1;
        $data['trevisi'] = Transaksi::where('status',2)->where('created_by',$userId)->get();
        $data['jmlrevisi'] = Transaksi::where('status',2)->where('created_by',$userId)->count();

        // $data['transaksi'] = Transaksi::where('created_by', Auth::user()->id)->with('files')->first();
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['romawi'] = RomawiSoal::with('NomorSoal')->findorFail($id);
        $data['getkategori_id'] =  NomorSoal::with('AbcSoal', 'RomawiSoal', 'AbcSoal.myTransaksi')->findOrFail($id);
        $data['user_id'] =  Auth::user()->id;
        $data['id_kategori'] = $id;

        // $data['transaksi'] = Transaksi::where('created_by', Auth::user()->id)->with('filesx')->first();
        // $data['files'] = !is_null($data['transaksi']) ? array_column($data['transaksi']->files->toArray(), 'id_datadukung') : null;
        // $data['file_nama'] = !is_null($data['transaksi']) ? $data['transaksi']->files : null;
        
        return view('perubahan', $data);
    }
        public function downloadFile($id_file)
    {
        $file = DataFile::find($id_file);
        $path = public_path().'/'.$file->path;
        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = $file->namafile;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }
        else {
        $kategori = $file->Dakung->AbcSoal->NomorSoal->RomawiSoal->id;
        $id_romawi = $file->Dakung->AbcSoal->NomorSoal->id;
         return redirect('pertanyaan2/kategori/'.$kategori)->with('id_romawi', $id_romawi)->with('pesan', 'erorkosong');

           }

    }
    public function downloadFileVerif($id_file)
    {
        $file = DataFile::find($id_file);
        $path = public_path().'/'.$file->path;
        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = $file->namafile;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }
        else {
        $id_transaksi = $file->id_transaksi;
        return redirect('verifikasi/'.$id_transaksi)->with('pesan', 'erorkosong');

           }

    }
      public function downloadManual()
    {
        $path = public_path().'/manualbook/Manual Book SIAP ZI.pdf';
   


        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = "Manual Book SIAP ZI.pdf";
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }

        


    }
     public function downloadSop()
    {
        $path = public_path().'/manualbook/SOP SIAP ZI.pdf';
   


        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = "SOP SIAP ZI.pdf";
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }

        


    }
     public function downloadAcplan($id_file)
    {
        $file = TransaksiAcplan::find($id_file);
        $path = public_path().'/'.$file->path;
        if(!empty($file->path))
        {


        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = $file->namafile;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }
        else {
              return redirect('acplan/')->with('pesan', 'filekosong');

           }
        }
        else
        {
              return redirect('acplan/')->with('pesan', 'filekosong');

        }

    }
     public function downloadIpk($id_file)
    {
        $file = TransaksiIpk::find($id_file);
        $path = public_path().'/'.$file->path;
        if(!empty($file->path))
        {


        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = $file->namafile;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }
        else {
              return redirect('ipkikm/')->with('pesan', 'filekosong');

           }
        }
        else
        {
              return redirect('ipkikm/')->with('pesan', 'filekosong');

        }

    }

    public function downloadDakung($id_dakung)
    {
        $file = DataDukung::find($id_dakung);
        $path = public_path().'/'.$file->path;
        if(!empty($file->path))
        {


        if(File::exists($path)){
    //echo "n exist"; die();

        $filename = $file->namafiledakung;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
        }
        else {
        $kategori = $file->AbcSoal->NomorSoal->RomawiSoal->id;
        $id_romawi = $file->AbcSoal->NomorSoal->id;
         return redirect('pertanyaan2/kategori/'.$kategori)->with('id_romawi', $id_romawi)->with('pesan', 'erorkosong');

           }
        }
        else
        {
        $kategori = $file->AbcSoal->NomorSoal->RomawiSoal->id;
        $id_romawi = $file->AbcSoal->NomorSoal->id;
         return redirect('pertanyaan2/kategori/'.$kategori)->with('id_romawi', $id_romawi)->with('pesan', 'erorbelum');

        }

    }

    public function hapus(Request $request)
    {
         DB::beginTransaction();

            try {
                $time = Carbon\Carbon::now()->format('Y-m-d H:i:s');
                $userId = Auth::user()->id;
                $upt = User::with('Upt')->find($userId);
                $nama_upt = $upt->Upt->nama_upt;
                $id_datadukung = $request->id_datadukung;
                $kategori = $request->kategori;

                $file = DataFile::findOrFail($request->id_file);

                Storage::disk('local')->delete($file->path);
                DataFile::where('id', $request->id_file)->delete();


                $listfile = DataFile::where('id_transaksi',$request->id_transaksi)->get();
                if(!empty($listfile[0]) )
                {

                }
                else{

                    Transaksi::where('id', $request->id_transaksi)->delete();
                }


                
                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');

                return redirect('pertanyaan2/kategori/'.$kategori)->with('id_romawi', $request->id_romawi)->with('pesan', 'hapus');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }


      public function store(Request $request)
    {
        $rules = array(
                    'upload_files'  => 'required|max:52048'
                );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
        $kategori = $request->kategori;

        return redirect('pertanyaan2/kategori/'.$kategori)->with('id_romawi', $request->id_romawi)->with('pesan', 'erorvalid');
        }
        // dd($request->file('upload_files'));
        // $rules = array(
        //     'student_nrp_number' => 'required',
        //     'student_name' => 'required|string',
        //     'password' => 'required|string|min:6|confirmed',
        //     'password_confirmation' => 'required',
        // );

        // $messages = [
        //     'required' => 'Kolom ini wajib diisi.',
        //     'string' => 'Kolom ini hanya diisi huruf',
        //     'numeric' => 'Kolom ini hanya diisi angka',
        //     'confirmed' => 'Konfirmasi password ini tidak cocok.',
        //     'min' => [
        //         'string'  => 'Isian ini harus minimal :min karakter.',
        //     ]
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
            // return response()->json(['error'=>$validator->errors()]);
        // } else {
            DB::beginTransaction();

            try {
                

                $time = Carbon\Carbon::now()->format('Y-m-d H:i:s');
                $userId = Auth::user()->id;
                $upt = User::with('Upt')->find($userId);
                $nama_upt = $upt->Upt->nama_upt;
                $id_datadukung = $request->id_datadukung;
                if(!empty($request->id_transaksi) )
                {
                $transaksi = Transaksi::findOrFail($request->id_transaksi);
                    if(!empty($request->id_file) ){
                    $file = DataFile::findorFail($request->id_file);
                    Storage::disk('local')->delete($file->path);
                    }
                    else
                    {

                    $file = new DataFile;

                    }

                }
                else
                {

                $transaksi = new Transaksi;
                $file = new DataFile;
                }   

                // dd($request->file('upload_files.2'));


  

                $transaksi->id_abcsoal = $request->id_abcsoal;
                $transaksi->status = 0;
                $transaksi->created_by = $userId;
                $transaksi->created_at = $time;
                $transaksi->keterangan = null;
                $transaksi->save();
                $file->id_transaksi = $transaksi->id;
                $file->id_datadukung = $id_datadukung;
                $file->id_user = $userId;

                $uploaded = $request->file('upload_files');
                $ext = $uploaded->getClientOriginalExtension();
                $oriname = $uploaded->getClientOriginalName();
                $filename = $id_datadukung.'.'.$ext;
                Storage::disk('local')->putFileAs('file_upload/'.$nama_upt, $uploaded, $filename);
                $fileUpload = 'file_upload/'.$nama_upt.'/'.$filename;
                $file->path = $fileUpload;
                $file->namafile = $filename;
                $kategori = $request->kategori;

                $file->save();

                
                DB::commit();

                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');
                return redirect('pertanyaan2/kategori/'.$kategori)->with('id_romawi', $request->id_romawi)->with('pesan', 'upload');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }

}
