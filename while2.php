<table border="1" cellspacing="0">
<tbody>
    <tr>
<?php
$i=1;
while($i <= 40){
    echo "<td>$i</td>";
    if($i%10 == 0){
        echo "</tr>";
    }
    $i++;
}
?>
</tbody>
<table>