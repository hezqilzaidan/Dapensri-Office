<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('tbl_data')->select('tbl_data.name','tbl_data.badge','tmpt_lahir','tgl_lahir','kel','kec','provinsi','kode_pos','no_hp','no_rek','bank','atas_nama','npwp','tbl_keluarga.nama','tbl_keluarga.no_kk','nik','st_pensiun','st_pernikahan','tgl_mnkh','tgl_cerai','mniggal')
        ->rightJoin('tbl_keluarga','tbl_data.badge','=','tbl_keluarga.badge')->get();
    }
}
