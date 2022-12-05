<?php

namespace App\Imports;

use App\Models\Gaji;
use Maatwebsite\Excel\Concerns\ToModel;

class GajiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Gaji([
            'bulan' => $row[0],
            'nip' => $row[1],
            'gaji' => $row[2],
            't_makan' => $row[3],
            't_operasional' => $row[4],
            't_jabatan' => $row[5],
            'lembur_nas' => $row[6],
            'lembur_b' => $row[7],
            'bpjs_kes_perusahaan' => $row[8],
            'bpjs_tk_perusahaan' => $row[9],
            'koreksi_plus' => $row[10],
            'bonus' => $row[11],
            'backup' => $row[12],
            'weekend_banking' => $row[13],
            'insentif' => $row[14],
            'total_plus' => $row[15],
            'jaminan' => $row[16],
            'koreksi_min' => $row[17],
            'diksar' => $row[18],
            'kta' => $row[19],
            'pph21' => $row[20],
            'bpjs_kes_kar' => $row[21],
            'bpjs_tk_kar' => $row[22],
            'bpjs_kes' => $row[23],
            'bpjs_tk' => $row[24],
            'pinjaman' => $row[25],
            'dansos' => $row[26],
            'admin' => $row[27],
            'potongan' => $row[28],
            'total' => $row[29],
            
        ]);
    }
}
