<!DOCTYPE html>
<html lang="en">
<body>
    <form action="2_reverseStr.php" method="post">
    Enter the string : <br>   <input type="text" name="str1" >
    <input type="submit" name="submit" value="Reverse">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $str = $_POST['str1'];
        $str2 = strrev($str);
        echo "<br> $str2";
    }
?>
<!-- if(isset($_POST['submit']))
{
    $str = $_POST['str1'];
    $str1 = strrev($str);
    echo "$str2";
} -->