<tr id="product-{{$product["id"]}}">
    <td>{{$product["id"]}}</td>
    <td>{{$product["name"]}}</td>
    <td><a href="#" class="edit" data-id="{{$product["id"]}}">Editar</a> |
        <a href="#" class="delete" data-id="{{$product["id"]}}">Borrar</a>
    </td>
</tr>
