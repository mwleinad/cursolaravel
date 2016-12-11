<table class="table" id="clientList">
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
        @include("client.row")
    @endforeach

    </tbody>
</table>