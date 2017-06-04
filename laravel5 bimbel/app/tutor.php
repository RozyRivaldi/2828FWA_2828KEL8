<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
	protected $table = 'tutor';
	protected $fillable = ['nip','nama','email','alamat','pengguna_id'];

	public function pengguna(){
		return $this->belongsTo(pengguna::class);
	}

	public function tutor_bimbel()
    {
		return $this->hasMany(tutor_bimbel::class,'id_tutor','id');
    }

	public function getNama_PenggunaAttribute()
    {
		return $this->pengguna->nama_pengguna;
	}
	
	public function listTutorDanNip()
    {
        $out = [];
        foreach ($this->all() as $ttr) 
        {
            $out[$ttr->id] = "{$ttr->nip} ({$ttr->nama})";
        }
        return $out;
    }

    public function listTutorDanBimbel()
    {
    	$out = [];
    	foreach ($this->all() as $ttrbmbl) {
    		$out[$ttrbmbl->id] = "{$ttrbmbl->tutor->nip} {$ttrbmbl->tutor->nama} (bimbel {$ttrbmbl->bimbel->mata_pelajaran})";
    	}
    	return $out;
    }
    //
}
