<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upt extends Model
{
    protected $table = 'upt';
    protected $primaryKey = 'id_upt';

    public function userUpt()
    {
        return $this->belongsTo('App\User', 'id_upt', 'id_upt');
    }
    public function Divisi()
    {
    	return $this->belongsTo('App\Model\Divisi', 'id_divisi', 'id');

    }
}
