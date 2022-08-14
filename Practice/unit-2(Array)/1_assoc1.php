<!-- 1. Write a menu driven program to perform the following operations on an
associative array:
a) Display the elements of an array along with the keys.
b) Display the size of an array -->

<html>
    <body>
        <form action="1_assoc.php" method="post">
            Which operation U want to perform: <br>
           <input type="radio" name="c" value="1"> Display the elements of an array along with the keys. <br>
           <input type="radio" name="c" value="2"> Display the size of an array. <br>
           <input type="submit" value="submit"> <input type="reset" value="Clear">
        </form>
    </body>
</html>
<?php
$ch = $_POST['c'];
$arr = array('zero'=>0,'one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);

switch($ch)
{
    case 1:
        foreach($arr as $key => $value)
        {
            echo"Key : $key  Value : $value"."<br>";
        }
        break;
    case 2:
        echo sizeof($arr);
        break;
}
?>