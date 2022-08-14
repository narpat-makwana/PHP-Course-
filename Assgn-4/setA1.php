<html>

<body>
    <pre>
            <form method="POST" action="setA1.php" >
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
define('PI', '3.14');

interface shape
{
    function area($r, $h);
    function vol($r, $h);
}
class Cylinder implements shape
{
    function area($r, $h)
    {
        $area = 2 * PI * $r * ($r + $h);
        echo "Area of cylinder is :" . $area;
    }
    function vol($r, $h)
    {
        $vol = PI * $r * $r * $h;
        echo "Volume of cylinder is :" . $vol;
    }
}

$c = new Cylinder;
$c->area($r, $h);
echo "<br>";
$c->vol($r, $h);

?>