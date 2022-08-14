<!-- 3. Sort the different arrays at a glance using single function. -->
<?php
    $arr=array('a'=>1,'b'=>5,'c'=>9,'d'=>4,'e'=>2,'f'=>8,'g'=>7,'h'=>6);
    $arr1=array('l'=>101,'m'=>21,'n'=>03,'o'=>44,'p'=>5,'q'=>665,'r'=>7,'s'=>18);
    $arr2=array('a'=>101,'b'=>120,'c'=>350,'d'=>240,'e'=>501,'f'=>560,'g'=>70,'h'=>80);

    array_multisort($arr2,$arr1);
   
    print_r($arr);
    echo"<br>";
    print_r($arr1);
    echo"<br>";
    print_r($arr2);
    echo"<br>";

?>
