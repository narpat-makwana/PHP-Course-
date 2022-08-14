<html>
<body>
    <form action="setC2.php" method="post">
        <pre>
            Select the operation to perform on Array :<br>
            <input type="radio" name="s" value="1"> Sort the array by values in ascending, descending order. <br>
            <input type="radio" name="s" value="2"> Sort the array by values without changing the keys. <br>
            <input type="radio" name="s" value="3"> Filter the odd elements from an array. <br>
            <input type="submit" value="Perform">     <input type="reset" value="Cancel">
         </pre>
    </form>
</body>
</html>

<?php
 $arr1=array('a'=>1,'b'=>22,'c'=>3,'d'=>44,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
 $arr2=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>5,'q'=>66,'r'=>77,'s'=>88);

$ch = $_POST['s'];

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
        print_r(array_filter($arr1));
}
?>
