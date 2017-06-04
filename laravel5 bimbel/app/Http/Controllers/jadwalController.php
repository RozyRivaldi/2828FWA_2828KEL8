<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwal;
use App\pelajar;
use App\tutor_bimbel;
use App\ruangan;
use Input;
use Redirect;
use informasi;

class jadwalController extends Controller
{
	protected $informasi ='Gagal Melakukan Aksi';

	public function awal()
	{
		$semuajadwal = jadwal::all();
		return view('jadwal.awal', compact('semuajadwal'));
	}

	public function tambah()
	{
        $pelajar = new pelajar;
        $ruangan = new ruangan;
        $tutor_bimbel = new tutor_bimbel;
        return view('jadwal.tambah', compact('pelajar', 'ruangan', ''));
	}

	public function simpan(Request $input)
	{
        $jadwal = new jadwal($input->only('id_ruangan','id_tutor_bimbel', 'id_pelajar'));
        if ($jadwal->save()) $this->informasi = "Jadwal Berhasil Disimpan";
        return redirect('jadwal')->with(['informasi' => $this->informasi]);
	}

	public function edit ($id)
	{
		$jadwal = jadwal::find($id);
		$pelajar = new pelajar;
		$ruangan =	new ruangan;
		$tutor_bimbel = new tutor_bimbel; 
		return view('jadwal.edit', compact('pelajar','ruangan','tutor_bimbel','jadwal'));
	}

	public function lihat($id)
	{
		$jadwal = jadwal::find ($id); 
		return view('jadwal.lihat', compact('jadwal'));
	}

	public function update ($id, Request $input)
	{ 
		$jadwal = jadwal::find ($id);
		$jadwal->fill($input->only('id_ruangan','id_tutor_bimbel','id_pelajar'));
		if($jadwal->save()) $this->informasi = "Jadwal Berhasil Diperbarui";
		return redirect('jadwal')->with(['informasi'=>$this->$informasi]);
	}

	public function hapus($id)
	{
		$jadwal = jadwal::find ($id);
		if($jadwal->delete()) $this->informasi = "Jadwal Siswa Berhasil Dihapus";
	 	return redirect('jadwal')->with(['informasi'=>$this->$informasi]);
	}
    //
}
