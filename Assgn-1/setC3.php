<html>
    <body>
        <form action="setC3.php" method="post">
                Enter the Number : <br>
                <input type="text" name="n">
                <input type="submit" value="Check">
        </form>
    </body>
</html>

<?php
$n = $_POST['n'];

$r = $n>30
?"greater then 10 20 and 30.."
:($n>20
?"greater then 10 and 20.."
:($n>10
?"greater then 10"
:"Entered number is not greater the 10 20 and 30"));

echo"$n : $r";
?>
