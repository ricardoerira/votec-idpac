@extends('layouts.home.layout')

@section('content')
<header class="header__slider">
    <img class="img1" src='../../images/home/Election/Slide3.jpg'>
</header>
<div class="">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
      <li class="breadcrumb-item active">Elección</li>
    </ol>
</div>
<!-- resolution  -->
<div class="text-justify px-5 mt-3 "><a href="#">{{$election[0]->description}}</a></div>
<!-- type of voter -->
<div class="container mt-2 py-3">
    <div class="card">
        <div>
            <h3>Participa de la eleccion {{$election[0]->title}}, selecciona una opción:</h3>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-lg-4 col-6 mx-auto">
                <a href="{{ route("election.inscription", ['slug' => $election[0]->slug, 'type'=>'candidato',]) }}"><img class="img1" src='../../images/home/Election/Quierosercandidato.jpeg'></a>
                </div>
                <div class="col-lg-4 col-6 mx-auto">
                    <a href="{{ route("election.inscription", ['slug' => $election[0]->slug, 'type'=>'votante',]) }}"><img class="img1" src='../../images/home/Election/Quieroservotante.png'></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection