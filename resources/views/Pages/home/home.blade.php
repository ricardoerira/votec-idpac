@extends('layouts.home.layout')

@section('content')
<header class="header__home">
    <h1 class="header__home_title text-black">VOTACIONES – IDPAC</h1>
</header>
<div class="container mt-5 py-3">
    <div class="card">
        @if ($elections->count() > 0)
            <div>
                <h3>Elecciones actuales</h3>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    @if($elections->count() > 0)
                        @foreach ($elections as $election)
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <p>{{ strtoupper($election->title) }}</p>
                                        </div>
                                                <a href="#" class="small-box-footer">
                                                    Ingresar
                                                    <i class="fas fa-arrow-circle-right ml-1"></i>
                                                </a>
                                    </div>
                                </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @else
            <div class="alert alert-default-warning">
                No hay elecciones abiertas
            </div>
        @endif
        
    </div>
</div>


@endsection