<html>
<body>
<form method="post" action="setB1.php">
Enter Number<input type="text" name="no" value=""/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
    $number=$_POST['no'];
    $str = '';
    $arr=array('0'=>'zero','1'=>'one','2'=>'two','3'=>'three','4'=>'four','5'=>'five');
    $num=str_split($number);

    foreach($num as $k=>$v)
    {   
        if(array_key_exists($v,$arr))
        {
            $str=$arr[$v]."";
        }
    }
        echo "entered no is=" . $number;
        echo "<br>".$str;
}
?>          