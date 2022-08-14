<!-- Declare a Multidimensional Array. Display specific element from a
Multidimensional array. Also delete given element from the Multidimensional
array.(After each operation display array content. -->

<?php

$stud = array('0'=>array('name'=>'Rohan','age'=>'18','addr'=>'Lohegoan'),
              '1'=>array('name'=>'Vishal','age'=>'19','addr'=>'Wakad'),
              '2'=>array('name'=>'Narpat','age'=>'20','addr'=>'Katraj'),
              '3'=>array('name'=>'Ram','age'=>'21','addr'=>'Dhanori'));
    print_r($stud);
    echo"<br><br>";

    // Displaying specific element from array
    echo $stud[1]['name'] . "<br>";
    echo $stud[2]['age'];

    echo"<br><br>";
    //Deleting elements from an array
    unset($stud[3]['addr']);
    print_r($stud);
?>              
