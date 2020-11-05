<?php

namespace App\Imports;

use App\FormRestore;
use Maatwebsite\Excel\Concerns\ToModel;

class FormRestoreImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FormRestore([
            'form_permohonan' => $row[0],
            'tanggal_permohonan' =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('d-M-Y'),
            'nama_pemohon' => $row[2],
            'dasar_permohonan' => $row[3],
            'nama_info' => $row[4],
            'tujuan' => $row[5],
            'rencana_pemulihan' => $row[6],
            'status' => $row[7],
        ]);
    }
}
