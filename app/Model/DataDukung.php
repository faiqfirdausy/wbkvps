<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DataDukung extends Model
{
    protected $table = 'data_dukung';
    protected $primaryKey = 'id';

    const PEMASYARAKATAN = 1;
    const IMIGRASI = 2;
    const ESELON_1 = 3;

    
    public function AbcSoal()
    {
        return $this->belongsTo('App\Model\AbcSoal', 'id_abcsoal', 'id');
    }

    public function File2()
    {
        return $this->hasMany('App\Model\File2', 'id_data_dukung', 'id');
    }

    public function filesx()
    {
        return $this->hasMany('App\Model\DataFile', 'id_datadukung', 'id');
    }
    public function filesxuser()
    {
        $session = Auth::user();

        return $this->hasOne('App\Model\DataFile', 'id_datadukung', 'id')->where('id_user',$session->id);
    }


}
