<!-- // Write class declarations and member function definitions for Teacher (code,
// name, qualification). Derive teach_account(account_no,joining_date) from
// Teacher and teach_sal(basic_pay, earnings, deduction) fromteach_account.Write
// a menu driven program
// a) To build a master table
// b) To sort all entries
// c) To search an entry
// d) Display salary of all teachers. -->

<html>

<head>
</head>

<body>

    <form action="3_teacher.php" method="POST">
        <h4>Select following Options</h4><br>
        <input type="radio" name="r1" value="1"> Master table<br>
        <input type="radio" name="r1" value="2"> Sorting By Emp_Code <br>
        <input type="radio" name="r1" value="3"> Search By Name : <input type="text" name="nm"><br>
        <input type="radio" name="r1" value="4"> Display Salary <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
</body>

</html>

<?php

class Teacher
{
    public $code, $name, $qual;
    function __construct($c, $n, $q)
    {
        $this->code = $c;
        $this->name = $n;
        $this->qual = $q;
    }
    public function display_teach()
    {
        echo "<br>Code : $this->code <br>" . "Name : $this->name <br>" . "Qualification : $this->qual <br><br>";
    }
    public function getName()
    {
        return $this->name;
    }
}

class Teach_account extends Teacher
{
    public $ac_no, $join_date;
    function __construct($an, $d, $c, $n, $q)
    {
        parent::__construct($c, $n, $q);
        $this->ac_no = $an;
        $this->join_date = $d;
    }
    public function display_ta()
    {
        echo "Account No : $this->ac_no <br>" . "Join Date : $this->join_date <br><br>";
    }
}

class Teac_sal extends Teach_account
{
    public $basic_pay, $earnings, $deduction;
    function __construct($p, $e, $de, $an, $d, $c, $n, $q)
    {
        parent::__construct($an, $d, $c, $n, $q);
        $this->basic_pay = $p;
        $this->earnings = $e;
        $this->deduction = $de;
    }
    public function display_ts()
    {
        echo "Basic pay : $this->basic_pay <br>" . "Earnings : $this->earnings <br>" . "Deduction : $this->deduction <br><br>";
    }
}

$ts[0] = new Teac_sal(15000, 20000, 1500, 10001, "02/02/2009", 104, "Archana", "Msc");
$ts[1] = new Teac_sal(30000, 2000, 1400, 10002, "09/02/2020", 102, "Kajal", "MA");
$ts[2] = new Teac_sal(10000, 15000, 1000, 10003, "12/04/2012", 106, "Prasant", "MCA");

$ch = $_POST['r1'];
$nm = $_POST['nm'];
$flag = 0;

switch ($ch) {
    case 1:
        for ($i = 0; $i < 3; $i++) {
            $ts[$i]->display_teach();
            $ts[$i]->display_ta();
            $ts[$i]->display_ts();
        }
        break;

    case 2:
        echo "Sorted details <br>";
        function srt($a, $b)
        {
            return strcmp($a->code, $b->code);
        }
        for ($i = 0; $i < 3; $i++) {
            $ts[$i]->display_teach();
            $ts[$i]->display_ta();
            $ts[$i]->display_ts();
        }
        usort($ts,"srt");
        break;

    case 3:
        for($i=0;$i<5; $i++){
            $t=$ts[$i]->getName();
            if($t==$nm){
                $flag=1;
                break;
            }
        }
        if($flag==0){
            echo "<em>Name Not Found</em>";
                  
        }else{
            echo "<em>Name Found</em>";
        }

        break;

    case 4:echo "Display Salary <br>";
        for($i=0; $i<3; $i++)
        {
            $ts[$i]->display_ts();
        }    
        break;
}
?>