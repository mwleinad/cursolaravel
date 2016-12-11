<tr  id="client-{{$client["id"]}}">
    <td>{{$client["id"]}}</td>
    <td>{{$client["name"]}}</td>
    <th>{{$client["created_at"]->diffForHumans()}}
    </th>
    <td>
        <a href="#" class="edit" data-id="{{$client["id"]}}">Editar<a/> |
        <a href="#" class="delete" data-id="{{$client["id"]}}">Borrar</a>
    </td>
</tr>