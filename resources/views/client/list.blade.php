<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Fecha de Creacion</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{$client["id"]}}</td>
            <td>{{$client["name"]}}</td>
            <th>{{$client["created_at"]->diffForHumans()}}
</th>
            <td></td>
        </tr>
    @endforeach

    </tbody>
</table>