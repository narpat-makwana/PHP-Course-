<?php
    $arr  = array("Ram","Narpat","Rohan","Vishal");
    $serial = serialize($arr);
    echo $serial;
    echo"<br>";
    print_r($serial);
    echo"<br>";
    print_r( unserialize($serial));
  


?>    