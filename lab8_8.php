<?php
class test_magic
{
	
	public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "<br>";
    }
}
$ob=new test_magic();
$ob->test1();
$ob->test1(1980);
$ob->test1('abcd','cat');
$ob->test1('aefdf',2);
?>