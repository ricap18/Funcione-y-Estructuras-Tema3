<!DOCTYPE html>
<html lang="en">
<head>
   <title>Nivel1</title>
</head>
<body>

<?php
// Ejercicio 1:
parImpar(53);
echo "</br>";
echo "</br>";
function parImpar ($edad){
     if ($edad%2 == 0) {
        echo "El número " . $edad . " es Par";
     }
     else {
        echo "El número " . $edad . " es Impar";
     }
}
?>

<?php
// Ejercicio 2:
escondrijo();
echo "</br>";
echo "</br>";
function escondrijo() {
    for ($i=0; $i < 10; $i+2) { 
        echo $i+=2;
        echo " ";
    }
}
?>

<?php
// Ejercicio 3:
escondrijo2(40);
echo "</br>";
echo "</br>";
function escondrijo2($n1) {
    for ($i=0; $i < $n1; $i+2) { 
        echo $i+=2;
        echo " ";
    }
}
?>

<?php
// Ejercicio 4:
escondrijo3();
echo "</br>";
escondrijo3(20);
echo "</br>";
echo "</br>";
function escondrijo3($n1=10) {   //  Le asigno un valor por defecto al parametro
    for ($i=0; $i < $n1; $i+2) { 
        echo $i+=2 . " ";
        echo " ";
    }
}
?>

<?php
// Ejercicio 5:
verificarGrado("38%");
echo "</br>";
echo "</br>";
function verificarGrado($grado) {
    if ($grado >= "60%" || $grado == "100%" ) {
        echo "Su grado es de Primera División";
    }
    elseif ($grado >= "45%") {
        echo "Su grado es de Segunda División";
    }
    elseif ($grado >= "33%") {
        echo "Su grado es de Tercera División";
    }
    else {
        echo "A reprobado el curso";
    }
}
?>

<?php
// Ejercicio 6:
if (isBitten()==0) {
    echo "True";
}
else {
    echo "False";
}
echo "</br>";
echo "</br>";
 function isBitten() {
    return rand(0,1);    // Genera un número aleatorio  0 o 1
}
?>

</body>