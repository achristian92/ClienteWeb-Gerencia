<!DOCTYPE doctype html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        Aplicación Gerencia
                    </title>
                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                        <!-- Styles -->
                        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
                            <link href="{{ asset('css/estilobienvenida.css') }}" rel="stylesheet" type="text/css">
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" style="display: inline-block;">
                    <div class="navbar-brand" style="padding: 5px 5px">
                        <img src="{{ asset('img/logomibanconav.png') }}">
                        </img>
                    </div>
                </div>
            </div>
        </nav>
        <section class="presentacion">
            <div class="container">
                <div class="row">
                    <h1 align="center">
                    </h1>
                    <div class="col-sm-6" style="padding-top: 25px">
                        <center>
                            <img id="imagenlogomb" src="{{ asset('img/mibancoverde.png') }}">
                            </img>
                        </center>
                    </div>
                    <div class="col-sm-6">
                        <h3>
                            Observaciones de Agencias - Gerencia
                        </h3>
                        <h4><p>
                            Controla todas las observaciones encontradas en las agencias,
                            reportandando para mejorar su infraestructura , etc.
                                
                            </p>
                        </h4>
                        <div class="botoningreso">
                            <a class="btn btn-primary" href="{{ route('login') }}" id="btningreso">
                                INGRESAR AL SISTEMA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <center>
  <a class="linkminkay" href="https://www.minkay.com.pe">
                <span class="pie">
                    Desarrollado por
                  
                        <img height="17" src="{{ asset('img/logominkay.png') }}" style="vertical-align: text-top" width="85">
                        </img>
                    
                </span>
</a>
            </center>
        </footer>
    </body>
</html>
