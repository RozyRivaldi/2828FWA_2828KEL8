<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIS</label>
		<div class="col-sm-10">
			{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"NIS"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
		<div class="col-sm-10">
			{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
		<div class="col-sm-10">
			{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" >User Name</label>
		<div class="col-sm-10">
			{!! Form::text('nama_pengguna',isset($pelajar) ? $pelajar->pengguna->nama_pengguna : null,['class'=>'form-control','placeholder'=>"User Name"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" >Password</label>
		<div class="col-sm-10">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		</div>
</div>