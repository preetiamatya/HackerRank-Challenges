<?php
class Encryption{
	function getrectangle($t){
		$sqrtvalue = sqrt(strlen($t));
		$floorvalue = floor($sqrtvalue);
		$ceilvalue =  ceil($sqrtvalue);
		$arr = array();
		$trimmed_array = array();
		$counter =0;
		while($counter <= $floorvalue ){
		$stringpart =substr($t, 0, $ceilvalue);
		$t = substr($t, $ceilvalue); 
		array_push($arr, $stringpart);		
		$counter++;
		}		
		$arr=array_filter(array_map('trim',$arr));		
		$this->encrypt($arr, $ceilvalue);
	}
	function encrypt($arr, $ceilvalue){
		$count =0;
		$textarray = array();		
		while ($count<$ceilvalue){
			$newtext = '';
			for($i=0; $i<sizeof($arr); $i++){			
			$newtext.= substr($arr[$i], $count, 1);
			}
		$count++;
		echo $newtext." ";
		}
	}
	function handleInput() {
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);
		$this->getrectangle(trim($t));
	}
}
$ecrypt = new Encryption();
$ecrypt ->handleInput()
?>