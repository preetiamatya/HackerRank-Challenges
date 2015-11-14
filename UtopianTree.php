<?php
class UtopiaTree {
	function calcTreeHeight($cycle) {
		$temp = 0;
		for ($i = 0; $i <= $cycle; $i++) {	
			if ($i % 2 == 0) {
				$temp= $temp + 1;							
			} else {
				$temp= $temp * 2;							
			}
		}
		echo "$temp\n";	
	}
	
	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);

		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$cycle = fgets($handle);	
			$this -> calcTreeHeight($cycle);
		}
	}
}

$utopiatree = new UtopiaTree();
$utopiatree -> handleInput();


?>