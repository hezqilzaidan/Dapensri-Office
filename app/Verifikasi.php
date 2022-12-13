<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    protected $guarded = [];
    protected $table = "tbl_verf";
    protected $primaryKey="id";
    protected $fillable = [
        'id','badge','name_foto','name_ktp','status','user_id'
    ];

}
