<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hola; ?></title>
    <style>
        h1 {
            background-color: lightgray;
            padding: 20px;
        }
    </style>
</head>
<body>
<h1>
    <?php echo $mensaje . ', Bienvenidos';
    // echo htmlentities($_GET["mensaje"]);
    //    echo "<br><p>";
    ?>
</h1>
<?php
// tipo 1
$numeros = array(1, 6, 8, 13);

// tipo 2
$personas = [
    "nombre" => "Omar",
    "apellidos" => "Sulca"
];

$numeros[3] . "<br>";

foreach ($numeros as $numero){
    echo $numero."</br>";
}

for($i = 0; $i<count($numeros); $i++){
    echo $numeros[$i]."<br>";
}

foreach ($personas as $persona){
    echo $persona."<br>";
}
?>
</body>
</html>
