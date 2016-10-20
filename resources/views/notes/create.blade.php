<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
</head>
<body>
	<h2>Crear Notas</h2>

	<form action="" method="post">
		{!! csrf_field() !!} <!-- Esto crea automaticamente el input con el token  -->

        <label>Descripción de la nota</label><br/>
        <textarea name="txtNota" id="txtNota" cols="30" rows="10">{{ old('txtNota') }}</textarea><br/>
		<input type="submit" value="Guardar nota">
		<input type="reset" value="Borrar">
	</form>
	<a href="{{ url('notes') }}">Volver</a>


	Mensaje:
</body>
</html>
