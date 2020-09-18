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
  <form action="{{ route('election.add',  ['slug' => $election[0]->slug, 'type'=> $idType ,]) }}" method="POST" role="form" class="in-line" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  
        <h1 class="text-center">{{$type}}</h1>
        <div class="container row d-flex justify-content-center" name = "general">
            @include('layouts.home.election.dataGeneral')
        </div>
      <div>

      @if($requirements->count() > 0)
        <div class="container row d-flex justify-content-center py-4">
          <table class="">
            <tr>
              <th colspan="2" class="text-center">Requisitos</th>
             </tr>
            @foreach($requirements as $requirement )
              @if ($i % 2 <> 0)
                <tr>
                  <td class="">
                    @include('pages.home.election.inputs.index')
                  </td>
              @else
                  <td class="">
                    @include('pages.home.election.inputs.index')
                  </td>
                </tr>
              @endif
              <label {{$i++}}></label>
            @endforeach
          </table>
        </div>
      @endif
      </div>
      <div class="w-75 mx-auto pb-4">
        <div>
            <button type="submit" class="btn btn-primary m-auto">Guardar</button>
        </div>
    </div>
  </form>
 
  
</body>

@endsection
