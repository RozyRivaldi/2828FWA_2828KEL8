<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pengguna;
use Input;
use Redirect;
use Informasi;

class PenggunaController extends Controller
{
	public function awal()
	{
		return view('pengguna.awal', ['data'=>Pengguna::all()]);
	}

	public function tambah()
	{
		return view('pengguna.tambah');
	}

	public function simpan(Request $input)
	{
		$this->validate($input,[
			'nama_pengguna' => 'required',
			'password' => 'required'
			]);
		$pengguna = new Pengguna();
		$pengguna->nama_pengguna = $input->nama_pengguna;
		$pengguna->password = $input->password;
		$informasi = $pengguna->save() ? 'Berhasil Simpan Data' : 'Gagal Simpan Data';
		return redirect('pengguna')->with(['informasi'=>$informasi]);
	}

	public function edit ($id)
	{
		$pengguna = Pengguna::find($id);
		return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
	}

	public function lihat($id)
	{
		$pengguna = pengguna::find($id);
		return view ('pengguna.lihat')->with(array('pengguna'=>$pengguna));
	}

	public function update($id, Request $input)
	{
		$pengguna = pengguna::find($id);
		$pengguna->nama_pengguna = $input->nama_pengguna;
		$pengguna->password = $input->password;
		$informasi = $pengguna->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('/pengguna')->with(['informasi'=>$informasi]);
	}

	public function hapus($id)
	{
		$pengguna = pengguna::find($id);
		if($pengguna->delete())
		{
			$this->informasi = 'Berhasil Hapus Data Pengguna';
		}

		return redirect('pengguna')->with(['informasi'=>$this->informasi]);
	}
    //
}
