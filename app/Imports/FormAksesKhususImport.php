<?php

namespace App\Imports;

use App\FormAksesKhusus;
use Maatwebsite\Excel\Concerns\ToModel;

class FormAksesKhususImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new FormAksesKhusus([
            'form_permohonan' => $row[0],
            'tanggal_permohonan' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('d-M-Y'),
            'nama_pemohon' => $row[2],
            'nama_kegiatan' => $row[3],
            'waktu_awal' => $row[4],
            'waktu_akhir' => $row[5],
            'rincian' => $row[6],
            'sistem' => $row[7],
            'tingkat_akses' => $row[8],
            'nama_personil_1' => $row[9],
            'nama_personil_2' => $row[10],
            'nama_personil_3' => $row[11],
            'nama_personil_4' => $row[12],
            'nama_personil_5' => $row[13],
            'nama_perangkat_1' => $row[14],
            'nama_perangkat_2' => $row[15],
            'nama_perangkat_3' => $row[16],
            'nama_perangkat_4' => $row[17],
            'nama_perangkat_5' => $row[18],
            'mac_address_1' => $row[19],
            'mac_address_2' => $row[20],
            'mac_address_3' => $row[21],
            'mac_address_4' => $row[22],
            'mac_address_5' => $row[23],
            'status' => $row[24],
        ]);
    }
}
