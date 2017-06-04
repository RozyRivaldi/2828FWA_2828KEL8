@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Tutor</strong>
		<a href="{{ url('tutor/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i> Tutor</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nip</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuatutor as $tutor)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $tutor->nip or 'nip kosong' }}</td>
					<td>{{ $tutor->nama or 'nama kosong' }}</td>
					<td>{{ $tutor->email or 'email kosong' }}</td>
					<td>{{ $tutor->alamat or 'alamat kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('tutor/edit/'.$tutor->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('tutor/'.$tutor->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('tutor/hapus/'.$tutor->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop