<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tutor_bimbel;
use App\tutor;
use App\bimbel;
use App\jadwal;

class tutor_bimbelController extends Controller
{
	public function awal(){
       $semuatutorbimbel = tutor_bimbel::all();
       return view('tutor_bimbel.awal', compact('semuatutorbimbel'));

    //return "Hello dari tutor_bimbelController";
	}

	public function tambah()
    {      
        $tutor = new tutor;
        $bimbel = new tutor;
        return view('tutor_bimbel.tambah', compact('tutor','bimbel'));
        return $this->simpan();
    }

	public function simpan(Request $input)
	{
		$tutor_bimbel = new tutor_bimbel($input->only('id_tutor','id_bimbel'));
    	if($tutor_bimbel->save()) $this->informasi = "Matapelajaran dan Tutor Mengajar Berhasil Disimpan";
    	return redirect('tutor_bimbel')->with(['informasi'=>$this->informasi]);
		//$tutor_bimbel= new tutor_bimbel();
		//$tutor_bimbel->id_tutor  = '1';
		//$tutor_bimbel->id_bimbel  = '1';
		//$tutor_bimbel->save();
		//return "data dengan id tutor {$tutor_bimbel->id_tutor} yang mengajar bimbel dengan id {$tutor_bimbel->id} telah disimpan";
	}

	public function lihat($id){
        $tutor_bimbel = tutor_bimbel::find($id);
        return view('tutor_bimbel.lihat',compact('tutor_bimbel'));
    }

    public function edit($id){
        $tutor_bimbel = tutor_bimbel::find($id);
        $tutor = new tutor;
        $bimbel = new bimbel;
        return view('tutor_bimbel.edit',compact('tutor','bimbel','tutor_bimbel'));
    }

    public function update($id, Request $input)
    {
        $tutor_bimbel = tutor_bimbel::find($id);
        $tutor_bimbel->fill($input->only('id_tutor','id_bimbel'));
        if($tutor_bimbel->save()) $this->informasi = "Matapelajaran dan Tutor Mengajar Berhasil Diperbarui";
        return redirect('tutor_bimbel')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id, Request $input)
    {
        $tutor_bimbel = tutor_bimbel::find($id);
        if($tutor_bimbel->delete()) $this->informasi =     "Matapelajaran dan Pelajar Berhasil Dihapus";
        return redirect('tutor_bimbel')-> with(['informasi'=>$this->informasi]);
    }
    //
}
