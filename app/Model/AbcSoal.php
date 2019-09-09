<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Auth;

class AbcSoal extends Model
{
    protected $table = 'abcsoal';
    // protected $primaryKey = 'id';
    // protected $fillable = ['nip_dosen', 'sidang_ta_id', 'slot_id', 'status', 'proposal_id', 'created_at', 'updated_at', 'deleted_at'];
    
    public function NomorSoal()
    {
        return $this->belongsTo('App\Model\NomorSoal', 'id_nomorsoal', 'id');
    }
    
    public function Jawaban()
    {
        return $this->hasMany('App\Model\Jawaban', 'id_abcsoal', 'id');
    }


    public function DataDukung()
    {
        return $this->hasMany('App\Model\DataDukung', 'id_abcsoal', 'id');
    }

    public function myTransaksi()
    {
        $session = Auth::user();

        return $this->hasOne('App\Model\Transaksi', 'id_abcsoal', 'id')->where('created_by',$session->id);
    }
}
