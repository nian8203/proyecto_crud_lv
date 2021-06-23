<!-- @if(count($errors)>0)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <ul>
        @foreach($errors->all() as $e)
        <li>
            {{$e}}
        </li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
validacion de listado de roores en un alert
-->




<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">No. Documento</label>
            <input type="text" name="documento" class="form-control" id="documento" aria-describedby="documentoHelp" 
            value="{{isset($cliente->documento)?$cliente->documento:old('documento')}}" >
            @error('documento')
            <small id="documentoHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" name="nombre" class="form-control text-capitalize" id="nombre" aria-describedby="nombreHelp" 
            value="{{isset($cliente->nombre)?$cliente->nombre:old('nombre')}}" >
            @error('nombre')
            <small id="nombreHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" name="apellido" class="form-control text-capitalize" id="apellido" aria-describedby="apellidoHelp" 
            value="{{isset($cliente->apellido)?$cliente->apellido:old('apellido')}}">
            @error('apellido')
            <small id="apellidoHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Agregue una foto del cliente</label>
            <input type="file" name="foto" class="form-control" id="foto" aria-describedby="fotoHelp" 
            value="{{isset($cliente->foto)?$cliente->foto:old('foto')}}" >
            @error('foto')
            <small id="fotoHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="text" name="telefono" class="form-control text-capitalize" id="telefono" aria-describedby="telefonoHelp" 
            value="{{isset($cliente->telefono)?$cliente->telefono:old('telefono')}}" >
            @error('telefono')
            <small id="telefonoHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Direccion</label>
            <input type="text" name="direccion" class="form-control text-capitalize" id="direccion" aria-describedby="direccionHelp" 
            value="{{isset($cliente->direccion)?$cliente->direccion:old('direccion')}}" >
            @error('direccion')
            <small id="direccionHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputPassword1">Correo</label>
            <input type="email" name="correo" class="form-control" id="correo" aria-describedby="correoHelp" 
            value="{{isset($cliente->correo)?$cliente->correo:old('correo')}}" >
            @error('correo')
            <small id="correoHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Contraseña</label>
            <input type="password" name="Pas" class="form-control" id="contraseña" aria-describedby="PasHelp" 
            value="{{isset($cliente->pas)?$cliente->pas:old('Pas')}}" >
            @error('Pas')
            <small id="PasHelp" class="form-text text-muted">*{{$message}}</small>
            @enderror
        </div>
    </div>

</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-primary float-right">Guardar</button>



<!-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script> -->