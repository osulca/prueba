<?php
$hola = "Index";
$mensaje = "Hola mundo";
?>
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
    echo "<br><p>";

    $array1 = array(1, 6, 8, 13);
    $array2 = [
        "nombre" => "Omar",
        "apellidos" => "Sulca"
    ];
    echo $array1[3]."<br>";
    echo $array2["apellidos"];

    //ejemplo de identidad
    $a = 5;
    echo $a++ . "</p>";
    echo $a . "</p>";
    ?>
</h1>
</body>
</html>