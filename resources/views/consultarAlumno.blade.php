@extends('master')

@section('contenido')
<form action="">
	<div class="form-group">
		<label for="control">Número de Control:</label>
		<input type="text" class="form-control" name="control" required>
	</div>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Número de Control</th>
      <th>Nombre</th>
      <th>Carrera</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>11170826</td>
      <td>Héctor Paliza</td>
      <td>Ing. en Sistemas</td>
    </tr>
    <tr>
      <td>2</td>
      <td>11170821</td>
      <td>Ladillas</td>
      <td>Ing. en Sistemas</td>
    </tr>
    <tr class="info">
      <td>3</td>
      <td>11170824</td>
      <td>Christian Zazueta</td>
      <td>Ing. en Sistemas</td>
    </tr>
    <tr class="success">
      <td>4</td>
      <td>11170829</td>
      <td>Laura López</td>
      <td>Ing. Industrial</td>
    </tr>
  </tbody>
</table> 
	<div>
			<button type="submit" class="btn btn-primary">Consultar</button>
			<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop