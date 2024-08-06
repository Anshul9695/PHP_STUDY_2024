<?php 

interface Class1{
    function fun1($var1,$var2);
}
interface Class2{
  function fun2($varclass2,$varclass3);
}
interface Class3{
function fun3($varfunclass3);

}

class DerivedClass implements Class1,Class2,Class3{
public function fun1($var1, $var2)
{
    $a=$var1+$var2;
    echo "Sum=".$a.'<br/>';
}
public function fun2($varclass2, $varclass3)
{
    $b=$varclass2-$varclass3;
    echo "Sub==".$b.'<br/>';
}
public function fun3($varfunclass3)
{
    echo "Welcome to the End of the Class Mr.".$varfunclass3;
}
}

$obj=new DerivedClass();
$obj->fun1(10,20);
$obj->fun2(50,20);
$obj->fun3("Anshul mishra");
?>