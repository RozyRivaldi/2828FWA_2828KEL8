<div class="form-group">
	<label class="col-sm-2 control-label" id="id_tutor"> Nama Tutor</label>
	<div class="col-sm-10">
	{!! Form::select('tutor',$tutor_bimbel->$tutor->listTutorDanNip(),null,['class'=>'form-control','id'=> 'tutor','placeholder'=>"Tutor"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label"> Matapelajaran</label>
	<div class="col-sm-10">
		{!! Form::select('bimbel',$tutor_bimbel->$bimbel->lists('mata_pelajaran','id'),null,['class'=>'form-control','id'=>'bimbel','placeholder'=>"Mata Pelajaran"]) !!}	
	</div>
</div>