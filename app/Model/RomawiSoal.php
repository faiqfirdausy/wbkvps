<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RomawiSoal extends Model
{
    protected $table = 'romawisoal';
    protected $primaryKey = 'id';
    // protected $fillable = ['nip_dosen', 'sidang_ta_id', 'slot_id', 'status', 'proposal_id', 'created_at', 'updated_at', 'deleted_at'];
       public function NomorSoal()
    {
        return $this->hasMany('App\Model\NomorSoal', 'id_romawisoal', 'id');
    }


}
