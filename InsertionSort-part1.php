<?php
function  insertionSort( $ar) {
	$temp=$ar[sizeof($ar) - 1];
	$n = sizeof($ar) - 1;
	$t=sizeof($ar) - 1;
	for ($i = 0; $i < sizeof($ar); $i++ )
	{
		if ( $ar[$n-$i] > $temp)
		{
		 $ar[$t] = $ar[$n-$i];		 
		 echo  implode(" ", $ar)."\n";
		}
		else
		{
		$ar[$t] = $temp;
		echo  implode(" ", $ar)."\n";
		break;		 
		}
		$t=$t-1;	
	}
}
$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$ar = array();
$s=fgets($fp);
$ar = explode(" ", $s);
for($i=0;$i < count($ar);$ar[$i++]+=0);
insertionSort($ar);
?>
