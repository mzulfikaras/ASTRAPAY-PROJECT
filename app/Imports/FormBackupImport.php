<?php

namespace App\Imports;

use App\FormBackup;
use Maatwebsite\Excel\Concerns\ToModel;

class FormBackupImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FormBackup([
            'form_permohonan' => $row[0],
            'tanggal_permohonan' =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('d-M-Y'),
            'nama_pemohon' => $row[2],
            'nama_informasi' => $row[3],
            'metode_backup' => $row[4],
            'periode_backup' => $row[5],
            'status' => $row[6],
        ]);
    }
}
