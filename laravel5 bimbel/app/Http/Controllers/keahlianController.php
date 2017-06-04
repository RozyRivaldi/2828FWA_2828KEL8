<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\keahlian;
use Input;
use Redirect;
use Informasi;

class keahlianController extends Controller
{
	public function awal()
    {
 	 	return view('keahlian.awal', ['data'=>keahlian::all()]);
 	}

 	public function tambah()
	{
 	 	return view('keahlian.tambah');
 	}

 	public function simpan(Request $input)
	{
 		$keahlian = new keahlian();
 		$keahlian->keahlian  = $input->keahlian;
 		$informasi = $keahlian->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('keahlian')->with(['informasi'=>$informasi]);
 	}

 	public function edit($id)
	{
		$keahlian = keahlian::find($id);
		return view('keahlian.edit')->with(array('keahlian'=>$keahlian));
	}

 	public function lihat($id)
	{
 		$keahlian = keahlian::find($id);
		return view('keahlian.lihat')->with(array('keahlian'=>$keahlian));
	}

 	public function update($id, Request $input)
	{
		$keahlian = keahlian::find($id);
		$keahlian->keahlian = $input->keahlian;
		$informasi = $keahlian->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('keahlian')->with(['informasi'=>$informasi]);
	}

	 public function hapus($id)
	{
		$keahlian = keahlian::find($id);
		$informasi = $keahlian->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('keahlian')->with(['informasi'=>$informasi]);
	}
    //
}
