<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriAkses extends Model
{
    protected $guarded = [];

    public function from_akses(){
        return $this->hasMany(FromAkses::class,'kategori_akses_id','id');
    }
}
