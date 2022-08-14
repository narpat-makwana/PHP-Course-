<!-- Write a menu driven program to perform the following operations on associative
arrays:
a) Sort the array by values (changing the keys) in ascending, descending
order.
b) Also sort the array by values without changing the keys.
c) Filter the odd elements from an array. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Operations-3</title>
</head>
<body>
    <form action="6_assoc4.php" method="post">
    Select the operation to perform : <br>
    <input type="radio" name="r" value="1">Sort the array by values (changing the keys) in ascending, 
    descending order. <br>
    <input type="radio" name="r" value="2">Sort the array by values without changing the keys. <br>
    <input type="radio" name="r" value="3">Filter the odd elements from an array. <br>
    <br>
    <input type="submit" value="submit"> &nbsp; <input type="reset" value="Cancel"><br>
    </form>
</body>
</html>

<?php
    $ch = $_POST['r'];
    $arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>5,'q'=>66,'r'=>77,'s'=>88);


    switch($ch)
    {
        case 1:
            sort($arr1);
            echo "Array in Ascending order<br>";
            print_r($arr1);
            rsort($arr1);
            echo "<br>Array in Descending order<br>";
            print_r($arr1);
        break;
        
        case 2: 
            asort($arr1);
            echo "Array in Ascending order<br>";
            print_r($arr1);
            arsort($arr1);
            echo "<br>Array in Descending order<br>";
            print_r($arr1);
            break;

        case 3:
            $m = array_merge($arr1,$arr2);
            $u = array_unique($m);
            print_r($u);
            break;
        
        case 4:
            $f = array_filter($arr1);
            print_r($f);
            break;


    }
?>