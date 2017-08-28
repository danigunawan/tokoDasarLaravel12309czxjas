<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingAkun extends Model
{
    //
     protected $fillable = ['id','nama_setting_akun','id_akun'];

    	public function daftar_akun()
		  {
		  	return $this->hasOne('App\DaftarAkun','id','id_akun');
		  }
}
