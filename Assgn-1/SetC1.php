<?php
$n = 4;
$a = 1;
for ($i = 1; $i <= $n; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "$a ";
        $a++;
    }
    echo "<br>";
}
