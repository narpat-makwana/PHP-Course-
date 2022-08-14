<!-- Write a PHP script for the following: a) Design a form to accept two numbers from the users. 
b) Give option to choose an arithmetic operation (use Radio
Button). c) Display the result on next form. d) Use concept of default parameter. -->
<html>
    <body>
        <form action="6_arithmetic.php" method="POST">
        Enter any First Numbers : 
        <input type="text" name = "a"> <br>
        Enter any Second Numbers : 
        <input type="text" name = "b"> <br>

        <input type="radio" name="rad" value="1">Addition <br>
        <input type="radio" name="rad" value="2">Subtraction <br>
        <input type="radio" name="rad" value="3">Multiplication <br>
        <input type="radio" name="rad" value="4">Division <br>
       <input type="submit" value="Perform"> <input type="reset" value="Clear"> 
        </form>
    </body>
</html>

<?php
$n1 = $_POST['a'];
$n2 = $_POST['b'];
$ch = $_POST['rad'];

switch($ch)
{
    case 1: 
    $r = $n1 + $n2;
    echo"Addition : ".$r;
    break;

    case 2: 
    $r = $n1 - $n2;
    echo"Subtraction : ".$r;
    break;

    case 3:
    $r = $n1 * $n2;
    echo"Multiplication : ".$r;
    break;

    case 4: 
    $r = $n1 / $n2;
    echo"Division : ".$r;
    break;
}


?>