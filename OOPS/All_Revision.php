<?php

interface Interface1
{
    function interfacefun1();
}
interface Interface2
{
    function interfacefun2();
}
interface Interface3
{
    function interfacefun3();
}

Class Interfacemain implements Interface1,Interface2,Interface3{
    public function interfacefun1(){
echo "hello Calling the Interface 1 <br/>";
    }
    public function interfacefun2(){
        echo "hello Calling the Interface 2 <br/>";
    }
    public function interfacefun3(){
        echo "hello Calling the Interface 3 <br/>";
    }
}
$obj =new Interfacemain();
$obj->interfacefun1();
$obj->interfacefun2();
$obj->interfacefun3();
die;
class InheritanceRevision{
    public $friendName;
    public $frindHabbit;
    public function parentFunctionSet($friendName, $frindHabbit)
    {
        $this->friendName = $friendName;
        $this->frindHabbit = $frindHabbit;
    }
}
class ChieldCalss extends InheritanceRevision
{
    public function GetparentValue()
    {
        echo $this->friendName . '<br/>';
        echo $this->frindHabbit;
    }
}
$obj = new ChieldCalss();
$obj->parentFunctionSet("Harami Dost", "Gandi Habbit");
$obj->GetparentValue();


function getNumber($number)
{
    if ($number <= 10) {
        echo $number . '<br/>';
        getNumber($number + 1);
    }
}

getNumber(1);
// die;
class ClassObjAndConDesRevision
{
    public $name;
    public $email;

    private $EmpId;
    private $EmpName;
    public function __construct($name, $email)
    {
        echo "Calling the Constructor here<br/>";
        echo  $this->name = $name . '<br/>';
        echo   $this->email = $email . '<br/>';
    }
    public function SetTheEmployee($EmpId, $EmpName)
    {
        $this->EmpId = $EmpId;
        $this->EmpName = $EmpName;
    }
    public function GetTheEmp()
    {
        echo $this->name . '<br/>';
        echo $this->email . '<br/>';
        echo $this->EmpId . '<br/>';
        echo $this->EmpName . '<br/>';
    }

    public function __destruct()
    {
        echo "calling the Destructor here..";
    }
}
$obj = new ClassObjAndConDesRevision('Constructor name', 'conEmail@gmail.com');
