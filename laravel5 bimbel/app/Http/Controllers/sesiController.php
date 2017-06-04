<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pengguna;
use Illuminate\Auth\SessionGuard;
use Auth;

class sesiController extends Controller
{
	public function index()
	{
		return view('/login');
	}

	public function form()
	{
		if(Auth::check())
		{
			return redirect('/');
		}
		return view('login');
	}

	public function validasi(Request $input)
	{
		$this->validate($input,[
			'nama_pengguna'=>'required',
			'password'=>'required',
			]);
		$pengguna = Pengguna::where($input->only('nama_pengguna','password'))->first();
		if(! is_null($pengguna))
		{
			Auth::login($pengguna);
			if(Auth::check())
				return redirect('/')->withErrors(['Pengguna Tidak Ditemukan']);
		}
	}

	public function logout()
	{
		if(Auth::check())
		{
			Auth::logout();
			return redirect('/login')->withErrors(['Silahkan Login Untuk Masuk Ke Sistem']);
		}
		else
		{
			return redirect('/login')->withErrors(['Silahkan Login Terlebih Dahulu']);
		}
	}
    //
}
