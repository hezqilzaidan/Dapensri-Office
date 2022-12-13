<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $guarded = [];
    protected $table = "tbl_data";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','badge','name','tmpt_lahir','tgl_lahir','alamat','kel','kec','nik','no_kk','kab_kot','provinsi','kode_pos','no_hp','atas_nama','no_rek','bank','npwp','st_pensiun','tgl_cerai','mninggal','user_id','st_pernikahan'
    ];
}
