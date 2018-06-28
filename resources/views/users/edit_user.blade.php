@extends('layouts.app')
@section('content')

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
                       
                    <form action="{{ route('usuario.update', $user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {!! method_field('PUT') !!}
                         <h3 style="font-weight: bold; margin-top: -10px; margin-bottom: 20px">
                            <center>
                                ACTUALIZAR USUARIO
                            </center>
                        </h3>
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-3">
                             
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
                                    <input class="form-control" id="apellidos" name="apellidos" required="" type="text" value="{{ $user->apellidos }}">
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
                                        <input @if($user->accesoWeb  == "SI") checked="" @endif class="form-check-input" name="accweb" id="accweb" type="checkbox" value="1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                PAGINA WEB
                                            </label>
                                        </input>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input @if($user->accesoApp  == "SI") checked="" @endif class="form-check-input" name="accapp" id="accapp" type="checkbox" value="1">
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

@stop
