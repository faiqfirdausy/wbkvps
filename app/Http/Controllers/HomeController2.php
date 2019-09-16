<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\storage;
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
use App\Model\TransaksiIpk;
use App\Model\TransaksiVideo;
use App\Model\TransaksiAcplan;

use File;

use Carbon;
class HomeController2 extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

	    public function indexfront()
    {
        $data['listvideo'] = TransaksiVideo::orderBy('id', 'DESC')->get();
        $data['jumlahvideo'] = TransaksiVideo::all()->count();

        $data['listupt'] = Upt::all();
        $data['listnilai'] = Transaksi::groupBy('created_by')
   ->selectRaw('*, sum(nilai) as sum')->orderBy('sum','DESC')
   ->get();

        return view('welcome',$data);
    }

	    public function capaian()
    {
        return view('capaian');
    }
		public function ipkikm()
    {
        return view('ipkikm');
    }	

}
