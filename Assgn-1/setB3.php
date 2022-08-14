<?php
$n = 14;
$cnt = 0;
$temp = $n;

for ($i = 2; $i < $n; $i++) 
{
    if($n % $i == 0)
    {
        $cnt++;
        break;
    }
}
    if ($cnt == 0)
    {
        echo"$temp is a prime number..";
    }
    else
    {
        echo"$temp is not a prime number..";
    }

?>