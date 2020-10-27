<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAkses extends Model
{
    protected $guarded = [];

    public function kategori_akses(){
        return $this->belongsTo(KategoriAkses::class,'kategori_akses_id','id');
    }
}
