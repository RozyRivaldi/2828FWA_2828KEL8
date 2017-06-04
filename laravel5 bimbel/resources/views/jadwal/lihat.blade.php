@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal') }}">
		<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>
		</a>Detail Data Jadwal Siswa</strong>
	</div>
	
	<table class="table">
		<tr>
			<td>NIS</td>
			<td>:</td>
			<td>{{$jadwal->pelajar->nim}}</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $jadwal->pelajar->nama}}</td>
		</tr>

		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{ $jadwal->tutor_bimbel->tutor->nip}}</td>
		</tr>

		<tr>
			<td>Tutor</td>
			<td>:</td>
			<td>{{ $jadwal->tutor_bimbel->tutor->nama}}</td>
		</tr>

		<tr>
			<td>Matapelajaran</td>
			<td>:</td>
			<td>{{ $jadwal->tutor_bimbel->bimbel->mata_pelajaran}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop