<?php 
class CompanyEmployee{
    public $name;
    public $email;
    public $age;
    public $department;

    public function AddEmployee($name,$email,$age,$department){
$this->name=$name;
$this->email=$email;
$this->age=$age;
$this->department=$department;

    }
    public function ShowEmployee(){
return $this->name.' '.$this->email.' '.$this->age.' '.$this->department;
    }
}

$EmpObj=new CompanyEmployee();
$EmpObj->AddEmployee('Anshul','anshul@gmail.com',25,'COP');
echo $EmpObj->ShowEmployee();



?>