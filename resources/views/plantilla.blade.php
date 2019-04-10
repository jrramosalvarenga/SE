<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo-una.png">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
       <style>
#popup {
   visibility: hidden;
   opacity: 0;
   margin-top: -300px;
}
#popup:target {
   visibility:visible;
   opacity: 1;
   background-color: rgba(0,0,0,0.8);
   position: fixed;
   top:0;
   left:0;
   right:0;
   bottom:0;
   margin:0;
   z-index: 999;
   transition:all 1s;
}
.popup-contenedor {
   position: relative;
   margin:8% auto;
   padding:30px 50px;
   background-color: #fafafa;
   color:#333;
   border-radius: 3px;
   width:40%;
}
a.popup-cerrar {
   position: absolute;
   top:3px;
   right:3px;
   background-color: #333;
   padding:7px 10px;
   font-size: 20px;
   text-decoration: none;
   line-height: 1;
   color:#fff;
}
</style>

       <style type="text/css">
           .fa-1x {
    font-size: 1.5rem;
}
.navbar-toggler.toggler-example {
    cursor: pointer;
}
.dark-blue-text {
    color: #0A38F5;
}
.dark-pink-text {
    color: #AC003A;
}
.dark-amber-text {
    color: #ff6f00;
}
.dark-teal-text {
    color: #004d40;
}
       </style>
<style type="text/css">
  h1{
    color: red;
  }
</style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row">
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark btn-dark-green scrolling-navbar">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#" >Menú de comedor estudiantil | UNAG</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="color: black">
                <a class="nav-link" href="validarEstudiante2.php" style="color:black" >Punto de Validación
                    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('fotos')}}" style="color:black">Configuración</a>
            </li>
         
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black">Reportes</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="detalleComidasEstudiantes.php">Bitacoras de alimentacion individual</a>
                    <a class="dropdown-item" href="detalleError.php">Reporte de rechazos</a>
                    <a class="dropdown-item" href="reporte.php">Reporte comparativo entre tiempos de comida</a>
                </div>
            </li>

        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
    </div>
  </header>
    <div class="container">
        @yield('seccion');
     </div> 
      
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>