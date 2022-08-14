<?php

$all_lines = file("https://www.google.com");

foreach($all_lines as $line_num => $line)
{
    echo htmlspecialchars($line)."\n";
}

?>
