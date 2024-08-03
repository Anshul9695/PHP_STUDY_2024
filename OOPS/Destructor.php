<?php 
class EmpCheckDestructor{
    public $name;
    public $age;
    public $anotherValue;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function __destruct() // this will call when work is done of the OBJ
    {
        echo "<br>calling the disctructor {$this->name}";
    }

    public function GetTheValue(){
        return $this->name.'<br>'.$this->age.'<br>'.$this->anotherValue;
    }

    
    public function setAnotherValue($anotherValue){
       $this->anotherValue=$anotherValue;
    }

}


$obj=new EmpCheckDestructor('Anshul',20);

$obj->setAnotherValue('This is the Another Value here');
echo $obj->GetTheValue();
?>