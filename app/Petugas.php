<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
   protected $table 	  = 'petugas';
    protected $fillable   = ['nama_petugas','username','password','id_level'];
    protected $primaryKey = 'id_petugas';
}
