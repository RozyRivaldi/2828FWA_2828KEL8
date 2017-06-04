<?php

namespace App\Http\Request;

use App\Http\Requests\Request;

class pelajarRequest extends Request
{
	/**
	 * Determine if the user is authorized  to make  this request.
	 *
	 * @return bool
	 */

	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */

	 public function rules()
	 {
	 	$validasi  = [
	 	'nim' => 'required',
	 	'nama' => 'required',
	 	'alamat' => 'required',
	 	'nama_pengguna' => 'required'
	 	];
	 	
	 	if($this->is('pelajar/tambah'))
	 	{
	 		$validasi['password'] = 'required';
	 	}
	 	return $validasi;
	 }
}