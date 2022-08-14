<?php
define('PI','3.14');
interface Shape{
    function area($r,$h);
    function vol($r,$h);
}

class Cylinder implements Shape{
    function area($r,$h)
    {
        $area = 2*PI*$r*(2*PI*$r*$r);
        echo "\n The Area of Cylinder is: ". $area;
    }
    function vol($r,$h)
    {
        $volume = PI*$r*$r*$h;
        echo "\n The Volume of Cylinder is: ". $volume;
    }
}

$a = new Cylinder;
$a -> area(12,24);
echo "<br>";
$a -> vol(11,22);
?>