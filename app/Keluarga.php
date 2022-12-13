<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $guarded = [];
    protected $table = "tbl_keluarga";
    protected $primaryKey ="id";
    protected $fillable = [
    // public $timestamps = false;
    'id','nama','no_kk','nik','ket','tgl_lahir','user_id'
    ];
    
}
