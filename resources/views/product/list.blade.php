<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{$product["id"]}}</td>
        <td>{{$product["name"]}}</td>
        <td></td>
    </tr>
    @endforeach

    </tbody>
</table>