<html>

<body>
    <form action="setB2.php" method="post">
        <pre>
                Which operations U want to perform on Queue:<br>
                <input type="radio" name="s" value="1"> Insert element in the Queue. <br>
                <input type="radio" name="s" value="2"> Delete element from the Queue. <br>
                <input type="radio" name="s" value="3"> Display content of Queue <br><br>
                <input type="submit" value="Perform">     <input type="reset" value="Cancel">
                
            </pre>
    </form>
</body>

</html>

<?php

    $ch = $_POST['s'];
    $arr = array(11,22,33,44,55,66,77,88,99);
    switch($ch)
    {
        case 1: 
            array_unshift($arr,120);
            print_r($arr);
            echo "<br><br>Element inserted in Queue successfully";
            break;
        case 2:
            $p = array_shift($arr);
            print_r($arr);
            echo "<br><br>$p Deleted from Queue successfully";
            break;
        case 3:
            print_r($arr);
            break;

    }

?>