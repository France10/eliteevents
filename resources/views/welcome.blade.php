@extends('layouts.main')

@section('title', 'ELITE EVENTS')

@section ('content')

<div id="search-container" class="col-md-12">
    <h1>Buscar eventos</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..."></span>

    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class= "subtitle">Veja os Eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/sp.jpg" alt="{{ $event->title }}">
            <div class="card-body">
                <p div class="card-date">30/06/2024</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="a" class="btn btn-primary">Saber mais</a>

            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@endsection