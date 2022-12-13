<?php

namespace App\Imports;

use App\Spt;
use Maatwebsite\Excel\Concerns\ToModel;

class SptImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Spt([
           'kode_form' => $row[1],
           'tahun_pajak' => $row[2],
           'pembetulan' => $row[3],
           'no_urut' => $row[4],
           'masa_perolehan_1' => $row[5],
           'masa_perolehan_2' => $row[6],
           'npwp' => $row[7],
           'nik' =>$row[8],
           'nama' => $row[9],
           'alamat' => $row[10],
           'jk' => $row[11],
           'sts_ptkp' => $row[12],
           'jlh_tanggungan' => $row[13],
           'jabatan' => $row[14],
           'flag_asing' => $row[15],
           'flag_status' => $row[16],
           'kp' => $row[17],
           'A1' => $row[18],
           'A2' => $row[19],
           'A3' => $row[20],
           'A4' => $row[21],
           'A5' => $row[22],
           'A6' => $row[23],
           'A7' => $row[24],
           'A8'=> $row[25],
           'A9' => $row[26],
           'A10' =>$row[27],
           'A11' =>$row[28],
           'A12' =>$row[29],
           'A13' =>$row[30],
           'A14' =>$row[31],
           'A15' =>$row[32],
           'A16' =>$row[33],
           'A17' =>$row[34],
           'A18' =>$row[35],
           'A19' =>$row[36],
           'A20' =>$row[37],
           'st_pindah'=>$row[38],
           'npwppemungut'=>$row[39],
           'namapemungut'=>$row[40],
           'tgl_bukti'=>$row[41],
           'A21'=>$row[42],
           'A22' =>$row[43],
           'A23' =>$row[44],
           'A24' =>$row[45],
           'flag_A24'=>$row[46],
           'bln_A24' => $row[47],
           'sts_kepegawaian' =>$row[48],
           'sts_kawin' =>$row[49]

        ]);
    }
}
