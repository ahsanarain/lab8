<?php
function art(){
	if(func_num_args()==0){
	$arr=func_get_args();
	echo"no args";
	}
	else if(func_num_args()==1){
$arr=func_get_arg();
echo "one args";
	}
	else if(func_num_args()==2){
		$arr1=func_get_args();
		$add=$arr1[0]+$arr1[1];
		$div=$arr1[0]/$arr1[1];
		$mul=$arr1[0]*$arr1[1];
		echo "division".$div."<br>"."multiplication".$mul."<br>"."addition".$add;
	}
	else if(func_num_args()==3){
		$arr2=func_get_args();
		$add=$arr2[0]+$arr2[1]+$arr2[2];
		$div=$arr2[0]/$arr2[1]/$arr2[2];
		$mul=$arr2[0]*$arr2[1]*$arr2[2];
		echo "division".$div."<br>"."multiplication".$mul."<br>"."addition".$add;
	}
}
echo art(2,6)."<br>";
echo art(2,6,8);
?>