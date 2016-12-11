{{--este es un comentario --}}

{{--basicamente cada nueva pagina le diremos que extienda de nuestro layout master --}}
@extends("layouts.master")

{{--un yield con el mismo nombre en layouts.master sera reemplazado por nuestro section --}}
@section('title', "test")

@section('content')
    {{--esto incluira primero el contenido del layouts.master--}}
    @parent
    Lista de clientes
@endsection

@section('container')
    {{--esto incluira primero el contenido del layouts.master--}}
    @parent
    <div class="row">
        <button type="button" class="btn btn-primary addClient">Agregar</button>
    </div>
    @include("client.list")
@endsection

@section('javascript')
    <script src="{{ config('settings.ASSETS_URL_PREFIX').elixir('/assets/js/client.min.js') }}"></script>
@endsection


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
