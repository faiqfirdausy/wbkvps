<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NomorSoal extends Model
{
    protected $table = 'nomorsoal';
    protected $primaryKey = 'id';

    // protected $fillable = ['nip_dosen', 'sidang_ta_id', 'slot_id', 'status', 'proposal_id', 'created_at', 'updated_at', 'deleted_at'];

    public function RomawiSoal()
    {
        return $this->belongsTo('App\Model\RomawiSoal', 'id_romawisoal', 'id');
    }

    public function AbcSoal()
    {
        return $this->hasMany('App\Model\AbcSoal', 'id_nomorsoal', 'id');
    }
}

