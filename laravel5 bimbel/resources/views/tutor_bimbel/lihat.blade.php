@extends('master')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('tutor_bimbel')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Tutor Mengajar</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Tutor</td>
			<td>:</td>
			<td>{{$tutor_bimbel->tutor->nama}}</td>
		</tr>
		<tr>
			<td>Nama Matapelajaran</td>
			<td>:</td>
			<td>{{$tutor_bimbel->bimbel->mata_pelajaran}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$tutor_bimbel->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$tutor_bimbel->update_at}}</td>
		</tr>
	</table>
</div>
@stop