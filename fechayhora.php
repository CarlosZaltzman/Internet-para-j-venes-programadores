
<!DOCTYPE html>
<html>
  <title>Fecha y hora por PHP</title>
  <link rel="stylesheet" type="text/css" href="css/Hola.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto:200" rel="stylesheet">
 <meta charset="UTF-8">
<body>

<?php
date_default_timezone_set('America/Montevideo');
$tiempo=time();
echo "<h1>".date("H:i:s",$tiempo)."</h1><br>";
echo "<h1>".date("d/n/y",$tiempo)."</h1>";
?>

</body>
</html>
