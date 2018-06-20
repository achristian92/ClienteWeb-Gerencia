@extends('layouts.app')

@section('content')

<div class="container">

<style type="text/css">

    .modal-sm{
        width: 600px;
        top: 100px
    }

    .modal-footer{
        text-align: center;
        color: white;
        font-weight: bold;
        font-size: 18px;
        border-top: none;
    }

    .modal-content{
        background-color: transparent;
        box-shadow: none;
        border: none;
    }

    div.modal-body > img{
        box-shadow:  0 5px 15px rgba(0,0,0,.5)
    }

    .close:hover, .close{
    color:white!important ;
    opacity: 1}

</style>
    <a class="btn btn-primary" href="{{ route('agencias.super') }}">
        << Regresar
    </a>
    <div class="row">
        <h3 align="center" style="letter-spacing: 1px;padding-bottom: 10px; font-weight: bold;">
            LISTA DE OBSERVACIONES
        </h3>
        <span style="margin bottom:50px; float: right; padding-bottom: 25px; padding-right: 20px">
            Exportar a
            <img height="25" id="imgexcel" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-ms-office-2016/256/Excel-2-icon.png" style="cursor: pointer" width="25"/>
        </span>
        <div class="col-xs-12">
            <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="tablagerencia" style="font-family: Helvetica,Arial,sans-serif; width: 100%; max-width: 100%">
                <caption class="text-center">
                </caption>
                <thead>
                    <tr class="dropdown">
                        <th>
                            ID
                        </th>
                        <th>
                            FOTO
                        </th>
                        <th>
                            COMENTARIO
                        </th>
                        <th>
                            MODULO
                        </th>
                        <th>
                            FECHA
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($age_su as $age)
                    <tr class="odd" role="row">
                        <td class="sorting_1">
                            {{ $age->idob }}
                        </td>
                        <td class="celdaimg">
                        <img data-target="#modalimagen-{{ $age->idob }}" data-toggle="modal" height="70" src="{{ $age->ruta_imagen }}" style="cursor: pointer;" width="125">
            <div aria-hidden="true" aria-labelledby="mySmallModalLabel" class="modal fade" id="modalimagen-{{ $age->idob }}" role="dialog" style="opacity: 1; background-color: rgba(0,0,0,0.6);">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                              <div class="modal-header" style="border-bottom:0px; padding-right:0px; margin-right:-15px; padding-bottom:0px">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; font-size:30px">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                                <div class="modal-body">
                                <img src="{{ $age->ruta_imagen }}" height="400" width="600">
                                </div>
                                <div class="modal-footer">
                                    IMAGEN PERTENECIENTE AL AREA DE {{ $age->nombre_modulo }} 
                            </div>
                      </div>
                    </div>
            </div>




                                
                        </td>
                        <td>
                            {{ $age->comentario }}
                        </td>
                        <td>
                            {{ $age->nombre_modulo }}
                        </td>
                        <td>
                            {{ $age->fecha_supe }}
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
