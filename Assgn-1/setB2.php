<?php
$n = 154;
$rem;
$sum = 0;
$temp = $n;

while($n!=0)
{
    $rem = $n % 10;
    $sum = $sum + $rem * $rem * $rem;
    $n = $n / 10;
}
if($sum == $temp)
{
    echo"$temp is amstrong number...";
}
else
{
    echo"$temp is not an amstrong number..";
}
?>