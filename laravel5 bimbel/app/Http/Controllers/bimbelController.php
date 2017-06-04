<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\bimbel;

use Input;

use Redirect;

use Informasi;

class bimbelController extends Controller
{
	public function awal()
    {
 	 	return view('bimbel.awal', ['data'=>bimbel::all()]);
 	}

 	public function tambah()
	{
 	 	return view('bimbel.tambah');
 	}

 	public function simpan(Request $input)
	{
 		$bimbel = new bimbel();
 		$bimbel->mata_pelajaran  = $input->mata_pelajaran;
 		$bimbel->keterangan   =  $input ->keterangan;
 		$informasi = $bimbel->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('bimbel')->with(['informasi'=>$informasi]);
 	}

 	public function edit($id)
	{
		$bimbel = bimbel::find($id);
		return view('bimbel.edit')->with(array('bimbel'=>$bimbel));
	}

 	public function lihat($id)
	{
 		$bimbel = bimbel::find($id);
		return view('bimbel.lihat')->with(array('bimbel'=>$bimbel));
	}

 	public function update($id, Request $input)
	{
		$bimbel = bimbel::find($id);
		$bimbel->mata_pelajaran = $input->mata_pelajaran;
		$bimbel->keterangan =$input->keterangan;
		$informasi = $bimbel->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('bimbel')->with(['informasi'=>$informasi]);
	}

	 public function hapus($id)
	{
		$bimbel = bimbel::find($id);
		$informasi = $bimbel->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('bimbel')->with(['informasi'=>$informasi]);
	}

    //
}
