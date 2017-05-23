<!DOCTYPE html>
<html>
  <title>Variables PHP</title>
  <meta charset="UTF-8">
<body>

<?php
echo 2*3+5/6;
echo "<br>";
$a =2;
$b= 3;
$c= $a+$b;
echo $c;
echo "<br>";
$a="hola";
echo $a;
echo "<br>";
echo "Hola "."Mundo";	
echo "<br>";
$tiempo = time();
echo time();
echo "<br>";
echo date("d/n/y",$tiempo);
?>

</body>
</html>