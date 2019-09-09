<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $primaryKey = 'id';

    public function Upt()
    {
        return $this->hasMany('App\Model\Upt', 'id_upt', 'id');
    }
}
