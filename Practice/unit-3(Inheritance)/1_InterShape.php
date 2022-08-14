<!-- Write a PHP program to define Interface shape which has two method as area()
and volume (). Define a constant PI. Create a class Cylinder implement this
interface and calculate area and Volume. -->

<html>

<body>
    <pre>
            <form method="POST" action="1_InterShape.php" >
                Enter the Radius : <input type="text" name="r"> <br>
                Enter the Height : <input type="text" name="h">
                <input type="submit" name="show" value="submit">  <input type="reset" value="Cancel">
            
            </form>
    </pre>
</body>
</html>

<?php
$r = $_POST['r'];
$h = $_POST['h'];
define('PI',3.14);

interface Shape{
    function area($r,$h);
    function vol($r,$h);
}
class Cylinder implements Shape{
    function area($r,$h)
    {
        $area = 2 * PI * $r * ($r + $h);
        echo "Area of Cylinder : ".$area;
    }
    function vol($r,$h)
    {
        $vol = PI * $r * $r * $h;
        echo "Volume of Cylinder : ".$vol;
    }
}

$c = new Cylinder;
$c -> area($r,$h);
echo '<br>';
$c -> vol($r,$h);
?>
