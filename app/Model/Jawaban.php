<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'id';
    
    public function AbcSoal()
    {
        return $this->belongsTo('App\Model\AbcSoal', 'id', 'id_abcsoal');
    }


}
