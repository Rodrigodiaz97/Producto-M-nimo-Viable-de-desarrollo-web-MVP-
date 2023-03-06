<?php
if (isset($_POST["regis"])) {
    header("Location: registro.php");
    die();
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
    <link rel="stylesheet" href="stylespr.css">

    <title>Membresías</title>
  </head>
  <body>

    <div class="container text-center py-5">
    <h1 class="display-4">Membresías</h1>
    <p class="lead">¡Unete a nuestra plataforma para tomar mejores decisiones <br> de inversión en el sector inmobiliario!</p>
    <br><a href="video.php" class="font-weight-bold text-decoration-none" name="video" value="video">Ver Video Introductorio</a>
    </div>

<div class="container text-center">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card shadow-sm">
                <div class="card-header text-light">
                    <h4>Gratis</h4>
                </div>
                <div class="card-body">
                    <h1 class="my-0 font-weight-normal">$0 MXN<small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Obten acceso a nuestra <br> subscripción PLATINO <br> totalmente gratis <br> durante 3 días.</li>
                    </ul>
                    <form method="post">
                    <button type="submit" name="regis" class="btn btn-outline-primary btn-lg btn-block">Resgistrarme
                    </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card shadow-lg">
                <div class="card-header text-light">
                    <h4>Gold</h4>
                </div>
                <div class="card-body">
                    <h1 class="my-0 font-weight-normal">$500 MXN<small class="text-muted">/mes</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Obten acceso directo a nuestra plataforma <br> donde podrás conocer las mejores alternativas<br>de inversión en el mercado inmobiliario,<br> con nuestro modelo de pronosticos<br> que usa algoritmos de machine learning <br> podrás llevar a tu negocio al siguiente <br> nivel y tomar las mejores decisiones.</li>
                    </ul>
                    <form method="post">
                    <button type="submit" name="regis" class="btn btn-primary btn-lg btn-block">Resgistrarme
                    </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card shadow-lg">
                <div class="card-header text-light">
                    <h4>Gold + </h4>
                </div>
                <div class="card-body">
                    <h1 class="my-0 font-weight-normal">$6,000<small class="text-muted">/año</small></h1>
                    <ul class="list mt-3 mb-4">
                        <li>Membresía GOLD</li>
                        <br>
                        <li>Consultoria al mes por un experto de negocios e inversión, con el objetivo de optimizar procesos y llegar a las metas establecidas.</li>
                        <br>
                        <li>Propuesta de asesoria personalizada para llegar al siguiente nivel competitivo.</li>
                        <br>
                        <li>Capacitación constante en los procesos de interpretación del machine learning y en la plataforma.</li>
                    </ul>
                    <form method="post">
                    <button type="submit" name="regis" class="btn btn-primary btn-lg btn-block">Resgistrarme
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>