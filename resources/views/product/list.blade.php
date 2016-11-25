<table class="table" id="productList">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        @include("product.row")
    @endforeach

    </tbody>
</table>