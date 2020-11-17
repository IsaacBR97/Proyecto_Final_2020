<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
   <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-navy fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Comercio ITTG</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <form method="get" action="" target="_blank">
          <input type="search" name="Buscador" style="width: 500px; height: 30px; margin-left: 90px"placeholder="Buscar productos marcas y más..." autofocus required>
          <input type="submit" value="Buscar"> 
        </form>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('register') }}">Crear cuenta
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Mis compras</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido de la pagina -->
  <div class="container">

    <div class="row">
      <div class="col-lg-3"><br>
        <br><img class=" img-fluid" src="img/logotec_300.png">

         <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="navbar-dark bg-navy nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Categorias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consolas y videojuegos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Computacion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deportes y fitnes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vinos y licores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Herramientas e industria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Libros y comics</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav> 
      </div>

      <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/gamers.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/sistema.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/bici.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/licores.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/industria.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/seccion.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="panel panel-container">
          <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href=""><img class="card-img-top" src="img/xbox.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Xbox One</a>
                </h4>
                <div class="simpleCart_shelfItem">
                <br><h5>$9499</h5>
                <p class="card-text">Con el Xbox One de 1 TB podrás guardar los juegos que descargues, tu música favorita y mucho más.</p>
                <form method="POST" action="calcular2 (1).php">
      <div >
      <select name="xbox">

        <option>Cantidad</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    <input type="submit" name="">
    </div>
    </form>
                  </div>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/h14.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Huawei Matebook D14</a>
                </h4>
                <br><h5>$17,999</h5>
                <p class="card-text">El HUAWEI MateBook D es una computadora portátil de 14 pulgadas que incorpora un nuevo procesador móvil Generation AMD RyzenTM 5 2500U y admite Internet Wi-Fi® de alta velocidad.</p>
                <form method="POST" action="calcular (1).php">
    <div >
      <input type="" name="n_play" value="play" hidden="true">
      <select name="play">

        <option>Cantidad</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    <input type="submit" name="p1">
    </div>
  </form>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/bici.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Bicicleta Fija Spinning Profesional</a>
                </h4>
                <br><h5>$4,899</h5>
                <p class="card-text">La bicicleta cuenta con una pantalla que mide tiempo, velocidad, distancia y calorías para que no pierdas detalle de tu rutina.</p>
                <form method="POST" action="calcular_3.php">
    <div >
      <input type="" name="n_nintendo" value="nintendo" hidden="true">
      <select name="nintendo">

        <option>Cantidad</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    <input type="submit" name="p1">
    </div>
  </form>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/buchanans.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Whisky Buchanan's Master</a>
                </h4>
                <br><h5>$817</h5>
                <p class="card-text">Whisky Buchanan's 12 años escocés que tenemos en presentación de 750 mililitros, de color ámbar dorado, su aroma tiene esencias de frutas cítricas y miel, notas de chocolate, naranja y un toque ahumado que hacen la combinación perfecta.</p>
                <form method="POST" action="calcular_3.php">  <!-- cambiar esto -->
    <div >
      <input type="" name="n_nintendo" value="nintendo" hidden="true">
      <select name="nintendo">  

        <option>Cantidad</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    <input type="submit" name="p1">
    </div>
  </form>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/soldadora.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Soldadora Compacta</a>
                </h4>
                <br><h5>$2,575</h5>
                <p class="card-text">>SOLDADORA COMPACTA CORRIENTE ALTERNA 250 A.</p>
                <form method="POST" action="calcular_3.php">  <!-- cambiar esto -->
    <div >
      <input type="" name="n_nintendo" value="nintendo" hidden="true">
      <select name="nintendo">

        <option>Cantidad</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    <input type="submit" name="p1">
    </div>
  </form>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/mente.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Véndele a la mente, no a la gente</a>
                </h4>
                <br><h5>$269</h5>
                <p class="card-text">El autor prueba en este libro que los procesos de ventas a los que estamos acostumbrados son sumamente desgastantes y poco efectivos, debido a que no sabemos cómo funciona la mente, aunque sí le hagamos caso a la gente.</p>
                <form method="POST" action="calcular_3.php">  <!-- cambiar esto -->
    <div >
      <input type="" name="n_nintendo" value="nintendo" hidden="true">
      <select name="nintendo">

        <option>Cantidad</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    <input type="submit" name="p1">
    </div>
  </form>

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
      </div>

      </div>

    </div>

  </div>

   <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> &copy; 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

</body>

</html>