<?php
$list=array('zero' => 0,
'one' => 1,
'two' => 2,
'three' => 3,
'four' => 4,
'five' => 5,
'six' => 6,
'seven' => 7,
'eight' => 8,
'nine' => 9);
 $num=534678;
 $temp='';
 $arr_num=str_split ($num);
foreach($arr_num as $data)
{
$temp.=array_search($data,$list);
}
$num=$temp;
echo $num;
?>