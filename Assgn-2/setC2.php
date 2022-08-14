<!-- Write a PHP script for the following: Design a form to accept the details of 5
different items, such as item code, item name, units sold, rate. Display the bill in
the tabular format. Use only 4 text boxes. (Hint : Use of explode function.) -->
<html>

<head>
</head>

<body>
    <form method="get" action="setC2.php">
        <table border="1">
            <tr>
                <td>item code</td>
                <td><input type="text" name="itemcode" /></td>
            </tr>
            <tr>
                <td>item name </td>
                <td><input type="text" name="itemname" /></td>
            </tr>
            <tr>
                <td>units</td>
                <td><input type="text" name="unit" /></td>
            </tr>
            <tr>
                <td>rate</td>
                <td><input type="text" name="rate" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" /></td>
            </tr>

    </form>
</body>

</html>

<?php
$itemcode = $_GET['itemcode'];
$itemname = $_GET['itemname'];
$unit = $_GET['unit'];
$rate = $_GET['rate'];
$icode = explode(',', $itemcode);
$iname = explode(',', $itemname);
$iunit = explode(',', $unit);
$irate = explode(',', $rate);
$z = count($icode);
$tamt = 0;
for ($i = 0; $i < $z; $i++) {
    $tamt += $iunit[$i] * $irate[$i];
}
echo "<table align=center border=1>";
echo "<tr><td> <b>Item Code</b> </td><td> <b>Item Name</b>
</td><td><b> Units Sold</b> </td><td> <b>Rate </b></td></tr>";
for ($i = 0; $i < $z; $i++) {
    echo "<tr><td>" . $icode[$i] . "</td><td>" . $iname[$i] . "</td>
<td>" . $iunit[$i] . "</td><td>" . $irate[$i] . "</td></tr>";
}
echo "<tr><th colspan=3>Total amount </th><td>" . $tamt . "</td></tr>";
echo "</table>";
?>