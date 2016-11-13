{{--este es un comentario --}}
{{--basicamente cada nueva pagina le diremos que extienda de nuestro layout master --}}
@extends("layouts.master")

{{--un yield con el mismo nombre en layouts.master sera reemplazado por nuestro section --}}
@section('title', "welcome page")

@section('content')
    {{--esto incluira primero el contenido del layouts.master--}}
    @parent
    Lista de productos
@endsection

@section('container')
    {{--esto incluira primero el contenido del layouts.master--}}
    @parent
    @include("product.list")
@endsection

