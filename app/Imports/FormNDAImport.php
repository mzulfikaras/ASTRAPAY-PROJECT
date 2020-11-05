<?php

namespace App\Imports;

use App\FormNda;
use Maatwebsite\Excel\Concerns\ToModel;

class FormNDAImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FormNda([
            'form_permohonan' => $row[0],
            'tanggal_permohonan' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('d-M-Y'),
            'nama_pemohon' => $row[2],
            'nama_identitas' => $row[3],
            'no_identitas' => $row[4],
            'instansi' => $row[5],
            'nama_kegiatan' => $row[6],
            'periode_kegiatan' => $row[7],
            'status' => $row[8],
        ]);
    }
}
