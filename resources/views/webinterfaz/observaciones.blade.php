@extends('layouts.app')

@section('content')

<script type="text/javascript">
$(document).ready( function () {
    $('#tablaobservadas').DataTable();
} );
</script>

<div class="container">

    <a class="btn btn-primary" href="{{ route('agencias.super') }}">
        << Regresar
    </a>
    <div class="row">
        <h3 align="center" id="tilistob" >
            LISTA DE OBSERVACIONES
        </h3>
        <span style="margin bottom:50px; float: right; padding-bottom: 25px; padding-right: 20px">
            Exportar a
            <img height="25" id="imgexcel" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-ms-office-2016/256/Excel-2-icon.png" style="cursor: pointer" width="25"/>
        </span>
        <div class="col-xs-12">
            <table cellspacing="0" class="display table table-bordered table-hover dt-responsive" id="tablaobservadas" style="font-family: Helvetica,Arial,sans-serif; width: 100%; max-width: 100%">
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
                    <div class="modal-dialog modal-sm" id="modalobs">
                        <div class="modal-content" id="modalcontobs">
                              <div class="modal-header" style="border-bottom:0px; padding-right:0px; margin-right:-15px; padding-bottom:0px">
                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; font-size:35px" id="cerrarmodobs">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                                <div class="modal-body" id="modobsimg">
                                    
                                <img src="{{ $age->ruta_imagen }}" height="400" width="600">
                                
                                </div>
                                <div class="modal-footer" id="modpieobs">
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
