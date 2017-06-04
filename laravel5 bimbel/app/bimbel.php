<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bimbel extends Model
{
	protected $table = 'bimbel'; 
    protected $fillable = ['mata_pelajaran','keterangan'];

    public function tutor_bimbel()
	{
		return $this->hasOne(tutor_bimbel::class);
	}
    //
}
