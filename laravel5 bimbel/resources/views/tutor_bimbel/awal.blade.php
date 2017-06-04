@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Tutor dan Matapelajaran Yang Diampu </strong>
		<a href="{{url('tutor_bimbel/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Jadwal Tutor </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nip</th>
				<th>Nama</th>
				<th>Matapelajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuatutorbimbel as $tutor_bimbel)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $tutor_bimbel->tutor->nip or 'Nip Kosong' }}</td>
				<td>{{ $tutor_bimbel->tutor->nama or 'Nama Kosong' }}</td>
				<td>{{ $tutor_bimbel->bimbel->mata_pelajaran or 'Matapelajaran Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('tutor_bimbel/edit/'.$tutor_bimbel->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('tutor_bimbel/lihat/'.$tutor_bimbel->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('tutor_bimbel/hapus/'.$tutor_bimbel->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop