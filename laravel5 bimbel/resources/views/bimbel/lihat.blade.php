@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('bimbel') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Bimbel</strong>
	</div>
	<table class="table">
		<tr>
			<td>Mata Pelajaran</td>
			<td>:</td>
			<td>{{ $bimbel->mata_pelajaran }}</td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{ $bimbel->keterangan }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$bimbel->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$bimbel->updated_at }}</td>
		</tr>
	</table>
</div>
@stop