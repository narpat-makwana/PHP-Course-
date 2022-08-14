<?php

class Book{
    public $title;
    public $price;

    function set_title($title)
    {
        $this -> title = $title;
    }
    function get_title()
    {
        return $this -> title;
    }
    function setprice($price)
    {
        $this -> price = $price;
    }
    function getprice()
    {
        return $this -> price;
    }

}

$cpp = new Book;
$se = new Book;

$cpp -> set_title('C++ Programming');
$se -> set_title('Software Enginearing');
$cpp -> setprice(299);
$se -> setprice(399);

echo "The Title of Cpp is " . $cpp -> get_title();
echo"<br>";
echo "Price of Cpp is " .$cpp -> getprice();
echo"<br>";
echo "The Title of SE is " . $se -> get_title();
echo"<br>";
echo "Price of SE is " .$se -> getprice();
echo"<br>";
?>