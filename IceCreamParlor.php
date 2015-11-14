<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($handle);
$arr = array();
for ($i = 0; $i < $t; $i++) { 
	$dollor = fgets($handle);
	$flavor = fgets($handle);
	$prices = fgets($handle);
	calculateIndexes($dollor, $prices ); 
}

function calculateIndexes($dollor, $prices)
{	
	$arr = explode(" ", $prices);
	$buy =  array();	
	for($j = 0; $j < sizeof($arr) - 1; $j++) 
	{		
		for ($k = $j+1; $k < sizeof($arr); $k++)
		{
			if ( isAffordable($arr[$j], $arr[$k], $dollor))
			{					
				echo ($j+1). " " . ($k+1)."\n";
			}		
		}
			
	}		
	return $arr;
}

function isAffordable( $a, $b, $dollor)
{
	if( ($a + $b) == $dollor){		
		return true;
	}
	return false;
}

fclose($handle);

?>