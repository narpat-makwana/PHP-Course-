<?php

class Fruit{
    public $name;
    public $color;

    function setname($name)
    {
        $this -> name = $name;
    }
    function getname()
    {
        return $this -> name;
    }
    function setcolor($color)
    {
        $this -> color = $color;
    }
    function getcolor()
    {
        return $this -> color;
    }

}
$obj = new Fruit;
$obj -> setname('Apple');
$obj -> setcolor('Red');

echo "Fruit Name is " . $obj -> getname();
echo"<br>";
echo "Fruit Color is " . $obj -> getcolor();



?>