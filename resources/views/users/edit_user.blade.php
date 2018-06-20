@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Usuario
        </title>
    </head>
    <script src="//code.jquery.com/jquery-1.11.3.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
ObtenerTipoZona();
ObtenerAgencia(); 
ObtenerTipoUsuario();

});
    </script>
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
                    <a class="btn btn-primary" href="{{ route('usuario.index') }}">
                    << Regresar
                    </a>
                    <form action="{{ route('usuario.update') }}" method="post">
                        {{ csrf_field() }}
             {{--    {!! method_field('PUT') !!} --}}
                        <h3 style="font-weight: bold; margin-top: -10px; margin-bottom: 20px">
                            <center>
                                ACTUALIZAR USUARIO
                            </center>
                        </h3>
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-3">
                                {{ csrf_field() }}
                                <div class="form-group" id="nombres">
                                    <label for="name">
                                        NOMBRES:
                                    </label>
                                    <input class="form-control" id="name" name="name" required="" type="text" value="{{ $user->name }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CORREO ELECTRÓNICO:
                                    </label>
                                    <input class="form-control" id="email" name="email" required="" type="email" value="{{ $user->email }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        NÚMERO DE TELÉFONO
                                    </label>
                                    <input class="form-control" id="telefono" name="telefono" required="" type="number" value="{{ $user->telefono }}">
                                    </input>
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-3">
                                <div class="form-group">
                                    <label for="name">
                                        APELLIDOS:
                                    </label>
                                    <input class="form-control" id="apellido" name="apellido" required="" type="text" value="{{ $user->apellidos }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        CONTRASEÑA
                                    </label>
                                    <input class="form-control" id="password" name="password" required="" type="password" value="{{ $user->password }}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        ACCESOS
                                    </label>
                                    <div class="form-check form-check-inline">
                                        <input @if($user->accesoWeb  == 1) checked="" @endif class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                PAGINA WEB
                                            </label>
                                        </input>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input @if($user->accesoApp  == 1) checked="" @endif class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">
                                                APLICATIVO MOVIL 
                                            </label>
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-primary" id="updateuser" name="updateuser" type="submit">
                                Actualizar Usuario
                            </button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@stop
{{--
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
            $('select[name=cboZonaVehiculo]').val({{ $usuarios->idtipo_zona }}); 
       
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
                $('select[name=idagencia]').val({{ $usuarios->idagencia }});  
              
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
        $('select[name=idrol]').val({{ $usuarios->idrol }});  
        },
        error: function(jqXHR, status, err) {
            alert("Local error callback.");
        }
    });
}
</script>
--}}
