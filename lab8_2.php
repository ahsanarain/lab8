<?php
function power($a,$b){
	$c=$a;
	for($i=1;$i<$b;$i++){
       $c=$c*$a;
	}
	echo $c ;
}
echo power(3,3);
?>