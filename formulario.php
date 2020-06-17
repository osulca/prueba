<?php
    $mensaje = "Hola a todos";
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="anho" placeholder="Ingrese un año de nacimiento"/>
    <input type="submit" name="submit" value="Enviar"/>
    <?=$mensaje?>
</form>
<?php
// identifica si se envio el formulario
if (isset($_POST["submit"])) {
    $anhoNacimiento =  $_POST["anho"];
    $edadActual = 2020 - $anhoNacimiento;

    echo "usted tiene $edadActual años, ";

    if($edadActual < 18){
        echo "<b>no es apto para votar</b>";
    }

    if ($edadActual >= 18){
        echo "<b>es apto para votar</b>";

    }
}
?>
