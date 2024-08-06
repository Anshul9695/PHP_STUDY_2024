<?php 
abstract class ClassA{

abstract public function SumFunDefined($a,$b);
}

class ChieldClass extends ClassA{
    public function SumFunDefined($a,$b){
      $c=$a+$b;
     echo "Some of the Value=".$c;
    }
}

$obj =new ChieldClass();
$obj->SumFunDefined(10,40);
?>