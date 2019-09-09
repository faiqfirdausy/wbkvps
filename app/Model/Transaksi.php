<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    // protected $primaryKey = 'id_transaksi';

    public function filesx()
    {
        return $this->hasMany('App\Model\DataFile', 'id_transaksi', 'id');
    }
    public function CreatedUser()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
        public function AbcSoal()
    {
        return $this->belongsTo('App\Model\AbcSoal', 'id_abcsoal', 'id');
    }
}
