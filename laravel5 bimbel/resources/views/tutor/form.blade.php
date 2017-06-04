<div class="form-group">
	<label class="col-sm-2 control-label">Nip</label>
	<div class="col-sm-10">
		{!!Form::text('nip',null,['class'=>'form-control','placeholder'=>"Nip"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!!Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama Lengkap"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-sm-10">
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"c/o: Masukan_Email@gmail.com"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Masukan Alamat"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">User Name</label>
	<div class="col-sm-10">
		{!! Form::text('nama_pengguna',null,['class'=>'form-control','placeholder'=>"User Name"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',null,['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div>