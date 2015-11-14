<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($handle);

$arr = array();
for ($testcase = 0; $testcase < $t; $testcase++) 
	{ 
		$students = fgets($handle);		
		$arrivedtime = fgets($handle);
		$arrstudents = explode(" ", $students);		
		isClassCanceled ($arrstudents[1], $arrstudents[0], $arrivedtime);
	}


function isClassCanceled ($expectedstudents, $noofstudents, $arrivedtime)
{
	$count = 0;
	$arr = array();
	$arr = explode(" ", $arrivedtime);
	for ($i=0; $i<$noofstudents; $i++)
	{
		if ($arr[$i] <=0)
		{
			$count = $count+1;
		}
	}
	if($count <$expectedstudents)
	{
		echo "YES"."\n";
	}
	else
	{
		echo "NO"."\n";
	}
	
}
fclose($handle);
?>