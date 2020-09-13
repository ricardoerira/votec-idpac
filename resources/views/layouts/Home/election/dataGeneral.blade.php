<div class="main-container prueba">
    <div class="row my-sm-2">
        <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Tipo de identificacion</label>
              <input type="text" name="date_birth" class="form-control fontform"  value="#" id="date_birth" size="14" readonly>
          </div>

          <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Nº identificacion</label>
              <input type="text" name="name" class="form-control fontform" id="sex" value="#" size="15" readonly>
          </div>
    </div>

    <div class="row my-sm-2">
        <div class="form-group form-group-lg mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Nombres</label>
              <input type="name" name="name" class="form-control fontform" value="#" size="20" readonly>
          </div>

          <div class="form-group mx-sm-4">
              <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Apellidos</label>
                <input type="text" name="lastname" class="form-control fontform" id="lastname" value="#" size="20" readonly>
            </div>
    </div>
    
    <div class="row my-sm-2">
        <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Fecha de nacimiento</label>
              <input type="text" name="date_birth" class="form-control fontform" value="#" id="date_birth" size="14" readonly>
          </div>

          <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Sexo</label>
              <input type="text" name="name" class="form-control fontform" id="sex"value="#"  size="15" readonly>
          </div>
    </div>
      
    <div class="row my-sm-2">
        <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Localidad</label>
              <input type="text" name="name" class="form-control fontform" id="locality" readonly>
          </div>

          <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Direccion</label>
              <input type="text" name="address" class="form-control fontform" id="address" value="{{ old('name') }}" readonly>
          </div>
    </div>
      
    <div class="row my-sm-2">
        <div class="form-group mx-sm-4">
            <label for="inputName" class="js-form-required form-required fontform mx-sm-2">Telefono</label>
              <input type="text" name="name" class="form-control fontform" id="name" value="#"  size="12" readonly>
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
              <input type="email" name="email" class="form-control fontform" id="email" value=""  size="28" readonly>
          </div>
    </div>
</div>