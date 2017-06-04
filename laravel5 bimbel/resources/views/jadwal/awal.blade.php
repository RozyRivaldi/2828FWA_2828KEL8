@extends('master')
@section('container')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Bimbel Pelajar</strong>
		<a href="{{url('jadwal/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i> Jadwal </a>
			<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
		<tr>
			<th>No</th>
			<th>NIS </th>
			<th>Nama Siswa</th>
			<th>Nama Matapelajaran</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuajadwal as $jadwal)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal->pelajar->nim or 'NIS kosong'}}</td>
					<td>{{ $jadwal->pelajar->nama or 'Nama kosong'}}</td>
					<td>{{ $jadwal->tutor_bimbel->bimbel->mata_pelajaran or 'Matapelajaran kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('jadwal/edit/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('jadwal/lihat/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('jadwal/hapus/'.$jadwal->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i>
							</a>
						</div>
					</td>
				</tr>
			@endforeach	
		</tr>
	</tbody>
</table>
</div>
@stop