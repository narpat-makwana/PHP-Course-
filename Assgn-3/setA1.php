<html>
    <body>
        <form action="setA1.php" method="POST">
          <pre>
            Which operations you want to perform: <br>
            <input type="radio" name="a" value="1">  Display elements of array along with keys. <br>
            <input type="radio" name="a" value="2">  Display the size of an array. <br>
            <input type="submit" value="OK" name="submit">     <input type="reset" value="Clear"><br>
          </pre>
        </form>
    </body>
</html>

<?php
    $array = array('zero'=>'0','one'=>'1','two'=>'2','three'=>'3','four'=>'4','five'=>'5');
    $ch = $_POST['a'];
    switch($ch)
    {
        case 1:
            foreach($array as $key => $value)
            {
                echo "key : $key  value : $value". "<br>";
            }break;

        case 2:
            echo sizeof($array);
            break;
    }


?>