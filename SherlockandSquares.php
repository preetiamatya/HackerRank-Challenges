<?php
class SherlockSquares{
	function calcSquares($input){
		$input_arr = explode(" ",$input);	
		//print_r($input_arr);	
		$count =0;
		$lowerrange = 0;
		$upperrange = 0;
		$x = (int)$input_arr[0];
		$y = (int)$input_arr[1];
		
		for( $i =$x ; $i<=$y; $i++){
			$perfectsquare = gmp_perfect_square($i);
			if ($perfectsquare == true){	
			$sqrtnum = sqrt($i);			
			$lowerrange = $sqrtnum;
			break;
			}
		}		
		for( $j = $y; $j >= $x; $j--){
			$perfectlowersquare = gmp_perfect_square($j);			
			if ($perfectlowersquare == true){					
				$sqrtlownum = sqrt((int)($j));
				$upperrange = $sqrtlownum;
				break;
			}
		}
		
		if ($lowerrange !=0 && $upperrange !=0){
			foreach (range($lowerrange, $upperrange) as $number)
			$count
		}
		echo $count."\n";		
	}
	function handleInput() {
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);

		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$input = fgets($handle);	
			$this -> calcSquares($input);
		}
	}





}
$squares = new SherlockSquares();
$squares ->handleInput();
?>