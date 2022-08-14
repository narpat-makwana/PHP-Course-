<html>
    <body>
        <form action="3_palindrome.php" method="post">
            Enter the the string : <br>
            <input type = "text" name = "pal">
            <input type="submit" name = "submit" value="Check">
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $str = $_POST['pal'];
    $str1 = strrev($str);
    if($str == $str1)
    {
        echo"\n String is palindrome.";
    }
    else{
        echo"\n String is not an palindrome..";
    }
}
?>