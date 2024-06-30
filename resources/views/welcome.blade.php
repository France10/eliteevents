@extends('layouts.main')

@section('title', 'Corigão Eventos')

@section ('content')

<h1>HELOO</h1>

<img src="/img/banner.jpeg" alt="banner">
@if (10 > 5)
<p>A condição é true</p>
@endif
<p> {{$nome}}</p>

@if($nome == "Palmeiras")
<p> O nome é Corithians</p>
elseif ($nome == "Corinthians")
<p> o nome é {{ $nome }} e ele tem idade {{ $idade }} anos </p>
@else
<p>O nome não é Corinthians</p>
@endif

@for ($i= 0; $i < count ($arr); $i++) <p> {{$arr[$i] }} - {{$i}} </p>
    @endfor

    @endsection