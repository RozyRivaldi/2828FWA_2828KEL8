<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor_bimbel extends Model
{
	protected $table = 'tutor_bimbel';
    protected $fillable = ['id_tutor','id_bimbel'];
    // protected $guarded = ['id'];

    public function tutor(){
    	return $this->belongsTo(tutor::class,'id_tutor');
    }
    public function jadwal(){
    	return $this->hasMany(jadwal::class,'id_tutor_bimbel');
    }
    public function bimbel(){
    	return $this->belongsTo(bimbel::class,'id_bimbel');
    }

    public function getNamatutorAttribute(){
        return $this->tutor->nama;
    }

    public function getNiptutorAttribute(){
        return $this->tutor->nip;
    }
    
    public function getmata_pelajaranAttribute(){
        return $this->bimbel->mata_pelajaran;
    }

    public function listTutorDanBimbel()
    {
        $out = [];
        foreach ($this->all() as $ttrbmbl) 
        {
            $out[$ttrbmbl->id] = "{$ttrbmbl->tutor->nama} (bimbel{$ttrbmbl->bimbel->mata_pelajaran})";
        }
        return $out;
    }
    //
}
