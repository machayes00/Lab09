<?php

$bread1 = $_POST['bread1'];

$bread2 = $_POST['bread2'];

$bread3 = $_POST['bread3'];

$total1 = $bread1 * 1;
$total2 = $bread2 * 2;
$total3 = $bread3 * 4;
$total = $total1 + $total2 + $total3;
$totalshipping = $total + 20;
/*
echo "<table border='1px solid black'>";
    echo "<tr>";
        echo"<th>---</th>";
        echo"<th>Quantity</th>";
        echo"<th>Cost Per Item</th>";
        echo"<th>Sub Total</th>";
    echo "</tr>";
    echo "<tr>";
        echo"<td>Item1</td>";
        echo"<td>$bread1</td>";
        echo"<td>'$1'</td>";
        echo"<td>'$'$total1</td>";
    echo "</tr>";
    echo "<tr>";
        echo"<td>Item2</td>";
        echo"<td>$bread2</td>";
        echo"<td>'$2'</td>";
        echo"<td>'$'$total2</td>";
    echo "</tr>";
    echo "<tr>";
        echo"<td>Item3</td>";
        echo"<td>$bread3</td>";
        echo"<td>'$4'</td>";
        echo"<td>'$'$total3</td>";
    echo "</tr>";
    echo "<tr>";
        echo"<td>Shipping</td>";
        echo"<td>Express</td>";
        echo"<td>'$20'</td>";
    echo "</tr>";
    echo "<tr>";
        echo"<td>Total Cost</td>";
        echo"<td>'$'$totalshipping</td>";
    echo "</tr>";    
echo "</table>";
*/
echo $total1;
?>