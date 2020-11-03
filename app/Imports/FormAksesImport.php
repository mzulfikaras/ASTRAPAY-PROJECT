<?php

namespace App\Imports;

use App\FormAkses;
use Maatwebsite\Excel\Concerns\ToModel;

class FormAksesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FormAkses([
            'form_permohonan' => $row[0],
            'tanggal_permohonan' =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('d-M-Y'),
            'nama_pemohon' => $row[2],
            'nip' => $row[3],
            'bagian' => $row[4],
            'kategori_akses_id' => $row[5],
            'alasan_akses' => $row[6],
            'tingkat_akses' => $row[7],
            'status' => $row[8],
        ]);
    }
}
