<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = strtolower(fgets($handle));
$alphabets = "a,b,c,d,e,f,g,h,i,j,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
$arralphabets = explode(",", $alphabets);
$arrsentence = str_split($t);
isPangram( $arrsentence, $arralphabets);
function isPangram( $arrsentence, $arralphabets)
{	
	$counter = 0;	
	for( $i=0; $i<25; $i++ )
	{
		for( $j=0; $j < sizeof($arrsentence); $j++ )
			{
				if ( $arralphabets[$i] == $arrsentence[$j])
				{
					$counter = $counter + 1;
					break;
				}
			}	
	}
	if( $counter == 25 )
	{
		echo  "pangram";
	}
	else
	{
		echo  "not pangram";
	}
	
}
fclose($handle);
?>