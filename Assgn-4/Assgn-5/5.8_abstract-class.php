<?php
abstract class Sport{
    
    public $player;
    abstract protected function score($s);
}

class Cricket extends Sport{
    public function score($s)
    {
        $this -> s = $s;
        echo "\n The score is: {$this -> s}";
    }
}

$c = new Cricket;
$c -> score(275);

?>