<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tutor;

use App\Pengguna;

class tutorController extends Controller
{
	public function awal()
	{
    	$semuatutor = tutor::all();
        return view('tutor.awal',compact('semuatutor'));
    }

	 public function tambah()
	{
 	  	return view('tutor.tambah');
	}

 	public function simpan(Request $input)
 	{
 		$pengguna = new pengguna($input->only('nama_pengguna','password'));
    	
    	if($pengguna->save())
    	{
        	$tutor = new tutor;
        	$tutor->nip = $input->nip;
        	$tutor->nama = $input->nama;
        	$tutor->email = $input->email;
        	$tutor->alamat = $input->alamat;
    		    	    
    	    if($pengguna->tutor()->save($tutor)) 
        	$this->informasi = 'Berhasil simpan data';
    	}

    return redirect('tutor')->with(['informasi'=>$this->informasi]);
 	
 	}

 	public function edit($id)
    {
        $tutor = tutor::find($id);
        return view('tutor.edit')->with(array('tutor'=>$tutor));
    }

	public function lihat($id)
    {
        $tutor = tutor::find($id);
        return view('tutor.lihat')->with(array('tutor'=>$tutor));
    }

	public function update($id, Request $input)
    {
        $tutor = tutor::find($id);
        $pengguna = $tutor->pengguna;
        $tutor->nip = $input->nip;
        $tutor->nama = $input->nama;
        $tutor->email = $input->email;
        $tutor->alamat = $input->alamat;
        $tutor->save();
            $pengguna->fill($input->only('nama_pengguna'));
            if (!empty($input->password)){
                $pengguna->password = $input->password;
            }
            if ($pengguna->save()){
                $this->informasi = 'Berhasil simpan data';
            }
            else{
                $this->informasi = 'Gagal Simpan Data';
            }

        return redirect('tutor')->with(['informasi' => $this-> informasi]);
    }

    public function hapus($id)
    {
        $tutor = tutor::find($id);
        if($tutor->pengguna()->delete())
        {
            if($tutor->delete()) 
                $this->informasi = 'Berhasil hapus data';
            return redirect('tutor')-> with(['informasi'=>$this->informasi]);
        }
    }
    //
}
