<!-- Declare a Multidimensional Array. Display specific element from a
Multidimensional array. Also delete given element from the Multidimensional
array.(After each operation display array content. -->
<?php
$stud = array('1'=>array('Name'=>'Narpat','Age'=>22,'Addr'=>'Pune'),
              '2'=>array('Name'=>'Rohan','Age'=>23,'Addr'=>'Lohgaon'),
              '3'=>array('Name'=>'Vishal','Age'=>21,'Addr'=>'Yerawada'),
              '4'=>array('Name'=>'Yash','Age'=>20,'Addr'=>'Kalwad'));

print_r($stud);
echo"<br><br>";

//Displaying specific elements:
echo $stud[2]['Age'];
echo $stud[3]['Name'];
echo"<br><br>";

//Deleting an element:
unset($stud[4]['Addr']);
print_r($stud);

?>