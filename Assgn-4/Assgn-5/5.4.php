<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color)
    {
      $this -> name = $name;  
      $this -> color = $color;  
    }

   function __destruct()
   {
    echo"Fruit name is {$this->name} and Fruit color is {$this->color}";
   }

}
$obj = new Fruit('Mango','Yellow');

?>