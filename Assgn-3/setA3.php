<?php

$arr = array(10,12,52,65,87,45,96);
echo "Original Array is: <br>";
for($i=0; $i<=sizeof($arr); $i++)
{
    echo $arr[$i] . " "; 
}
echo"<br><br>";
$arr1 = array_reverse($arr);

echo "Array after Reversed: <br>";


for($i=0; $i<=sizeof($arr); $i++)
{
    echo $arr1[$i] . " "; 
}

?>