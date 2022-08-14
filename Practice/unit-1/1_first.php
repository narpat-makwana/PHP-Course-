<!-- Write a PHP script to accept the number from user and Write a php function to
calculate the factorial of a number (a non-negative integer). The function accepts
the number as an argument. -->
 
<?php
function factorial($n)
{
    if($n == 0)
    {
        return 1;
    }
    else{
        return $n * factorial($n-1);
    }
}
print_r(factorial(5)."\n");
?> 

<!-- <?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,3));
?> -->