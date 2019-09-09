<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransaksiAcplan extends Model
{
    protected $table = 'transaksiacplan';
    // protected $primaryKey = 'id_transaksi';

  
    public function CreatedUser()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
   
}
