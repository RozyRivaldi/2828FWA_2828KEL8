<div class="form-group">
	<label class="col-sm-2 control-label" id="id_pelajar">Pelajar</label>
	<div class="col-sm-10">
		{!! Form::select('id_pelajar', $pelajar->listpelajarDanNim(),null,['class'=>'form-control' ,'id'=>'id_pelajar','placeholder'=>"Pelajar"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_pelajar">Matapelajaran</label>
	<div class="col-sm-10">
		{!! Form::select('id_tutor_bimbel', $tutor_bimbel->listTutorDanBimbel(),null,['class'=>'form-control' ,'id'=>'bimbel','placeholder'=>"Matapelajaran"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_ruangan">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_ruangan',$ruangan->lists('kode_ruangan','id'),null,['class'=>'form-control', 'id'=>'id_ruangan','placeholder'=>"Ruangan"]) !!}
	</div>
</div>