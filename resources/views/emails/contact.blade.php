@extends('layouts.tema')

@section('content')

	<p><strong>Nombre: </strong>{!!$name!!}</p>
	<p><strong>Correo: </strong>{!!$email!!}</p>

	<p><strong>Mensaje: </strong><br>{!!$mensaje!!}</p>
	<hr>
@endsection