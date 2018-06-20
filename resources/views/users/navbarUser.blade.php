<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            MINKAY | Proyectos y Servicios
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
                        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
                            <!-- 3 errores frecuentes-->
                            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                <link href="../../assets/css/usuario.css" rel="stylesheet" type="text/css">
                                    <link href="../../assets/css/font-awesome.css" rel="stylesheet" type="text/css">
                                        <style>
                                            .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   background:#030303;
}

.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .nav>li>a:focus, .nav>li>a:hover, a{
    background-color: transparent;
      color: white
}



                                        </style>
                                        <link href="https://minkay.com.pe/img/favicon.ico" rel="shortcut icon">
                                     
                                   
                            
                   
         
    </head>
    <body style="background-color: rgb(249,249,249);">
        {!! csrf_field() !!}
        <nav class="navbar" style="background-color: #e50278;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{  route('usuario.index')  }}" style="padding-top: 0px">
                        <img src="../../assets/img/btnregresar.png" height="50" width="50"  />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-user">
                                </span>
                                <strong>
                                    {{ auth()->user()->email }}
                                </strong>
                                <span class="glyphicon glyphicon-chevron-down">
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <span class="glyphicon glyphicon-user fa-4x">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left">
                                                    <strong>
                                                        {{ auth()->user()->name }}
                                                    </strong>
                                                </p>
                                                <p class="text-left">
                                                    <strong>
                                                        {{ auth()->user()->apellido }}
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                   <a class="btn btn-danger btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Cerrar Sesión
                                                    </a>
                                                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="../../assets/js/jquery.min.js">
        </script>
        <script src="../../assets/js/bootstrap.min.js" type="text/javascript">
        </script>
        @yield('contenido')
        @yield('footer')
    </body>
</html>
