@extends('layouts.home.layout')

@section('content')
<header class="header__slider">
    <img class="img1" src='../../images/home/Election/Slide3.jpg'>
</header>

<!-- resolution  -->
<div class="text-justify px-5 mt-5 "><a href="#">{{$election[0]->description}}</a></div>

<!-- type of voter -->
<div class="container mt-2 py-3">
    <div class="card">
        <hr>
        <div class="card-body">
           <p>votantes</p>
        </div>
    </div>
</div>
@endsection