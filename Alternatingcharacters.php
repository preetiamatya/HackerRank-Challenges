<?php
class AlternatingCharacters{
	function calcRepeatations($input){
		$input_arr= str_split(trim($input));		
		$temp =$input_arr[0];		
		$counter =0;
		for($i =1; $i <sizeof($input_arr); $i++){
			if ( $input_arr[$i]==$temp){
				$counter ++;					
			}
			$temp =$input_arr[$i];
		}
		echo $counter."\n";
	}
	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);

		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$input = fgets($handle);	
			$this -> calcRepeatations($input);
		}
	}
}
$map = new AlternatingCharacters();
$map ->handleInput();
?>