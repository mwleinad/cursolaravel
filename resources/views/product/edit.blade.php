<form name="editProduct" id="editProduct">
    <input type="hidden" id="id" name="id" value="{{$product->id}}" />
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Editar Producto</h4>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="nombre" class="form-control" id="name" name="name" value="{{$product->name}}">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-edit">Guardar</button>
    </div>
</form>
