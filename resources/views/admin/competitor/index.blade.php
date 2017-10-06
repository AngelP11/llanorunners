@extends('admin.templates.main')

@section('title', 'Lista de Competidores')

@section('admin-content')
	<table class="table table-bordered">
	  <thead class="">
	    <tr>
	      <th>N° de Dorsal</th>
	      <th>Nombre</th>
	      <th>Cedula</th>
	      <th>Fecha de nacimeiento</th>
	      <th>Genero</th>
	      <th>Telefono</th>
	      <th>E-mail</th>
		  <th>Club</th>
		  <th>Numero de referencia</th>
		  <th>Fecha de Pago</th>
	      <th>Accion</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($competitors as $competitor)
	     <tr>
	       <th scope="row">{{ $competitor->id }}</th>
	       <td>{{ $competitor->name }}</td>
		   <td>{{ $competitor->identification }}</td>
		   <td>{{ $competitor->birthdate }}</td>
		   <td>{{ $competitor->gender }}</td>
		   <td>{{ $competitor->telephone }}</td>
		   <td>{{ $competitor->email }}</td>
		   <td>{{ $competitor->club }}</td>
		   <td>{{ $competitor->references_number }}</td>
		   <td>{{ $competitor->payment_date }}</td>
	       <td><a href="{{ route('competitor.destroy', $competitor->id) }}" onclick="return confirm('¿Desea usted eliminar este competidor?')">Eliminar</a>
	     </tr>
	    @endforeach
	  </tbody>
	</table>

	<center>{{ $competitors->links() }}</center>

@endsection