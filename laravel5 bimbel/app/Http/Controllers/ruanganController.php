<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ruangan;
use Input;
use Redirect;
use Informasi;

class ruanganController extends Controller
{
	public function awal()
	{
		return view('ruangan.awal', ['data'=>ruangan::all()]);
	}

	public function tambah()
	{
		return view('ruangan.tambah');
	}

	public function simpan(Request $input)
	{
 		$ruangan = new ruangan();
 		$ruangan->kode_ruangan = $input->kode_ruangan;
 		$informasi = $ruangan->save() ? 'Berhasil Simpan Data' : 'Gagal Simpan Data';
		return redirect('/ruangan')->with(['informasi'=>$informasi]);
 	}

	public function edit($id)
	{
		$ruangann = ruangan::find($id);
		return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
	}

 	public function lihat($id)
 	{
 		$ruangan = ruangan::find($id);
		return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
 	}

 	public function update($id, Request $input)
	{
		$ruangan = ruangan::find($id);
		$ruangan->kode_ruangan = $input->kode_ruangan;
		$informasi = $ruangan->save() ? 'Berhasil Update Data' : 'Gagal Update Data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}

 	public function hapus($id)
	{
		$ruangan = ruangan::find($id);
		$informasi = $ruangan->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}
    //
}
