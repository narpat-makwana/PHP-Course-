<?php

class Student
{
    public $name;
    public $marks;

    function __construct($name, $marks)
    {
        $this->name = $name;
        $this->marks = $marks;
    }
    public function display()
    {
        echo "\nThe name is {$this->name} and marks is {$this->marks}\n";
    }
}

class Result extends Student
{
    public function res()
    {
        if ($this->marks >= 200) {
            echo "Result is pass";
        } else {
            echo "Result is Fail";
        }
    }
}

$obj1 = new Result("Rohan", 345);
$obj2 = new Result("Vishal", 198);
$obj1->display();
$obj1->res();
echo "<br>";
$obj2->display();
$obj2->res();
?>