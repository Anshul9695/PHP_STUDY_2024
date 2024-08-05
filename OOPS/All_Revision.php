<?php

function getNumber($number){
if($number<=10){
    echo $number.'<br/>';
    getNumber($number+1);
}
}

getNumber(1);
die;
class ClassObjAndConDesRevision
{
    public $name;
    public $email;

    private $EmpId;
    private $EmpName;
    public function __construct($name, $email)
    {
        echo "Calling the Constructor here<br/>";
       echo  $this->name = $name.'<br/>';
      echo   $this->email = $email.'<br/>';
    }
public function SetTheEmployee($EmpId,$EmpName){
    $this->EmpId=$EmpId;
    $this->EmpName=$EmpName;
}
public function GetTheEmp(){
    echo $this->name.'<br/>';
    echo $this->email.'<br/>';
    echo $this->EmpId.'<br/>';
    echo $this->EmpName.'<br/>';
    
}

    public function __destruct()
    {
        echo "calling the Destructor here..";
    }
}
$obj=new ClassObjAndConDesRevision('Constructor name','conEmail@gmail.com');
