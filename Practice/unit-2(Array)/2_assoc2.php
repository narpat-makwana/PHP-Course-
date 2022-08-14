<!-- Write a menu driven program the following operation on an associative array
a) Reverse the order of each element’s key-value pair. [Hint: array_flip()]
b) Traverse the element in an array in random order. [Hint: shuffle()] -->
<html>
    <head>
        <title>Array Operations:</title>
    </head>
    <body>
        <form action = "2_assoc2.php" method = "POST">
            Which opertions U want to perform : <br>
            <input type = "radio" name = "c" value = "1">
            Reverse the order of each element’s key-value pair. <br>
            <input type = "radio" name = "c" value = "2">
            Traverse the element in an array in random order. <br>

            <input type = "submit" name = "submit" value = "Check">
            <input type = "reset" value = "Clear">

        </form>
    </body>
</html>

<?php
$ch = $_POST['c'];
$arr = array('zero'=>'0','one'=>'1','two'=>'2','three'=>'3','four'=>'4','5'=>'five');

switch($ch)
{
    case 1: 
        array_flip($arr);
        print_r($arr);
        break;

    case 2:
        shuffle($arr);
        print_r($arr);
        break;
}
?>