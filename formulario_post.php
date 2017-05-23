<html>
  <header>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <meta charset="UTF-8">
  </header>
  <body>
  <?php
    $email="";
    $nombre="";
    $apellido="";
    $fecha_nacimiento="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $servidor = "localhost";
      $usuario = "root";
      $password = "";
      $nombre_db = "demo";
      $strfecha1=str_replace("/", "-", $_POST['fecha_nacimiento']);
      $ymd = DateTime::createFromFormat('d-m-Y',$strfecha1 )->format('Y-m-d');
      $conexion = new mysqli($servidor, $usuario, $password,$nombre_db);
      if ($conexion->connect_error) {
         die("Connection failed: " . $conexion->connect_error);
       }
       $sql = "INSERT INTO emails (email, nombre, apellido, fecha_nacimiento)
       VALUES ('" . $_POST['email']."','".$_POST['nombre']."','" .$_POST['apellido']."','" .    	  $ymd."')";
       if (!$conexion->query($sql)) {
         echo "Error: " . $sql . "<br>" . $conexion->error;
       }
       $conexion->close();
      }
  ?>
  <div class="form">
  <form action="" method="post"> 

    <label for="email">E-mail:</label><br>
    <input type="text" name="email" id="email""value="<?php echo $email;?>><br> 

    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" "value="<?php echo $nombre;?>><br>

    <label for="apellido">Apellido:</label><br>
    <input type="text" name="apellido" id="apellido" "value="<?php echo $apellido;?>><br>

    <label for="nombre">Fecha de nacimiento:</label><br>
    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" 
        "value="<?php echo $fecha_nacimiento;?>"><br>

    <input type="submit" value="Enviar">
  </div>
  </form>
  <a href = "http://localhost/listado.php">Listado</a>
  </body>
</html>   