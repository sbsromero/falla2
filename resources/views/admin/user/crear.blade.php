@extends('admin.template.main')

@section('title', 'Crear Administrador')

@section('content')

<!--Este codigo ya lo llamo directamente en main.blade.php referente a errores.blade.php-->
	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif
	
	{!! Form::open(['route' => 'admin.user.store']) !!}

		<div class="form-group">
				{!! Form::label('name','Nombre Del Admnistrador') !!}
				{!! Form::text('name',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Nombre Del Administrador', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('email','Correo Electronico') !!}
				{!! Form::text('email',null, ['class' => 'form-control', 'placeholder'=> 'ejemplo@gmail.com', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('password','Contraseña') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder'=> '*********', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}

		</div>
	{!! Form::close() !!}
@endsection
