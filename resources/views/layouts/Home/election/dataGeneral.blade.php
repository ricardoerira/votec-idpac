
  <div class="row my-sm-2 py-4">
    <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Tipo de identificación</label>
          <select name="identificationType" class="form-control fontform " id="date_birth" readonly>
            @foreach (selectData('identification_types') as $data)
                <option value = {{$data->id}}
                  @if (auth()->user()->id_identificationType == $data->id)
                    selected
                  @endif
                  >{{$data->name}}</option>
            @endforeach
          </select>
      </div>
  
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Nº identificacion</label>
      <input name="identification" class="form-control fontform" id="identification" value="{{auth()->user()->identification}}" readonly>
      </div>
  </div>
  
  <div class="row my-sm-2">
    <div class="form-group form-group-lg mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Nombres</label>
          <input type="name" name="name" class="form-control fontform" value="{{$inf[0]->name}}" size="20">
      </div>
  
      <div class="form-group mx-sm-4">
          <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Apellidos</label>
            <input type="text" name="lastname" class="form-control fontform" id="lastname" value="{{$inf[0]->lastname}}" size="20">
        </div>
  </div>
  
  <div class="row my-sm-2">
    <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Fecha de nacimiento</label>
          <input type="date" name="date_birth" class="form-control fontform" value="{{$inf[0]->date_birth}}" id="date_birth" size="14">
      </div>
  
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Sexo</label>
          <select type="text" name="sex" class="form-control fontform" id="sex" >
            <option value="Hombre" @if($inf[0]->sex == "Hombre") selected @endif>Hombre</option>
            <option value="Mujer" @if($inf[0]->sex == "Mujer") selected @endif>Mujer</option>
            <option value="Intersexual" @if($inf[0]->sex == "Intersexual") selected @endif>Intersexual</option>
          </select>
      </div>
  </div>
  
  <div class="row my-sm-2">
    <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Localidad</label>
          <select name="id_location" class="form-control fontform" id="id_location">
            @foreach (selectData('locations') as $data)  
                <option value = {{$data->id}} 
                  @if ($inf[0]->id_location == $data->id)
                    selected
                  @endif>{{$data->name}}</option>
            @endforeach
          </select>
      </div>
  
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Dirección</label>
          <input type="text" name="address" class="form-control fontform" id="address" value="{{ $inf[0]->address}}">
      </div>
  </div>
  
  <div class="row my-sm-2">
    <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Teléfono</label>
          <input type="text" name="phone" class="form-control fontform" id="phone" value="{{ $inf[0]->phone}}"  size="12">
      </div>
  
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Identidad de género</label>
          <select type="text" name="gender_identity" class="form-control fontform" id="gender_identity" >
                <option value="Femenina" @if($inf[0]->gender_identity == "Femenina") selected @endif>Femenina</option>
                <option value="Masculina" @if($inf[0]->gender_identity == "Masculina") selected @endif>Masculina</option>
                <option value="Transgenero" @if($inf[0]->gender_identity == "Transgenero") selected @endif>Transgenero</option>
                <option value="No Binario" @if($inf[0]->gender_identity == "No Binario") selected @endif>No Binario</option>
          </select>
      </div>
  </div>
  
  <div class="row my-sm-2">
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Discapacidad</label>
          <select name="id_disability" class="form-control fontform @error('name') is-invalid @enderror " id="name" value="{{ old('name') }}">
            @foreach (selectData('disabilities') as $data)  
                <option value = {{$data->id}}
                  @if ($inf[0]->id_disability == $data->id)
                    selected
                  @endif>{{$data->name}}</option>
            @endforeach  
          </select>
      </div>
  
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Grupo poblacional</label>
          <select name="id_groupP" class="form-control fontform select-css" id="id_groupP">
            @foreach (selectData('group_populations') as $data)  
                <option value = {{$data->id}}
                  @if ($inf[0]->id_groupP == $data->id)
                    selected
                  @endif>{{$data->name}}</option>
            @endforeach   
          </select>
      </div>
  </div>
  
  <div class="row my-sm-2">
      <div class="form-group mx-sm-4">
        <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Ocupación</label>
          <select name="occupation" class="form-control fontform" id="occupation">
                <option value = "Empleado" @if($inf[0]->occupation == "Empleado") selected @endif>Empleado</option>
                <option value = "Independiente" @if($inf[0]->occupation == "Independiente") selected @endif>Independiente</option>
                <option value = "Desempleado" @if($inf[0]->occupation == "Desempleado") selected @endif>Desempleado</option>
                <option value = "Estudiante" @if($inf[0]->occupation == "Estudiante") selected @endif>Estudiante</option>
          </select>
      </div>
  
       <div class="form-group mx-sm-4">
        <label for="inputEmail" class="js-form-required form-required fontform mx-sm-2">Email</label>
          <input type="email" name="email" class="form-control fontform" id="email" value="{{ auth()->user()->email }}"  size="28" readonly>
      </div>
  </div>
  <div class="form-group mx-sm-4">
  <label for="inputEmail" class="js-form-required form-required fontform mx-sm-2">Documento de identidad</label>
    <input type="file" name="path" class="form-control fontform" id="path" accept= ".pdf, .doc">
  </div>
  </div>
  
  <div>
