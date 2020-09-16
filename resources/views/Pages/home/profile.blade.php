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
                                  <b>Inscripcion elecciones</b> <a class="float-right"></a>
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
                                    @include('layouts.home.election.dataGeneral')
                                    <div class="w-75 mx-auto pb-4">
                                      <div>
                                          <button type="submit" class="btn btn-primary m-auto">Actualizar</button>
                                      </div>
                                  </div>
                                  </form>
                              </div>  
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
            </form>
      </section>
</section>


@endsection