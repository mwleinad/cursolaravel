{{--este es un comentario --}}
{{--basicamente cada nueva pagina le diremos que extienda de nuestro layout master --}}
@extends("layouts.master")

{{--un yield con el mismo nombre en layouts.master sera reemplazado por nuestro section --}}
@section('title', "welcome page")

@section('content')
    {{--esto incluira primero el contenido del layouts.master--}}
    @parent
    <h1>Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
@endsection

@section('container')
    {{--esto incluira primero el contenido del layouts.master--}}
    @parent
@endsection

