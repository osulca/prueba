<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="nro1" value="<?=(isset($_POST["nro1"]))?$_POST["nro1"]:''?>" placeholder="Ingrese numero 1">
    <input type="text" name="nro2" value="<?=(isset($_POST["nro2"]))?$_POST["nro2"]:''?>" placeholder="Ingrese numero 2">
    <input type="submit" name="operacion" value="Sumar">
    <input type="submit" name="operacion" value="Restar">
    <input type="submit" name="operacion" value="Multiplicar">
    <input type="submit" name="operacion" value="Dividir">
</form>
<?php
if (isset($_POST["operacion"])) {
    require_once "Operaciones.php";

    $nro1 = (int) $_POST["nro1"];
    $nro2 = $_POST["nro2"];

    switch ($_POST["operacion"]){
        case "Sumar": Operaciones::suma($nro1, $nro2);
            break;
        case "Restar": Operaciones::resta($nro1, $nro2);
            break;
        case "Multiplicar": Operaciones::multiplicacion($nro1, $nro2);
            break;
        case "Dividir": Operaciones::division($nro1, $nro2);
            break;
    }
}

?>
