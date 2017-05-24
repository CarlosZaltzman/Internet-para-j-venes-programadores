<?php
$a = 30;

if ($a > 10){
  echo("Mayor que 10<br>");
}

if ($a>50){
  echo("Mayor que 50<br>");
}
else{
 echo("Menor o igual que 50<br>");
}

$a=1;
$suma=0;
while($a<=10){
  $suma=$suma+$a;
  $a=$a+1; 	 
}
echo $suma
?>