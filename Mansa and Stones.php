<?php
class Mansa{
	function calcpossiblesums($numberofstones,$diff1, $diff2){
		$actualstones = (int)($numberofstones-1);	
		$counter =1;
		$loop =0;
		$arr = array();
		if($actualstones % 2 ==0){
			$loop = (int)($actualstones/2);
			$quotient = (int)(2/2);	
		}
		else{
			$convertstones = (int)($actualstones+1);
			$loop =(int)($convertstones/2);
		}		
		array_push($arr, $actualstones*$diff1, $actualstones*$diff2);
		for($i=1; $i<=$loop; $i++){
			$sum = ($actualstones-1)*$diff1 + $counter*$diff2;
		    $sum1 = ($actualstones-1)*$diff2 + $counter*$diff1;
			array_push($arr, $sum);
			array_push($arr, $sum1);			
			$sum =0;
			$counter = $counter+1;
			$actualstones = $actualstones -1;
		}
		sort($arr);		
		$output = implode(" ", array_unique($arr));
		echo $output."\n";
	}
	function handleInput() {
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);

		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$numberofstones = fgets($handle);
			$diff1 = fgets($handle);	
			$diff2 = fgets($handle);
			$this -> calcpossiblesums($numberofstones,$diff1, $diff2);
		}

}
}
$map ->handleInput();
/*30 32 34 36 38 40 42 44 46 48 50
25 29 33 37 41 45
2$map = new Mansa();

11
3
5
6
5
9*/
?>