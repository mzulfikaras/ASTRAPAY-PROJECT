<?php

namespace App\Exports;

use App\FormAkses;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormAksesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormAkses::all();
    }
}
