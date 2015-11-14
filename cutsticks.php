<?php
class CutSticks{
	function calcSticks($sticks, $t){
		echo $t;
		$arr = explode(" ", $sticks);		
		$length_of_cut = min($arr);
		$newsticks = array();
		$counter = $t;
		while($counter > 1){	
			$newlength = 0;
			for ($i =0; $i < $counter; $i++){
			    $newlength = ($arr[$i] - $length_of_cut);
			    $newsticks[] = $newlength;		
			}
			$filtered_newsticks = array_values(array_filter($newsticks));
			if (!$filtered_newsticks){
				break;
			}
			$arr = array();
			$newsticks = array();
			$arr = $filtered_newsticks;
			$length_of_cut = min($arr);
			$counter = sizeof($arr);
			echo $counter ."\n";			
		}
	}
	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);
		$sticks = fgets($handle);	
		//echo $sticks;
		$this -> calcSticks($sticks, $t);		
	}
}
$cut = new CutSticks();
$cut ->HandleInput();
?>