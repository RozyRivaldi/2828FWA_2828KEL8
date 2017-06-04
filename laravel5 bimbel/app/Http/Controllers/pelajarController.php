<?php

namespace App\Http\Controllers;
use App\Http\Requests\pelajarRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\pelajar;
use App\Pengguna;

class pelajarController extends Controller
{
	protected $informasi = 'Gagal Melakukan Aksi';

	public function awal()
	{
		// return "Hello Dari PelajarController";
		$semuapelajar = pelajar::all();
		return view('pelajar.awal',compact('semuapelajar'));
	}

	public function tambah()
	{
		return view('pelajar.tambah');
	}

	public function simpan(Request $input)
	{
		$pengguna = new pengguna($input->only('nama_pengguna','password'));
		if($pengguna->save())
		{
			$pelajar = new pelajar();
			$pelajar->nim = $input->nim;
			$pelajar->nama = $input->nama;
			$pelajar->alamat = $input->alamat;
			if($pengguna->pelajar()->save($pelajar)) $this->informasi='Berhasil Simpan Data';	
		}		
		return redirect('pelajar')->with(['informasi'=>$this->informasi]);
	}

	public function edit ($id)
	{
		$pelajar = pelajar::find($id);
		return view ('pelajar.edit')->with(array('pelajar'=>$pelajar));
	}

	public function lihat ($id)
	{
		$pelajar=pelajar::find($id);
		return view ('pelajar.lihat')->with(array('pelajar'=>$pelajar));
	}

	public function update ($id, Request $input)
	{
		$pelajar = pelajar::find($id);
		$pengguna = $pelajar->pengguna;
		$pelajar->nim = $input->nim;
		$pelajar->nama = $input->nama;
		$pelajar->alamat = $input->alamat;
		$pelajar->save();
		if(!is_null($input->nama_pengguna))
		{
			$pengguna->fill($input->only('nama_pengguna'));
			if(!empty($input->password))
			{
				$pengguna->password = $input->password;
			}
			if($pengguna->save()){
				$this->informasi = 'Berhasil Simpan Data';
			}
			else
			{
				$this->informasi = 'Gagal Simpan Data';
			}
		}

		return redirect('pelajar')->with(['informasi'=>$this->informasi]);
	}

	public function hapus ($id)
	{
		$pelajar=pelajar::find($id);
		if($pelajar->pengguna()->delete())
		{
			$this->informasi = 'Berhasil Hapus Data';
		}

		return redirect('pelajar')->with(['informasi'=>$this->informasi]);
	}
    //
}