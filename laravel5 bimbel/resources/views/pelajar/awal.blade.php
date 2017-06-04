@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Pelajar</strong>
		<a href="{{url('pelajar/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Pelajar </i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuapelajar as $pelajar)
		<td>{{ $x++ }}</td>
		<td>{{ $pelajar->nim or 'NIS Kosong' }}</td>
		<td>{{ $pelajar->nama or 'Nama Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('pelajar/edit/'.$pelajar->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('pelajar/lihat/'.$pelajar->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('pelajar/hapus/'.$pelajar->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	