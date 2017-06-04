<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajar extends Model
{
	protected $table = 'pelajar';
	protected $fillable = ['nim','nama','alamat','pengguna_id'];

	public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
	}

	public function jadwal()
	{
		return $this->hasMany(jadwal::class,'id_pelajar');
	}

	public function getNama_PenggunaAttribute()
	{
		return $this->pengguna->nama_pengguna;
	}

	public function listpelajarDanNim()
	{
		$out = [];
		foreach ($this->all() as $pljr) 
		{
			$out[$pljr->id] = "{$pljr->nim} ({$pljr->nama})";
		}
		return $out;
	}
    //
}
