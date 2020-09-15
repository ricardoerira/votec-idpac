@extends('layouts.home.layout')

@section('content')
<title>invitado</title>
<section class="content-header">
  <br>
  <br>
  <br>
      <section class="content center-block" >
      
              <!-- /.card-header -->
              <!-- form start -->
            <form action="#" method="POST" role="form">
                @csrf
                @method('PUT')
                <div class="content-wrapper mx-sm-5" style="min-height: 1416.81px;">
                  <!-- Content Header (Page header) -->
                  <section class="content-header">
                    <div class="container-fluid">
                      <div class="row mb-2">
                        <div class="col-sm-5">
                          <h1>Perfil</h1>
                        </div>
                        <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Perfil de Usuario</li>
                          </ol>
                        </div>
                      </div>
                    </div><!-- /.container-fluid -->
                  </section>
              
                  <!-- Main content -->
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-3">
              
                          <!-- Profile Image -->
                          <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                              <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/home/user.png') }}" alt="User profile picture">
                              </div>

                            <h3 class="profile-username text-center">@if ($inf[0]->name <> '') {{$inf[0]->name}} {{$inf[0]->lastname}} @else {{auth()->user()->identification}} @endif</h3>

                              <p class="text-muted text-center">el rol</p>

                              <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>Inscripcion elecciones </b> <a class="float-right"></a>
                                </li>
                                <li class="list-group-item">
                                  <b>Candidaturas</b> <a class="float-right"></a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                          <div class="card">
                            <div class="card-header p-2">
                              <ul class="nav nav-pills">

                                <li class="nav-item"><a class="nav-link info" href="#settings" data-toggle="tab">Informacion</a></li>
                              </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                              <div class="tab-content">
                                <div class="tab-pane" id="activity">
                                  <!-- Post -->
                                  <div class="post">
              
                                    <form class="form-horizontal">
                                      <div class="input-group input-group-sm mb-0">
                                        <input class="form-control form-control-sm" placeholder="Response">
                                        <div class="input-group-append">
                                          <button type="submit" class="btn btn-danger">Send</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>

                                </div>

                                  <form action="#" method="POST" role="form" class="form-inline">
                                    @csrf
                                    @method('PUT')

                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Tipo de identificacion</label>
                                              <input type="text" name="date_birth" class="form-control fontform"  value="{{ auth()->user()->id_identificationType }}" id="date_birth" size="14" readonly>
                                          </div>
    
                                          <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Nº identificacion</label>
                                              <input type="text" name="name" class="form-control fontform" id="sex" value="{{ auth()->user()->identification }}" size="15" readonly>
                                          </div>
                                    </div>

                                    <div class="row my-sm-2">
                                        <div class="form-group form-group-lg mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Nombres</label>
                                              <input type="name" name="name" class="form-control fontform" value="{{$inf[0]->name}}" size="20" readonly>
                                          </div>
      
                                          <div class="form-group mx-sm-4">
                                              <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Apellidos</label>
                                                <input type="text" name="lastname" class="form-control fontform" id="lastname" value="{{$inf[0]->lastname}}" size="20" readonly>
                                            </div>
                                    </div>
                                    
                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Fecha de nacimiento</label>
                                              <input type="text" name="date_birth" class="form-control fontform" value="{{$inf[0]->date_birth}}" id="date_birth" size="14" readonly>
                                          </div>
    
                                          <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Sexo</label>
                                              <input type="text" name="name" class="form-control fontform" id="sex"value="{{$inf[0]->sex}}"  size="15" readonly>
                                          </div>
                                    </div>
                                      
                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Localidad</label>
                                              <input type="text" name="name" class="form-control fontform" id="locality" readonly>
                                          </div>
    
                                          <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Direccion</label>
                                              <input type="text" name="address" class="form-control fontform" id="address" value="{{$inf[0]->address}}" readonly>
                                          </div>
                                    </div>
                                      
                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Telefono</label>
                                              <input type="text" name="name" class="form-control fontform" id="name" value="{{$inf[0]->phone}}"  size="12" readonly>
                                          </div>
    
                                          <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">identidad de genero</label>
                                              <input type="text" name="name" class="form-control fontform" id="name" value="{{ old('name') }} " readonly>
                                          </div>
                                    </div>

                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Orientacion sexual</label>
                                              <input type="text" name="name" class="form-control fontform" id="name" size="15" readonly>
                                          </div>
    
                                          <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Discapacidad</label>
                                              <input type="text" name="name" class="form-control fontform @error('name') is-invalid @enderror " id="name" value="{{ old('name') }}" readonly>
                                          </div>
                                    </div>


                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Grupo poblacional</label>
                                              <input type="name" name="name" class="form-control fontform" id="name" value="{{ old('name') }}" readonly>
                                          </div>
    
                                          <div class="form-group mx-sm-4">
                                            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Ocupacion</label>
                                              <input type="name" name="name" class="form-control fontform" id="name" value="{{ old('name') }}" size="15" readonly>
                                          </div>
                                    </div>

                                     
                                    <div class="row my-sm-2">
                                        <div class="form-group mx-sm-4">
                                            <label for="inputEmail" class="js-form-required form-required fontform mx-sm-2">Email</label>
                                        <input type="email" name="email" class="form-control fontform" id="email" value="{{auth()->user()->email}}"  size="28" readonly>
                                          </div>
                                    </div>
                                  </form>
                              </div>  
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>

@endsection