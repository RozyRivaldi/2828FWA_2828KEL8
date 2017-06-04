@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('pelajar') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Pelajar</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td>{{ $pelajar->nim }}</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $pelajar->nama }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $pelajar->alamat }}</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td>:</td>
			<td>{{ $pelajar->pengguna->nama_pengguna }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $pelajar->pengguna->password }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pelajar->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pelajar->updated_at }}</td>
		</tr>
	</table>
</div>
@stop 