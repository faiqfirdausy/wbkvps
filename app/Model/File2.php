<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class File2 extends Model
{
    protected $table = 'file2';
    protected $primaryKey = 'id';

    const PEMASYARAKATAN = 1;
    const IMIGRASI = 2;
    const ESELON_1 = 3;

    
    public function DataDukung()
    {
        return $this->belongsTo('App\Model\DataDukung', 'id', 'id_data_dukung');
    }


}
