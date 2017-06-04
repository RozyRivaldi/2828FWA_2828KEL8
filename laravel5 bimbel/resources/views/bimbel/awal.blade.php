@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Bimbel</strong>
		<a href="{{url('bimbel/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Bimbel </i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Mata Pelajaran</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $bimbel)
		<td>{{ $x++ }}</td>
		<td>{{ $bimbel->mata_pelajaran or 'Mata Pelajaran Kosong'}}</td>
		<td>{{ $bimbel->keterangan or 'Keterangan Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('bimbel/edit/'.$bimbel->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
				</a>

				<a href="{{url('bimbel/lihat/'.$bimbel->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
				</a>

				<a href="{{url('bimbel/hapus/'.$bimbel->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i>
				</a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop