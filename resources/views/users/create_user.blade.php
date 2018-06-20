@extends('users.navbarUser')
@section('contenido')
<!DOCTYPE html>
<html>
    <head>
        <title>
            Crer Usuario
        </title>
    </head>
    <script src="//code.jquery.com/jquery-1.11.3.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
// ObtenerTipoZona();
// ObtenerAgencia(); 
ObtenerSoloAgencia(); 
ObtenerTipoUsuario();


});
    </script>
      <script type="text/javascript">
    $(document).ready(function() {
    $('#idagencia').select2();

});
     </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(count($errors))
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert" type="button">
                        ×
                    </button>
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>
                    {{ $error }}
                    </li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <form action="{{ route('usuario.store') }}" method="post">
                        {{ csrf_field() }}
                        <h3 style="font-weight: bold; margin-top: -10px; margin-bottom: 22px">
                            <center>
                                CREAR USUARIO
                            </center>
                        </h3>
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-3">
                                {{ csrf_field() }}
                                <div class="form-group" id="nombres">
                                    <label for="name">
                                        NOMBRE:
                                    </label>
                                    <input class="form-control" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CORREO ELECTRÓNICO:
                                    </label>
                                    <input class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        NÚMERO DE TELÉFONO:
                                    </label>
                                    <input class="form-control" id="telefono" name="telefono" required="" type="number" value="{{ old('telefono') }}">
                                    </input>
                                </div>
                               
                                <div class="form-group">
                                    <label for="name">
                                        AGENCIA:
                                    </label>
                                    <select class="form-control" id="idagencia" name="idagencia" required="">
                                    </select>
                                </div>
                              
                            </div>
                            <div class="col-sm-offset-2 col-sm-3">
                                <div class="form-group">
                                    <label for="name">
                                        APELLIDO:
                                    </label>
                                    <input class="form-control" id="apellido" name="apellido" required="" type="text" value="{{ old('apellido') }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CONTRASEÑA:
                                    </label>
                                    <input class="form-control" id="password" name="password" required="" type="password" value="{{ old('password') }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CÓDIGO DEL TRABAJADOR:
                                    </label>
                                    <input class="form-control" id="codigo_trabajador" name="codigo_trabajador" type="text" value="{{ old('codigo_trabajador') }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        TIPO DE USUARIO:
                                    </label>
                                    <select class="form-control" id="idrol" name="idrol" required="">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-primary " id="addUser" name="addUser" type="submit">
                                <span>
                                    Registrar Nuevo Usuario
                                </span>
                            </button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@stop
<script type="text/javascript">
    function ObtenerTipoZona() {
    $('#cboZonaVehiculo').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoZonasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#cboZonaVehiculo').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#cboZonaVehiculo').append('<option value="' + value.idtipo_zona + '">' + value.nombre_zona + '</option>');
            });
       
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
  function ObtenerSoloAgencia() {
    $('#idagencia').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../sologetAgenciasJSON',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idagencia').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idagencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
            });
       
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
function ObtenerAgencia() {
    var CodigoZona = $('#cboZonaVehiculo').val();
    if (CodigoZona != "") {
        $('#idagencia').empty();
        $.ajax({
            async: false,
            type: 'GET',
            url: '../../getAgenciasJSON/' + CodigoZona,
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#idagencia').append('<option value="">::Seleccionar::</option>');
                $.each(data, function(i, value) {
                    $('#idagencia').append('<option value="' + value.idagencia + '">' + value.nombre_agencia + '</option>');
                });
              
            },
            error: function(jqXHR, status, err) {
                alert("Local error callback.");
            }

        });
    } else {
        $('#idagencia').empty();
        $('#idagencia').append('<option value="">::Seleccionar::</option>');
    }
}
function ObtenerTipoUsuario() {
    $('#idrol').empty();
    $.ajax({
        async: false,
        type: 'GET',
        url: '../../getTipoUsuario',
        data: {},
        dataType: 'json',
        success: function(data) {
            $('#idrol').append('<option value="">::Seleccionar::</option>');
            $.each(data, function(i, value) {
                $('#idrol').append('<option value="' + value.idrol + '">' + value.nombre_roles + '</option>');
            });
       
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
</script>
