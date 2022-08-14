<!DOCTYPE html>
<html>
<head>
    <title>Palindrome</title>
</head>
<body>
    <form action="setA3.php" method="post">

        Enter the string to check :<br><input type="text" name="str1" >
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $str = $_POST['str1'];
        $str2 = strrev($str);
        if($str == $str2)
        {
            echo "<br>Entered string is a Palindrome...";
        }
        else{
            echo "<br>Entered string is not a palindrome!!...";
        }
    }

?>