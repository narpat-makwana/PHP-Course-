<?php

$arr=array('a'=>1,'b'=>2,'c'=>4,'d'=>3,'e'=>5,'f'=>8,'g'=>7,'h'=>6);
$arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>55,'q'=>66,'r'=>77,'s'=>88);
$arr2=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,'e'=>50,'f'=>60,'g'=>70,'h'=>80);

array_multisort($arr,$arr1,$arr2);
print_r($arr);
echo"<br>";
print_r($arr1);
echo"<br>";
print_r($arr2);
?>
