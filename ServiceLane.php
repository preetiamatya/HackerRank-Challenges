<?php
class ServiceLane{
	function IsPassable($entry_exit, $servicelane_width){		
		$range = range( $entry_exit[0],$entry_exit[1]);
		$count = sizeof($range);
		$output = array_slice($servicelane_width, $entry_exit[0], $count);		
		$minimumlane = min($output);
		if ($minimumlane == 1) {
			echo "1"."\n";
		}
		else if ($minimumlane == 2)  {
			echo "2"."\n";
		}
		else if ($minimumlane == 3)  {
			echo "3"."\n";
		}		
	}
	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle); //input n and t
		$getwidth = fgets($handle);
		$servicelane_width = explode(" ", $getwidth);
		$freeway_testcases = explode(" ", $t);	
		for ($testcase = 0; $testcase < $freeway_testcases[1]; $testcase++) { 
			$number = fgets($handle);	
			$entry_exit =  explode(" ", $number);
			$this -> IsPassable($entry_exit, $servicelane_width);
		}	
	}
}
$service = new ServiceLane();
$service ->HandleInput();
?>