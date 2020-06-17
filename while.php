// generar una tabla de 40 elementos, y que se divida cada 10 elementos
<table border="1" cellspacing="0">
    <tbody>
    <tr>
    <?php
    $i = 1;
    while ($i <= 40) {
        echo "<td>$i</td>";
        if($i%5 == 0){
            echo "</tr><tr>";
        }
        $i++;
    }
    ?>
    </tbody>
</table>

