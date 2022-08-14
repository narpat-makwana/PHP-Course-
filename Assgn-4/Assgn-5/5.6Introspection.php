<?php
    
class Rectangle
{
    public $l;
    public $b;

    function __construct($l,$b)
    {
        $this -> length = $l;
        $this -> breadth =$b;

    }
   
    function display()
    {
        echo "\n The area of rectange : " . $this -> length * $this -> breadth;;
    }
}
class Square extends Rectangle
{
    function disp()
    {
        echo "\n The area of square : " . $this -> length * $this -> breadth; 
    }
}

$r = new Square(15.2,12.6);
$r -> display();
echo"<br>";
$r -> disp(); 

if(class_exists("Square"))                  # 1.class_exist() => Takes class name and                        
{                                           #check whether it exists or not.    
    echo "<br> Class available";
}
else {
    echo "<br> Class not available";
}
echo "<br>";

echo get_class($r);                         # 2.get_class() => takes ojb and return class name.
echo "<br>";

echo get_parent_class("Square");            # 3.get_parent_class() => It takes derived class name
echo "<br>";

print_r( get_class_methods("Rectangle"));   # 4.get_class_methods() => It takes class name and
echo "<br>";                                # display all methods(functions) in the form of array 

print_r( get_class_vars ("Rectangle"));      # 4.get_class_vars() => It takes class name and
echo "<br>";                                 # display all variables in the form of array 



?>