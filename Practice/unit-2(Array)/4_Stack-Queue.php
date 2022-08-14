<!-- Write a menu driven program to perform the following stack & Queue related operations.
a) Insert an element in stack.
b) Delete an element from stack.[Hint: array_push(), array_pop()]
c) Insert an element in queue
d) Delete an element from queue
e) Display the contents of queue -->

<html>

<body>
    <form action="4_Stack-Queue.php" method="POST">
        <pre>
                Which operations U want to perform:<br>
                Stack Operations:<br>
                <input type="radio" name="s" value="1"> Insert element in the Stack. <br>
                <input type="radio" name="s" value="2"> Delete element from the Stack. <br>
                <input type="radio" name="s" value="3"> Display content of Stack <br><br>
                <input type="submit" value="Perform">     <input type="reset" value="Cancel">
                <br><br>
                Queue Operations:
                <input type="radio" name="s" value="4"> Insert an element in Queue. <br>
                <input type="radio" name="s" value="5"> Delete an element from Queue. <br>
                <input type="radio" name="s" value="6"> Display an element of Queue. <br>
                <input type="submit" value="Perform">  <input type="reset" value="Cancel">
                <br><br>
            </pre>
    </form>
</body>

<?php
$ch = $_POST['s'];
$arr = array(11,22,33,44,55,66,77,88,99);

switch($ch)
{
    case 1:
        array_push($arr,110);
        print_r($arr);
        echo"<br>Element inserted successfully...";
        break;
    case 2:
        $p = array_pop($arr);
        print_r($arr);
        echo"<br>$p deleted successfully...";
        break;
    case 3:
        print_r($arr);
        break;
    case 4:
        array_unshift($arr,110);
        print_r($arr);
        echo"<br>Element inserted successfully...";
        break;
    case 5:
        $p = array_shift($arr);
        print_r($arr);
        echo"<br>$p deleted successfully...";
        break;
    case 6:
        print_r($arr);
        break;
    
        
}
?>