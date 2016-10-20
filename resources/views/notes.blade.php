<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
</head>
<body>
	<h2>Listado de notas</h2>
		{{$fecha}}
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nota</th>
            <th>Fecha</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notas as $val)
            <tr>
                <td>{{ $val->id }}</td>
                <td>{{ $val->note }}</td>
                <td>{{ $val->created_at }}</td>
                <td><a href="{{ url('notes/delete/'.$val->id) }}">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ url('notes/create') }}">Crear una nota</a>
</body>
</html>
