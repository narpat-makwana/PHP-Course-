<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color)
    {
      $this -> name = $name;  
      $this -> color = $color;  
    }

    function getname()
    {
        return $this -> name;
    }

    function getcolor()
    {
        return $this -> color;
    }

}
$obj = new Fruit('Mango','Yellow');

echo "Fruit Name is " . $obj -> getname();
echo"<br>";
echo "Fruit Color is " . $obj -> getcolor();



?>