@extends('master')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('tutor')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Tutor</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nip</td>
			<td>:</td>
			<td>{{$tutor->nip}}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$tutor->nama}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$tutor->email}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$tutor->alamat}}</td>
		</tr>
		<tr>
			<td>Pengguna</td>
			<td>:</td>
			<td>{{$tutor->pengguna->nama_pengguna}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$tutor->pengguna->password}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$tutor->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$tutor->update_at}}</td>
		</tr>
	</table>
</div>
@stop