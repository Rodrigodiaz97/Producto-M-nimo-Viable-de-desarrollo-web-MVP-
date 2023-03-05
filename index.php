<?php
require_once "pdo.php";
session_start();

if (isset($_POST["username"]) && isset($_POST["pass"])) {
  // unset borra una o varias variables, esta deja de exisir como si nunca hubiese sido creada
    unset($_SESSION["nombre"]);
    unset($_SESSION["user_id"]);

//$salt = 'XyZzy12*_';
//$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // Pw is meow123

$failure = false;  // If we have no POST data

// Check to see if we have some POST data, if we do process it
$check = $_POST["pass"];

    $stmt = $pdo->prepare(
        'SELECT user_id, nombre
        FROM usuario
        WHERE
        email = :email AND
        password = :password'
    );
    $stmt->execute(array( ':email' => $_POST['username'], ':password' => $check));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row !== false) {
        error_log("Login success " . $_POST['username'] . "\n", 3, "logs.log");
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["nombre"] = $row["nombre"];
        header("Location: dash.php");
        die();
    } else {
        $_SESSION["error"] = "El correo o la contraseña son incorrectos";
        error_log("Login fail " .$_POST['username']. " $check" . "\n", 3, "logs.log");
        header("Location: index.php");
        die();
    }
}

if ( isset($_SESSION['error']) ) {
    // Look closely at the use of single and double quotes
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
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
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8888ec5d3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ll.css">

    <title>Nombre de la Empresa</title>
  </head>
  <body class="bg-dark">
    <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item imag-3 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <strong>
                          <h5>Toma las mejores decisiones de inversión con modelos de Machine Learning</h5>
                          <p>Descubre el potencial del retorno de inversión por zonas geaograficas.</p>
                          </strong>
                        </div>
                      </div>
                      <div class="carousel-item casa min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <strong>
                          <h5 style="color: black"></h5>
                          <p style="color: black"></p>
                          </strong>
                        </div>
                      </div>
                      <div class="carousel-item appll min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <strong>
                          <h5></h5>
                          <p></p>
                          </strong>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            </div>
            <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <img src="conor.jpg" class="img-fluid" width="150px" height="150px">
                </div> 
                <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                   <h1 class="font-weight-bold mb-4">Bienvenido de vuelta</h1> 
                   <form method="post" action="#" class="mb-5"> 
                    <div class="mb-4"> 
                      <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                      <input name="username" type="email" class="form-control bg-dark-x border-0" placeholder="Ingresa tu email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div> 
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                      <input name="pass" type="password" class="form-control bg-dark-x border-0 mb-2" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
                      <a href="" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="ingresar" value="Ingresar" onclick="return doValidate();">Iniciar sesión</button>
                  </form>

                  <p class="font-weight-bold text-center text-muted">O inicia sesión con</p>
                  <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-outline-light flex-grow-1 m-2"><i class="fab fa-google lead m-2"></i>Google</button>  
                    <button type="submit" class="btn btn-outline-light flex-grow-1 m-2"><i class="fab fa-facebook-f lead m-2"></i>Facebook</button>  
                  </div>
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                    <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> 
                    <a href="pricing.php" class="text-light font-weight-bold text-decoration-none" name="registrarse" value="Registrarse">Crea una ahora</a>
                 </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        function doValidate()
        {
            console.log("Validating...");
            try
            {
                email = document.getElementById("exampleInputEmail1").value;
                pw = document.getElementById("exampleInputPassword1").value;
                console.log("Validating email="+email);
                console.log("Validating pw="+pw);
                if (pw == null || pw == "" || email == null || email == "")
                {
                    alert("Los dos campos estan vacios");
                    return false;
                }
                if(email.search("@") === -1)
                {
                    alert("La dirección de correo debe contener @");
                    return false;
                }
                return true;
            }
            catch(e)
            {
                return false;
            }
            return false;
        }
    </script>

  </body>
</html>
