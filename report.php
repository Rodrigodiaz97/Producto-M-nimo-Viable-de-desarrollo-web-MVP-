<?php
require_once "pdo.php";
session_start();

if ( ! isset($_SESSION['user_id'])) {
    die("ACCESS DENIED");
    return;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesdh.css">
    <!-- Gráfica de mexico --> 
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>

    <title>PLATAFORMA TODOENTIENDA</title>
  </head>
  <body>
      <div class="d-flex">
          <div id="sidebar-container" class="bg-primary">
              <div class="logo">
                <img src="conor.jpg" alt="#" width="100px" height="100px">
              </div>
              <div class="menu">
                <a href="dash.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-apps m-2 lead text-decoration-none"></i>Tablero</a>
                <a href="topp.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-cart m-2 lead text-decoration-none"></i>Perfil de Inversión</a>
                <a href="ventas.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-cash m-2 lead text-decoration-none"></i>Rendimientos</a>
                <a href="#" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-pie m-2 lead text-decoration-none"></i>Reportes</a>
                <a href="preciospron.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-stats m-2 lead text-decoration-none"></i>Predicción</a>
                <a href="#" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-paper m-2 lead text-decoration-none"></i>Contabilidad</a>
                <a href="#" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-people m-2 lead text-decoration-none"></i>Proveedores</a>
                <a href="#" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-rocket m-2 lead text-decoration-none"></i>Salir</a>
              </div>
          </div>

          <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex form-inline position-relative my-2 d-inline-block">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images.jpeg" class="img-fluid rounded-circle avatar m-2">
                        Vicente Naves Amodio
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                        <li><a class="dropdown-item" href="#">Subscripciones</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <div id="content">
              <section class="py-3">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-9">
                      <h1 class="font-weight-bold mb-0">Bienvenido GRUPO CONORGIN S.A.S DE C.V</h1>
                      <p class="lead text-muted">Revisa la última información de tu negocio</p>
                    </div>
                    <div class="col-lg-3 d-flex">
                      <a href="reporteinmobiliario.pdf" download class="btn btn-primary w-100 align-self-center"><i class="icon ion-md-download m-2 lead text-decoration-none"></i>Descargar reporte</a>
                    </div>
                  </div>
                </div>
              </section>
              <section class="bg-mix">
                <div class="container">
                  <div class="card rounded-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mes de Enero</h6>
                          <h3 class="font-weight-bold">$400,000 pesos (ingresos)</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>10.56% respecto al mes anterior</h6>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mes de Febrero</h6>
                          <h3 class="font-weight-bold">$200,000 pesos (ingresos)</h3>
                          <h6 class="text-danger"><i class="icon ion-md-arrow-dropdown-circle"></i>4.34% respecto al mes anterior</h6>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mes de Marzo</h6>
                          <h3 class="font-weight-bold">$700,000 pesos (ingresos)</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>10.02% respecto al mes anterior</h6>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mes de Abril</h6>
                          <h3 class="font-weight-bold">$150,000 pesos (ingresos)</h3>
                          <h6 class="text-danger"><i class="icon ion-md-arrow-dropdown-circle"></i>6.35% respecto al mes anterior</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="bg-grey">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Reportes de la base de datos inmobiliarios</h6>
                        </div>
                        <div class="card-body">
                          <img src="dist.png" alt="">
                        </div>
                      </div>
                    </div>
                    <!-- 1era barra-->
                    <!-- 2da gráfica-->
                    <!-- 2da barra-->
                  </div>
                </div>
                <!-- 3er gráfica -->
                <!-- 3er barra-->
              </section>
              <section class="bg-grey">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Reportes de la base de datos inmobiliarios</h6>
                        </div>
                        <div class="card-body">
                          <img src="prvs.png" alt="">
                        </div>
                      </div>
                    </div>
                    <!-- 1era barra-->
                    <!-- 2da gráfica-->
                    <!-- 2da barra-->
                  </div>
                </div>
                <!-- 3er gráfica -->
                <!-- 3er barra-->
              </section>
              </section>
              <section class="bg-grey">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Reportes de la base de datos inmobiliarios</h6>
                        </div>
                        <div class="card-body">
                          <img src="logan.png" alt="">
                        </div>
                      </div>
                    </div>
                    <!-- 1era barra-->
                    <!-- 2da gráfica-->
                    <!-- 2da barra-->
                  </div>
                </div>
                <!-- 3er gráfica -->
                <!-- 3er barra-->
              </section>
              </section>
              <section class="bg-grey">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Reportes de la base de datos inmobiliarios</h6>
                        </div>
                        <div class="card-body">
                          <img src="lop.png" alt="">
                        </div>
                      </div>
                    </div>
                    <!-- 1era barra-->
                    <!-- 2da gráfica-->
                    <!-- 2da barra-->
                  </div>
                </div>
                <!-- 3er gráfica -->
                <!-- 3er barra-->
              </section>
              </section>
              <section class="bg-grey">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Reportes de la base de datos inmobiliarios</h6>
                        </div>
                        <div class="card-body">
                          <img src="pollo.png" alt="">
                        </div>
                      </div>
                    </div>
                    <!-- 1era barra-->
                    <!-- 2da gráfica-->
                    <!-- 2da barra-->
                  </div>
                </div>
                <!-- 3er gráfica -->
                <!-- 3er barra-->
              </section>
            </div>
          </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js" integrity="sha256-Y26AMvaIfrZ1EQU49pf6H4QzVTrOI8m9wQYKkftBt4s=" crossorigin="anonymous"></script>

  <!-- lol-->
  </body>
</html>