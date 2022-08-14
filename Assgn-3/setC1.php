<html>
<body>
    <form action="setC1.php" method="post">
        <pre>
            Select the operation to perform on Array :<br>
            <input type="radio" name="s" value="1"> Merge the given arrays. <br>
            <input type="radio" name="s" value="2"> Find the intersection of two arrays. <br>
            <input type="radio" name="s" value="3"> Find the union of two arrays <br>
            <input type="radio" name="s" value="4"> Find set difference of two arrays. <br>
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
        print_r(array_merge($arr1, $arr2));
        break;
    case 2:
        print_r(array_intersect($arr1, $arr2));
        break;
    case 3:
        $union = (array_merge($arr1, $arr2));
        print_r(array_unique($union));
        break;
    case 4:
        print_r(array_diff($arr1, $arr2));
        break;


}


?>
