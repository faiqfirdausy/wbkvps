<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransaksiIpk extends Model
{
    protected $table = 'transaksiipk';
    // protected $primaryKey = 'id_transaksi';

   
    public function CreatedUser()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
      
}
