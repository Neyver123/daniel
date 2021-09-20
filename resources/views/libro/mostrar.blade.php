<h1>{{$titulo}}</h1>
<table border="2">
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>autor</th>
        <th>Codigo</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
    </tr>

    @foreach ($libros as $lib)
        <tr>
            <td>{{$lib->id}}</td>
            <td>{{$lib->nombre}}</td>
            <td>{{$lib->autor}}</td>
            <td>{{$lib->cod}}</td>
            <td>
                <form method='get' action='libros/{{$lib->id}}/edit'>
                    <input type='submit' value='Actualizar'>
                    @csrf
                    @method("GET")
                </form>
            <td>
                <form method='post' action='libro/{{$lib->id}}'>
                    <input type='submit' value='Elimnar'>
                    @csrf
                    @method("DELETE")
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{Route("libros.create")}}">Agregar libro</a>





