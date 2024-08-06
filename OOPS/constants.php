<?php 
class MainClass{
    const a="This is the constant class whitch is acccessed from outside the class <br/>";

public function useSelf(){
    echo self::a;
}
}
echo MainClass::a;
$obj =new MainClass();
$obj->useSelf();
?>