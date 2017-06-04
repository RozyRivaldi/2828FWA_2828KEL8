@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('/tutor_bimbel')}}">
			<i class="fa text-default fa-chevron-left"></i>
		</a> Perbarui Data Tutor Matapelajaran </strong>
	</div>
	{!! Form::model($tutor_bimbel,['url'=>'tutor_bimbel/edit/'.$tutor_bimbel->id,'class'=>'form-horizontal'])!!}
		@include('tutor_bimbel.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
		{!!Form::close()!!}
</div>
@stop