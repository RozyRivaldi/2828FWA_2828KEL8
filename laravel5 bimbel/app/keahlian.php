<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keahlian extends Model
{
	protected $table = 'keahlian';
	protected $fillable = ['keahlian'];
	public function keahlian_tutor()
	{
		return $this->belongsToMany(keahlian_tutor::class);
	}
    //
}
