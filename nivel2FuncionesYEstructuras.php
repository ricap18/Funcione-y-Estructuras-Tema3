<!DOCTYPE html>
<html lang="en">
<head>
   <title>Nivel2</title>
</head>
<body>

<?php
// Ejercicio 1:
añosOlimpicos();
echo "</br>";
echo "</br>";
function añosOlimpicos() {
    foreach (range(1960, 2016, 4) as $años) {  // Rango inicial, rango final, incremento, genera array
        echo $años."</br>";
    }
}
?>

<?php
// Ejercicio 2:
echo "El pago es de ". pagoTelefono (5) . " centimos";
echo "</br>";
echo "</br>";
function pagoTelefono ($minutos) {
        $pago = 10;
        if ($minutos>3) {
            return $pago + ($minutos-3)*5;
        }
        else {
            return $pago;
        }
}
?>

<?php
// Ejercicio 3:
$chocolate = 1;
$chicles = 0.5;
$caramelos = 1.5;
echo "La compra total es de " . compra(2, $chocolate) + compra(1, $chicles) + compra(1, $caramelos) . "€";
function compra($cantidad, $articulo) {
    return $cantidad*$articulo;
}
?>

</body>