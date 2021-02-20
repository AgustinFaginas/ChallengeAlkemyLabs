<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
    <title>Store Apps</title>
  </head>
  <body>
    <header class="container-fluid bg-header pt-4 bg-dark">
  
      
    <div class="row d-lg-flex flex-lg-nowrap">
        <div class=" col-lg-4 mt-lg-3 col-xl-4 ml-4 d-flex ">
          <a class="navbar-brand logo" href="index.html">STORE APPS</a>
        </div>
  
        <div class="col-lg-5 col-xl-4 ml-xl-5 pt-xl-3 mt-xl-4 mr-1 mt-4">
  
          <form class="form-inline mb-xl-2 my-2 my-lg-0 ">
            <input class="form-control input-busqueda mr-sm-2 w-100 " type="search" placeholder="Buscar producto..."
              aria-label="Search">
  
            <button class="btn my-2 my-sm-0 ml-5 boton" type="submit"><i class="fas fa-search" id="boton"></i></button>
  
  
          </form>
  
        </div>
  
        <div class="col-lg-1 col-xl-1 pt-xl-3 ml-5 mt-4 icons  ">
          <a class="usuario" href="login.html"><i class="fas fa-user  "></i></a>
          <a href=""><i class="fas fa-shopping-cart ml-4 "></i></a>
  
        </div>
  
      </div>
  
  
  
      <div class="row ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger m-0  vw-100">
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav m-auto pr-3 pt-2">
              <li class="nav-item active">
                <a class="nav-link ml-4 inicio" href="index.html">Inicio<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item active pr-2">
                <a class="nav-link ml-4 micuenta" href="miCuenta.html">Mi Cuenta<span
                    class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active pr-2">
                <a class="nav-link ml-4 miCuentaResponsive" href="miCuenta.html">Mi Cuenta<span
                    class="sr-only">(current)</span></a>
  
              </li>
              <li class="nav-item active pr-2">
                <a class="nav-link ml-4 carrito_responsive " href="carrito.html">Carrito<span
                    class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active pr-2">
                <a class="nav-link ml-4" href="contacto.html">Contactanos<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active pr-3">
                <a class="nav-link ml-4" href="ayuda.html">Ayuda<span class="sr-only">(current)</span></a>
              </li>
          </div>
  
  
      </div>
      
      </ul>
      </div>
      </nav>
      </div>
  
  
    </header>

    <div>
    	@yield('content')
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

  </body>
</html>
