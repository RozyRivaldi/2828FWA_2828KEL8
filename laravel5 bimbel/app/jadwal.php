<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
	protected $table = 'jadwal';
    protected $fillable = ['id_pelajar','id_ruangan','id_tutor_bimbel'];
    protected $guarded = ['id'];
    
     public function pelajar(){
     	return $this->belongsTo(pelajar::class,'id_pelajar');
     }

     public function tutor_bimbel(){
     	return $this->belongsTo(tutor_bimbel::class,'id_tutor_bimbel');
     }

     public function ruangan(){
     	return $this->belongsTo(ruangan::class,'id_ruangan');
     }

     public function getNamaTutorAttribute(){
         return $this->tutor_bimbel->tutor->nama;
     }

     public function getNipTutorAttribute(){
         return $this->tutor_bimbel->tutor->nip;
     }

     public function getttrbmblAttribute(){
         return $this->tutor_bimbel->matakuliah->title;
     }
    
     public function getNamapljrAttribute(){
         return $this->pelajar->nama;
     }

     public function getNimAttribute(){
         return $this->pelajar->nim;
     }

     public function getKoderuanganAttribute(){
         return $this->ruangan->title;
     }
    
     public function listTutorBimbelDanPelajarDanRuangan()
     {
      $out = [];
      foreach ($this->all() as $jdwl) {
          $out[$jdwl->id] = "{$jdwl->tutor_bimbel->tutor->nip} {$jdwl->tutor_bimbel->tutor->nama} {$jdwl->pelajar->nama} (ruangan {$jdwl->ruangan->kode_ruangan})";
      }
      return $out;
     }
    //
}
