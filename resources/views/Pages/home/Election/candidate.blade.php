@extends('layouts.home.layout')

@section('content')
<header class="header__slider">
    <img class="img1" src='../../images/home/Election/Slide3.jpg'>
</header>

<!-- type of voter -->
<body>
  <div class="">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('election.index', $election[0]->slug) }}">Elección</a></li>
      <li class="breadcrumb-item active">{{ ucwords($type) }}</li>
    </ol>
  </div>
  <form action="{{ route('election.add',  ['slug' => $election[0]->slug, 'type'=> $idType ,]) }}" method="POST" role="form" class="form-inline" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container mt-4" name = "general">
            <div>
                <h1 class="text-center">{{$type}}</h1>
                <h3 class="text-center">Información básica </h3>
            </div>
            @include('layouts.home.election.dataGeneral')
      <div>
        <h1>Requisitos</h1>
        @foreach($requirements as $requirement)
          <div>
            @include('pages.home.election.inputs.index')
          </div>
        @endforeach
      </div>
  </form>
  <div class="w-75 mx-auto pb-4">
    <div>
        <button type="submit" class="btn btn-primary m-auto">Guardar</button>
    </div>
</div>
  
</body>

@endsection
