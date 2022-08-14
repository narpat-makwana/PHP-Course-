<!-- Design a HTML form to accept a string. Write a PHP script for the following. a)
Write a function to count the total number of Vowels from the script. b) Show the
occurrences of each Vowel from the script. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vowel</title>
</head>
<body>
    <form action="5_vowel.php" method="POST">
    Enter the String : <input type="text" name = "str"><br>
    Count the total number of Vowels from the script. <br>
    Show the occurrences of each Vowel from the script : <br>
    <input type="submit" name ="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $string = $_POST['str'];
        $cnt = 0;
        $vowels = array('a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0);

        for($i = 0;$i < strlen($string); $i++)
        {
            if(strtolower($string[$i]) == 'a')
            {
                ++$cnt;
                ++$vowels['a'];
            }
            if(strtolower($string[$i]) == 'e')
            {
                ++$cnt;
                ++$vowels['e'];
            }
            if(strtolower($string[$i]) == 'i')
            {
                ++$cnt;
                ++$vowels['i'];
            }
            if(strtolower($string[$i]) == 'o')
            {
                ++$cnt;
                ++$vowels['o'];
            }
            if(strtolower($string[$i]) == 'u')
            {
                ++$cnt;
                ++$vowels['u'];
            }
        }
        echo "Total number of Vowels from the script : ". $cnt;
        echo"<br>";
        echo "Occurrence of 'a' : ".$vowels['a']; echo"<br>";
        echo "Occurrence of 'e' : ".$vowels['e']; echo"<br>";
        echo "Occurrence of 'i' : ".$vowels['i']; echo"<br>";
        echo "Occurrence of 'o' : ".$vowels['o']; echo"<br>";
        echo "Occurrence of 'u' : ".$vowels['u']; echo"<br>";

    }
?>