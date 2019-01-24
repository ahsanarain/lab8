<?php
function fact($a){  
$factorial = 1;  
for ($x=$a; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of ". $a." is". $factorial; 
}
echo fact(5);
?>