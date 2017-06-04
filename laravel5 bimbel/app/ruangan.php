<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
	protected $table = 'ruangan';
	protected $fillable = ['kode_ruangan'];

	public function jadwal()
	{
		return $this->hasMany(jadwal::class);
	}
    //
}
