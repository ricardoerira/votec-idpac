@extends('layouts.home.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('crear') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id_identificationType" class="col-md-4 col-form-label text-md-right">Tipo de identificación</label>

                            <div class="col-md-6">
                                <select class="form-control" id="id_identificationType" name ="id_identificationType" >
                                    @foreach ($types as $index)
                                    <option id="id_identificationType" value="{{ $index->id }}">
                                            {{ $index->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="identification" class="col-md-4 col-form-label text-md-right">Número de identificación</label>

                            <div class="col-md-6">
                                <input id="identification" type="text" class="form-control @error('identification') is-invalid @enderror validanumericos" name="identification" required autofocus>

                                @error('identification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@yield('own-js')
<script>
    $(function(){
        $('.validanumericos').keypress(function(e) {
            if(document.getElementById("id_identificationType").value < 3){
                if(isNaN(this.value + String.fromCharCode(e.charCode))) 
                return false;
            }
        })
        .on("cut copy paste",function(e){
            e.preventDefault();
        });
    });
</script>

