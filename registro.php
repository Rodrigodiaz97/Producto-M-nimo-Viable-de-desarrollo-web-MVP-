<?php
require_once "pdo.php";
if ( isset($_POST['nombre']) && isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['persona']) 
    && isset($_POST['telefono']) && isset($_POST['direccion']) 
    && isset($_POST['sector']) && isset($_POST['pais'])
    && isset($_POST['acercad']))

    {
    $sql ="INSERT INTO usuario (user_id, nombre, email, password, persona, 
                telefono, direccion, sector, pais, acercad)
                VALUES (:uid, :nombre, :email, :password, :persona, 
                :telefono, :direccion, :sector, :pais, :acercad)";
    echo("<pre>\n" .$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':uid' => $_SESSION['user_id'],
        ':nombre' => $_POST['nombre'],
        ':email' => $_POST['email'],
        ':password'=> $_POST['password'],
        ':persona'=> $_POST['persona'],
        ':telefono'=> $_POST['telefono'],
        ':direccion'=> $_POST['direccion'],
        ':sector'=> $_POST['sector'],
        ':pais'=> $_POST['pais'],
        ':acercad'=> $_POST['acercad']));
        $_SESSION['success'] = "Profile added.";
        header("Location: index.php");
        return;
}
?>
<html>
<head>
<link rel="stylesheet" href="regicss.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="main">
<div class="register">
<div id="principal">
<form class="form" method="post">
<h2 id="h2">REGISTRATE AQUI</h2>
<p><input type="text" placeholder="Nombre de la empresa" name="nombre" size="40"></p>
<p><input type="email" placeholder="Email de la empresa" name="email" size="40"></p>
<p><input type="password" placeholder="Contraseña" name="password" size="40"></p>
<p>Tipo de negocio:<br>
<p><input type="radio" name="persona" value="F" required>Persona Fisica</p>
<p><input type="radio" name="persona" value="M" required>Persona Moral</p>
<p><input type="text" placeholder="Telefono de la empresa" name="telefono" size="40" required></p>
<p><input type="text" placeholder="Dirección de la empresa" name="direccion" size="40" required></p>
<label for="inp05">Sector:
    <select class="seleccion" name="sector" id="inp05" required>
    <option selected hidden value="">-- Selecciona un Sector --</option>
    <option value="energetico">ENERGETICO</option>
    <option value="inmobiliario">INMOBILIARIO</option>
    <option value="materiales">MATERIALES</option>
    <option value="industrial">INDUSTRIAL</option>
    <option value="consumonobasico">BIENES DE CONSUMO NO BASICO</option>
    <option value="consumofrecuente">PRODUCTOS DE CONSUMO FRECUENTE</option>
    <option value="salud">SALUD</option>
    <option value="financiero">SERVICIOS FINANCIEROS</option>
    <option value="tecnologia">TECNOLOGIA DE LA INFORMACION</option>
    <option value="telecomunicaciones">TELECOMUNICACIONES</option>
    <option value="otro">OTRO</option>
</select>
</label>
<p><label for="inp06">País:
    <select name="pais" id="inp06">
    <option value="0">-- Selecciona un País --</option>
    <option value="1">México</option>
    <option value="2">EUA</option>
    <option value="3">Colombia</option>
    <option value="4">Argentina</option>
    <option value="5">Chile</option>
    </select>
</label></p>
<p><label for="inp08">Cuentanos sobre tu empresa:<br>
<textarea name="acercad" id="inp08" cols="40" rows="10">
Ejemplo: Mi empresa es del ramo de " " nos dedicamos a proveer soluciones.... 
</textarea>
</p>
<p><input class="btn btn-primary btn-lg btn-block" type="submit" value="Agregar"/></p>
</form>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>