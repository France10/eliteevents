@extends ('layouts.main')

@section ('title', 'produtos')

@section('content')
<h1>TELA DE PRODUTOS</h1>
@if($busca != null)
<p>O usuario está buscando por: {{$busca}} </p>
@endif

@endsection