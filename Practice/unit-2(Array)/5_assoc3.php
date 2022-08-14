<!-- Write a menu driven program to perform the following operations on associative
arrays:
a) Merge the given arrays.
b) Find the intersection of two arrays.
c) Find the union of two arrays.
d) Find set difference of two arrays. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Operations-3</title>
</head>
<body>
    <form action="5_assoc3.php" method="post">
    Select the operation to perform : <br>
    <input type="radio" name="r" value="1">Merge the given arrays. <br>
    <input type="radio" name="r" value="2">Find the intersection of two arrays. <br>
    <input type="radio" name="r" value="3">Find the union of two arrays. <br>
    <input type="radio" name="r" value="4">Find set difference of two arrays. <br>
    <br>
    <input type="submit" value="submit"> &nbsp; <input type="reset" value="Cancel"><br>
    </form>
</body>
</html>

<?php
    $ch = $_POST['r'];
    $arr1=array('a'=>100,'b'=>22);
    $arr2=array('l'=>11,'m'=>22,'n'=>33,'o'=>44);

    switch($ch)
    {
        case 1:
            $m = array_merge($arr1,$arr2);
            print_r($m);
            break;
        
        case 2: 
            $i = array_intersect($arr1,$arr2);
            print_r($i);
            break;

        case 3:
            $m = array_merge($arr1,$arr2);
            $u = array_unique($m);
            print_r($u);
            break;
        
        case 4:
            $d = array_diff($arr1,$arr2);
            print_r($d);
            break;


    }
?>