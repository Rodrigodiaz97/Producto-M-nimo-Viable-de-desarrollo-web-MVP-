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

    <title>PLATAFORMA PREDICTEDREALSTATE</title>
  </head>
  <body>
      <div class="d-flex">
          <div id="sidebar-container" class="bg-primary">
              <div class="logo">
                <img src="conor.jpg" alt="#" width="100px" height="100px">
              </div>
              <div class="menu">
                <a href="#" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-apps m-2 lead text-decoration-none"></i>Tablero</a>
                <a href="topp.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-cart m-2 lead text-decoration-none"></i>Perfil de Inversión</a>
                <a href="ventas.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-cash m-2 lead text-decoration-none"></i>Rendimientos</a>
                <a href="report.php" class="d-block text-light p-3 text-decoration-none"><i class="icon ion-md-pie m-2 lead text-decoration-none"></i>Reportes</a>
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
                          <h6 class="text-muted">Mercado de Casa Habitación</h6>
                          <h3 class="font-weight-bold">$CAP 15 MUSD</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>10.56% respecto al año anterior</h6>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mercado de Oficinas</h6>
                          <h3 class="font-weight-bold">$CAP 30 MUSD</h3>
                          <h6 class="text-danger"><i class="icon ion-md-arrow-dropdown-circle"></i>4.34% respecto al mes anterior</h6>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mercado de Tierra</h6>
                          <h3 class="font-weight-bold">$CAP 60 MUSD</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>10.02% respecto al mes anterior</h6>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                          <h6 class="text-muted">Mercado de Naves Industriales</h6>
                          <h3 class="font-weight-bold">$CAP 24 MUSD</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>6.35% respecto al mes anterior</h6>
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
                    <div class="col-lg-8 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Ciudades en EUA con mayor número de viviendas en renta disponibles</h6>
                        </div>
                        <div style="height: 511px" class="card-body">
                          <canvas id="myChart"></canvas>
                        </div>
                      </div>
                    </div>
                    <!-- 1era barra-->
                 <!-- 3er barra-->
                 <div class="col-lg-4 my-3">
                      <div class="card rounded-0">
                        <div class="card-header align-self-center bg-light">
                          <h6 class="font-weight-bold mb-0">Perfil de oportunidades</h6>
                        </div>
                        <div class="card-body pt-2">
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-home"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Monterrey</h6>
                              <small class="d-block text-muted">Conoce casas liberadas de remates bancarios</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-ios-body"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">BUYER PERSONA</h6>
                              <small class="d-block text-muted">Conoce el perfil del comprador por tipo de zona</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-cash"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Reportes Financieros</h6>
                              <small class="d-block text-muted">Conoce como puedes potenciar tu inversión.</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-compass"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Oportunidades detectadas cerca</h6>
                              <small class="d-block text-muted">Conoce las oportunidades de inversión a tu alcance.</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2 mb-3">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Zonas con mayor crecimiento</h6>
                              <small class="d-block text-muted">Conoce que zonas pueden otorgar mayores rendimientos a largo plazo</small>
                            </div>
                          </div>
                          <button class="btn btn-primary w-100">Ver todas</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <!-- 2da gráfica-->
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Ciudades en EUA con menor número de viviendas en renta disponibles</h6>
                        </div>
                        <div class="card-body">
                          <canvas id="myChart2"></canvas>
                        </div>
                      </div>
                    </div>
                    <!-- 2da barra-->
                    <div class="col-lg-4 my-3">
                      <div class="card rounded-0">
                        <div class="card-header align-self-center bg-light">
                          <h6 class="font-weight-bold mb-0">Descripción de la zona</h6>
                        </div>
                        <div class="card-body pt-2">
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                            <img src="https://img.icons8.com/color/50/000000/google-maps.png"/> 
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Burien</h6>
                              <small class="d-block text-muted">46,022 Habitantes</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                            <img src="https://img.icons8.com/color/50/000000/google-maps.png"/>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Des Moines</h6>
                              <small class="d-block text-muted">215,408 Habitantes</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                            <img src="https://img.icons8.com/color/50/000000/google-maps.png"/>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Covington</h6>
                              <small class="d-block text-muted">10,471 Habitantes</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                            <img src="https://img.icons8.com/color/50/000000/google-maps.png"/>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Bothell</h6>
                              <small class="d-block text-muted">30,150 Habitantes</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2 mb-3">
                            <div class="d-flex m-3">
                            <img src="https://img.icons8.com/color/50/000000/google-maps.png"/> 
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Carnation</h6>
                              <small class="d-block text-muted">2,165 Habitantes</small>
                            </div>
                            </div> 
                            <div class="d-flex border-bottom py-2 mb-3">
                            <div class="d-flex m-3">
                            <img src="https://img.icons8.com/color/50/000000/google-maps.png"/> 
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Clyde Hill</h6>
                              <small class="d-block text-muted">3,360 Habitantes</small>
                            </div>
                          </div>
                          <div style="height: 88px">
                          <button style="height: 60px" class="btn btn-primary w-100">Ver todas</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 3er gráfica -->
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 my-3">
                      <div class="card rounded-0">
                        <div class="card-header bg-light">
                          <h6 class="font-weight-bold mb-0">Desarrollo y crecimiento inmbobiliario por entidad federativa</h6>
                        </div>
                        <div class="card-body">
                          <div id="container"></div>
                        </div>
                      </div>
                    </div>
                <!-- 3er barra-->
                <div class="col-lg-4 my-3">
                      <div class="card rounded-0">
                        <div class="card-header align-self-center bg-light">
                          <h6 class="font-weight-bold mb-0">Perfil de oportunidades</h6>
                        </div>
                        <div class="card-body pt-2">
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-home"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Monterrey</h6>
                              <small class="d-block text-muted">Conoce casas liberadas de remates bancarios</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-ios-body"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">BUYER PERSONA</h6>
                              <small class="d-block text-muted">Conoce el perfil del comprador por tipo de zona</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-cash"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Reportes Financieros</h6>
                              <small class="d-block text-muted">Conoce como puedes potenciar tu inversión.</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-compass"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Oportunidades detectadas cerca</h6>
                              <small class="d-block text-muted">Conoce las oportunidades de inversión a tu alcance.</small>
                            </div>
                          </div>
                          <div class="d-flex border-bottom py-2 mb-3">
                            <div class="d-flex m-3">
                              <h2 class="align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2>
                            </div>
                            <div class="align-self-center">
                              <h6 class="d-inline-block mb-0">Zonas con mayor crecimiento</h6>
                              <small class="d-block text-muted">Conoce que zonas pueden otorgar mayores rendimientos a largo plazo</small>
                            </div>
                          </div>
                          <button class="btn btn-primary w-100">Ver todas</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
      </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js" integrity="sha256-Y26AMvaIfrZ1EQU49pf6H4QzVTrOI8m9wQYKkftBt4s=" crossorigin="anonymous"></script>

      <script>
        const labels = [
          'Seattle',
          'Renton',
          'Bellevue',
          'Redmont',
          'Kirkland',
          'Issaquah',
          'Kent',
          'Auburn',
          'Sammamish',
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: 'Mercado de Rentas',
            backgroundColor: [
              '#111b54',
              '#12C9E5',
              '#12C9E5',
              '#12C9E5',
              '#12C9E5',
              '#12C9E5',
              '#12C9E5',
              '#12C9E5',
              '#12C9E5'
            ],
            maxBarThickness: 50,
            borderColor: 'rgb(255, 99, 132)',
            data: [1573, 293, 286, 235, 187, 185, 176, 175, 148],
          }]
        };
      
        const config = {
          type: 'bar',
          data: data,
          options: {}
        };
    </script>
    <script>
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>

  <!-- lol-->
<canvas id="myChart2"></canvas>
<script src="chart.js"></script>
<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    type: 'doughnut',
    data:{
	datasets: [{
		data: [176,74,58, 43, 33, 22, 11, 9, 5, 1],
		backgroundColor: ['#42a5f5', 'red', 'green','blue','purple','orange','teal','sienna','black','gold'],
		label: 'Ciudades en EUA con menor número de viviendas en renta disponibles'}],
		labels: ['Aubrum','Burien','Des Moines','Covington','Bothell','Carnation','Clyde Hill','Black Diamond','Algona','Beaux Arts Village']},
    options: {responsive: true},
});
</script>
<!-- mapa mex -->
<script>

    // Prepare demo data
    // Data is joined to map using value of 'hc-key' property by default.
    // See API docs for 'joinBy' for more info on linking data and map.
    (async () => {

const topology = await fetch(
    'https://code.highcharts.com/mapdata/countries/mx/mx-all.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data = [
    ['mx-3622', 10], ['mx-bc', 11], ['mx-bs', 12], ['mx-so', 13],
    ['mx-cl', 14], ['mx-na', 15], ['mx-cm', 16], ['mx-qr', 17],
    ['mx-mx', 18], ['mx-mo', 19], ['mx-df', 20], ['mx-qt', 21],
    ['mx-tb', 22], ['mx-cs', 23], ['mx-nl', 24], ['mx-si', 25],
    ['mx-ch', 26], ['mx-ve', 27], ['mx-za', 28], ['mx-ag', 29],
    ['mx-ja', 30], ['mx-mi', 31], ['mx-oa', 32], ['mx-pu', 33],
    ['mx-gr', 34], ['mx-tl', 35], ['mx-tm', 36], ['mx-co', 37],
    ['mx-yu', 38], ['mx-dg', 39], ['mx-gj', 40], ['mx-sl', 41],
    ['mx-hg', 42]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: topology
    },

    title: {
        text: 'Perspectivas de crecimiento a tres años por entidad federativa'
    },

    subtitle: {
        text: ''
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: false,
            format: '{point.name}'
        }
    }]
});

})();


    </script>
  </body>
</html>