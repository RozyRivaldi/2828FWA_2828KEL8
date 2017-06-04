@extends('master')
@section('container')
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('/tutor_bimbel')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data Tutor Mengajar</strong>
	</div>
	{!!  Form::open(['url'=>'tutor_bimbel/simpan','class'=>'form-horizontal'])  !!}
	@include('tutor_bimbel.form')
	<div style="width: 100%:text-align:right;">
		<button class="btn btn-pr
		imary"><i class="fa fa-save"></i> Simpan</button>
		<button class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
	</div>
	{!!  Form::close()  !!}
</div>
@stop