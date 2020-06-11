<?php
$a = 4;
$resto = $a % 2;
if ($resto == 0) {
    echo "es divisible por 2";
} else {
    echo "no es divisible por 2";
}

echo "<br>";
$b = 66;
$c = 2445;
$resultado = $b <=> $c;
if ($resultado == 1) {
    echo $b . " es mayor que " . $c;
} else if ($resultado == -1) {
    echo $c . " es mayor que " . $b;
} else if ($resultado == 0) {
    echo "son iguales";
}

switch ($resultado) {
    case -1:
        $mensaje = $c . " es mayor que " . $b;
        break;
    case 1:
        $mensaje = $b . " es mayor que " . $c;
        break;
    case 0:
        $mensaje = "son iguales";
        break;
    default:
            break;
}
echo $mensaje;
