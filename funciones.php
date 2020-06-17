<?php
function generarTabla($n,$m)
{
    echo "<table border='1' cellspacing='0'>
    <tbody>
    <tr>";

    $i = 1;
    while ($i <= $n) {
        echo "<td style='width: 30px'>$i</td>";
        if ($i % $m == 0) {
            echo "</tr><tr>";
        }
        $i++;
    }

    echo "</tbody>
    </table>";
}
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="varn" placeholder="Ingrese n"/><br>
    <input type="text" name="varm" placeholder="Ingrese m"/><br>
    <input type="submit" name="submit" value="Enviar"/>
</form>
<?php
if (isset($_POST["submit"])) {
    $n =  $_POST["varn"];
    $m =  $_POST["varm"];
    generarTabla($n, $m);
}