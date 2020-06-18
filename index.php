<?php
$hola = "Index";
$mensaje = "Hola mundo";

// include "index.vista.php";

?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="email" placeholder="Ingrese email"/>
    <input type="submit" name="submit" value="Enviar"/>
</form>

<?php

if (isset($_POST["submit"])) {
    $email =  $_POST["email"];

    require "Cliente.php";
    $cliente = new Cliente("Juana", $email, "998847262");
/*  $cliente->nombre = "Juana";
    $cliente->email = $email;
    $cliente->telefono = "998847262"; */
    $cliente->cambiarEmail();
}
?>
