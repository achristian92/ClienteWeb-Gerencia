@extends('layouts.app')

@section('content')
<script type="text/javascript">
    $(document).ready(function() {
  $('#tablausers').DataTable({
  });
});
</script>
<style type="text/css">
    h3{
        letter-spacing: 1px;
        padding-bottom: 10px;
        font-weight: bold;
    }

    .btn.btn-danger{
        padding-bottom: 1px;
        padding-top: 1px
    }
</style>
<div class="container">
    <a class="btn btn-primary" href="{{ url('/home') }}">
        << Regresar
    </a>
    <br>
    <br>
            <div>
                <a class="btn btn-info" href="{{ route('usuario.create') }}">
                    Registrar Nuevo Usuario
                </a>
                @if(session('mensajeuser'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('mensajeuser') }}
                </div>
                @endif
            </div>
        
    <div class="row">
        <h3 align="center">
            LISTADO DE USUARIOS
        </h3>
        <span style="margin bottom:50px; float: right; padding-bottom: 25px; padding-right: 20px">
            Exportar a
            <img height="25" id="imgexcel" onclick="funcione()" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-ms-office-2016/256/Excel-2-icon.png" style="cursor: pointer" width="25"/>
        </span>
        <div class="col-xs-12">
            <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="tablausers" style="font-family: Helvetica,Arial,sans-serif; width: 100%; max-width: 100%">
                <caption class="text-center">
                </caption>
                <thead>
                    <tr class="dropdown">
                        <th>
                            ID
                        </th>
                        <th>
                            NOMBRES Y APELLIDOS
                        </th>
                        <th>
                            TELEFONO
                        </th>
                        <th>
                            EMAIL
                        </th>
                        <th>
                            ACCESO WEB
                        </th>
                        <th>
                            ACCESO MOVIL
                        </th>
                        <th>
                            ACCION
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($indexusu as $usuarios)
                    <tr class="odd" role="row">
                        <td class="sorting_1">
                            {{ $usuarios->id }}
                        </td>
                        <td>
                            {{ $usuarios->name }} {{ $usuarios->apellidos }}
                        </td>
                        <td>
                            {{ $usuarios->telefono }}
                        </td>
                        <td>
                            {{ $usuarios->email }}
                        </td>
                        <td>
                            {{ $usuarios->accesoWeb }}
                        </td>
                        <td>
                            {{ $usuarios->accesoApp }}
                        </td>
                         <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('usuario.edit' , $usuarios->id) }}" style="padding: 0px 4px">
                            <span class="glyphicon glyphicon-pencil"></span>
                            </a>                    
                         </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_info col-sm-6">
            </div>
        </div>
    </div>
</div>
@endsection

