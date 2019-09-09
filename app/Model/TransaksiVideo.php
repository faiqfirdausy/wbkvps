<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransaksiVideo extends Model
{
    protected $table = 'transaksivideo';
    // protected $primaryKey = 'id_transaksi';

  
    public function CreatedUser()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
   
}
