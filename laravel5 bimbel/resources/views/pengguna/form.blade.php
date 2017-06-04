<div class="form-group">
	<label class="col-sm-2 control-label">User Name</label>
		<div class="col-sm-10">
			{!!  Form::text('nama_pengguna',null,['class'=>'form-control','placeholder'=>"User Name"])  !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		{!!  Form::password('password',['class'=>'form-control','placeholder'=>"Password"])  !!}
		</div>
</div>