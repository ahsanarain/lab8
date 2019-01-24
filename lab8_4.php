<?php
function plit($a){
	$b=str_split($a);
	$arr=array();
	for ($i=0; $i<sizeof($b);$i++) { 
	$c=$b[$i]*$b[$i]*$b[$i];
	array_push($arr,$c);
	}
	$e=array_sum($arr);
	if ($e==$a){
	return true;
	}
	else{
		echo "false";
	}
}
echo plit(154);
?>