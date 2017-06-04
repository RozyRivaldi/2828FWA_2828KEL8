<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Conracts\Auth\Authenticatable;

class Pengguna extends Model //implements Authenticatable
{
	//use \Illuminate\Auth\Authenticatable;

	protected $table = 'pengguna';
	protected $fillable = ['nama_pengguna','password'];

	public function pelajar()
	{
		return $this->hasOne(pelajar::class);
	}

	public function tutor()
	{
		return $this->hasOne(tutor::class);
	}

	public function peran()
	{
		return $this->belongToMany(peran::class);
	}
    //
}
