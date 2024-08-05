<?php
class ParentClass
{
    public $bankName;
    public $bankAddress;
    public $bankCode;
    const MAIN_MESSAGE='hELLO THIS IS THE ANSHUL MISHRA FROM CHITRAKOOT <br/>';
    public function __construct()
    {
      
        echo "Calling the constructor <br/>";
   
    }
    public function AddBank($bankName, $bankAddress, $bankCode)
    {
        $this->bankName = $bankName;
        $this->bankAddress = $bankAddress;
        $this->bankCode = $bankCode;
    }
    public function __destruct(){
        echo "calling the desctructor";
    }
}
class Chield extends ParentClass
{
    public function GetBankDetails(){
        echo $this->bankName.'<br/>';
        echo $this->bankAddress.'<br/>';
        echo $this->bankCode.'<br/>';
    }
}

$obj = new Chield();
echo Chield::MAIN_MESSAGE;

echo $obj::MAIN_MESSAGE;
$obj->AddBank("BOB","Near Me",6543222);
$obj->GetBankDetails();
echo "<br/>";
$obj->AddBank("HDFC","ANOTHER LOCATION",6543222);
$obj->GetBankDetails();

