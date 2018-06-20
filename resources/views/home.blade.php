@extends('layouts.app')


@section('content')
<div class="container">
    <div align="center" class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img height="150" src="http://www.municipalidadchincha.gob.pe/webchincha/Muni-Chincha-2015/img/convolis.png" width="150">
                    </img>
                </div>
                <div class="panel-footer" style="background-color: transparent;">
                    <a class="btn btn-primary" href="{{ route('agencias.super') }}" style="background-color: transparent; border-color: transparent; color: #4c4cff; font-weight: bold">
                        Observaciones
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img height="150" src="http://www.grupoemprende.mx/wp-content/uploads/2015/06/icono-usuarios.jpg" width="250">
                    </img>
                </div>
                <div class="panel-footer" style="background-color: transparent;">
                    <a class="btn btn-primary" href="{{ route('usuario.index') }}" style="background-color: transparent; border-color: transparent; color: #4c4cff; font-weight: bold">
                        Configurar Usuarios
                    </a>
                </div>
            </div>
        </div>
        {{--  <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img height="150" src="http://www.grupoemprende.mx/wp-content/uploads/2015/06/icono-usuarios.jpg" width="250">
                    </img>
                </div>
                <div class="panel-footer" style="background-color: transparent;">
                    <a class="btn btn-primary" href="" style="background-color: transparent; border-color: transparent; color: #4c4cff; font-weight: bold">
                        Lista Correos Enviados
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
