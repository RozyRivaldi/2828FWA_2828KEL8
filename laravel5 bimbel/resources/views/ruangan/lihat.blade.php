@extends('master')
@section('container')


<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('ruangann') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Ruangan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Kode_Ruangan</td>
			<td>:</td>
			<td>{{ $ruangan->kode_ruangan }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangan->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangan->updated_at }}</td>
		</tr>
	</table>
</div>
@stop