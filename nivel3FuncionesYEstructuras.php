<!DOCTYPE html>
<html lang="en">
<head>
   <title>Nivel3</title>
</head>
<body>

<?php
//Ejercicio 1:
echo esPrimo(29);


function esPrimo($n1) {
     if ($n1==0 || $n1==1 || $n1==4) {
       return $n1 . " no es numero primo";
     }
     for ($i = 2; $i < $n1/2; $i++) { 
         if ($n1 % $i == 0) {
            return $n1 . " no es numero primo";
         }
     }
 return $n1 . " si es numero primo";
     
}
?>

</body>


