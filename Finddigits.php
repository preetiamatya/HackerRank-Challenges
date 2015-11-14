<?php
class FindDigit{
	function calcDigit($number){		
		$arr = str_split(trim($number));
		$unique = array_unique($arr);
	    $unique_values = array_values($unique);		
		$dublicate = array_count_values($arr);		
		$count = 0;
		for ( $i = 0; $i < sizeof($unique_values); $i++){			
			if($unique_values[$i] != 0 && ($number % $unique_values[$i] == 0)){
				
				 if (array_key_exists($unique_values[$i], $dublicate)){
					$value = $dublicate[$unique_values[$i]];
					$count = $count + $value;
				 }
				 else{			 
				
				$count = $count+1;
				}
			}	
		}
		echo $count."\n";	
		}
	function Handleinput(){
		$handle = fopen("php://stdin", "r");
		$t = fgets($handle);

		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$number = fgets($handle);	
			$this -> calcDigit($number);
		}
	}
}
$find_digit = new FindDigit();
$find_digit-> Handleinput();
?>