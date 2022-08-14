<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>

<form action="setA2.php" method="post">
    Enter the string : <br><input type="text" name="str1">
    <input type="submit" name="submit" value="Reverse">
</form>

</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $str = $_POST['str1'];
        $str2 = strrev($str);
        echo "<br>$str2";     
    }
?>