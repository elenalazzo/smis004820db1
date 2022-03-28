<h1>Listado de Medico - detalles</h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Area</th>
            <th>Patient</th>
            <th>Recipe</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($medico as $medico)
        <tr>
            <td>{{ $medico->id }}</td>
            <td>{{ $medico->name }}</td>
            <td>{{ $medico->area }}</td>
            <td>{{ $medico->patient }}</td>
            <td>{{ $medico->recipe }}</td>
            <td>{{ $medico->date }}</td>
            <form action="{{ url('/medico/' .$medico->id) }}" method="post"></form>
            @csrf
            {{ method_field('DELETE') }}
            <td><input type="submit"
            onclick="return confirm ('Desea eliminar el Registro')"
            value="Del"/> </td>
        </tr>
        @endforeach
    </tbody>
</table>
