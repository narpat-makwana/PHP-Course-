<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arithmetic Operations:</title>
</head>
<body>
    <form action="setB3.php" method="GET">
        Enter the  First No : <input type="text" name="a"> <br>
        Enter the Second No : <input type="text" name="b"> <br>
        <br>
        Operations:: <br>
        <input type="radio" name="c" value="1">Addition<br>
        <input type="radio" name="c" value="2">Subtraction<br>
        <input type="radio" name="c" value="3">Multiplication<br>
        <input type="radio" name="c" value="4">Division<br>
        <input type="submit" value="Submit"> <input type="reset" value="Clear">


    </form>
    
</body>
</html>

<?php

    $n1=$_GET['a'];
    $n2=$_GET['b'];
    $ch=$_GET['c'];

    switch($ch)
    {
        case 1:
            $c = $n1 + $n2;
            echo "Addition is: ".$c;
            break;
        case 2:
            $c = $n1 - $n2;
            echo "Subtraction is: ".$c;
            break;
        case 3:
            $c = $n1 * $n2;
            echo "Product is: ".$c;
            break;
        case 4:
            $c = $n1 / $n2;
            echo "Division is: ".$c;
            break;
    }

?>