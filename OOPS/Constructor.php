<?php

class EmployeeConstructorCheck
{
    public $EmpName;
    public $EmpAddress;
    public $EmpDesignation;
    public $EmpRole;

    public function __construct($EmpName, $EmpAddress, $EmpDesignation, $EmpRole)
    {
        $this->EmpName = $EmpName;
        $this->EmpAddress = $EmpAddress;
        $this->EmpDesignation = $EmpDesignation;
        $this->EmpRole = $EmpRole;
    }

    public function GetConstructorValue(){
    return $this->EmpName.'<br> '. $this->EmpAddress.'<br>  '. $this->EmpDesignation.'<br> '. $this->EmpRole;
    }
}

$Obj= new EmployeeConstructorCheck("Anshul Mishra","Chitrakoot Dham karwi","NO Designation","No roll Found");
echo $Obj->GetConstructorValue();