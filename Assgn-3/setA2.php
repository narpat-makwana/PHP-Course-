<html>
    <body>
        <form action="setA2.php" method="post">
            <pre>
                Which operations U want to perform on Array : <br>
                <input type="radio" name="a" value="1"> a) Reverse the order of each element key-value pair. <br>
                <input type="radio" name="a" value="2"> b) Traverse the element in an array in random order. <br>

                <input type="submit" value="OK" name="submit">    <input type="reset" value="Cancel">
            </pre>
        </form>
    </body>
</html>

<?php

$array = array('zero'=>'0','one'=>'1','two'=>'2','three'=>'3','four'=>'4','five'=>'5');
$ch = $_POST['a'];
switch($ch)
{
    case 1:
        print_r(array_flip($array));
        break;

    case 2:
        shuffle($array);
        print_r($array);
        break;
}

?>