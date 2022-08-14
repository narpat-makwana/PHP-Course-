<!-- Write a PHP script for the following: Design a form to accept two strings.
Compare the two strings using both methods (= = operator & strcmp function).
Append second string to the first string. Accept the position from the user; from
where the characters from the first string are reversed. -->
<html>
    <body>
        <form action="7_strings.php" method="post">
            Enter the string 1 : <input type="text" name="str1"><br>
            Enter the string 2 : <input type="text" name="str2"><br>
            <input type="radio" name="r" value="1">Compare String : <br>
            <input type="radio" name="r" value="2">Compare String using strcmp(): <br>
            <input type="radio" name="r" value="3">Apend the 2nd string to 1st string : <br>
            <input type="submit" value="Submit"> <input type="reset" value="Clear">
        </form>
    </body>
</html>
<?php
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$ch = $_POST['r'];

switch($ch)
{
    case 1:
        if($str1 == $str2)
        {
            echo "Both strings are equal...";
        }
        else{
            echo"Strings are not equal...";
        }
        break;
    case 2:
        if(strcmp($str1,$str2) == 0)
        {
            echo "Both strings are equal...";
        }
        else{
            echo"Strings are not equal...";
        }
        break;
    case 3:
        echo"Strings after Append : ";
        echo "$str1 " . " $str2";
        break;
}
?>