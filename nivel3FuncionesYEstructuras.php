<!DOCTYPE html>
<html lang="en">
<head>
   <title>Nivel3</title>
</head>
<body>

<?php
//Ejercicio 1:
cribaDeNumeros(1, 50);

function cribaDeNumeros($min, $max){
  for ($i=$min; $i <= $max; $i++) { 
     if (esPrimo($i)) {
        echo "El numero ". $i . " Es primo"."</br>";
     }
     else {
        echo "El numero ". $i . " No es primo"."</br>";
     }
  }
}
function esPrimo($n1){
   $contador = 0;
   for ($i=1; $i<=$n1; $i++) { 
      if ($n1%$i==0) {
         $contador += 1;
      }
   }
   if ($contador==2) {
      return true;
   }
   else {
      return false;
   }
}
?>

</body>


