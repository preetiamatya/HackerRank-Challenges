<?php
class CavityMap{
	var $arr;
	var $rows;	
	function __construct(){
		$rows[] = 0;		
	}
	function calcCavity($rows, $t){
		$temp = 0;	
		$arraycopy = $rows;
		for($j = 1; $j < $t-1; $j++){		
			for($k = 1; $k < $t-1; $k++){
				if($this->isCavity($rows, $j, $k)){
					$arraycopy = $this->updateArray($arraycopy, $j, $k);					
				}
			}
		}		
		for($j = 0; $j < $t ; $j++){		
			for($k = 0; $k < $t ; $k++){
			echo $arraycopy[$j][$k];
			}
			echo "\n";
		}	
	}
	function isCavity($matrix, $row, $col){
		$cell = $matrix[$row][$col];
		$top = $matrix[$row-1][$col];
		$bottom = $matrix[$row+1][$col];
		$left = $matrix[$row][$col-1];
		$right = $matrix[$row][$col+1];
		if ($cell > $top && $cell > $left && $cell > $bottom && $cell > $right){
			return true;
		}
		return false;
	}
	function updateArray($matrix, $row, $col){
		$matrix[$row][$col] = "X";
		return $matrix;
	}
	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);
		
		for ($i = 0; $i < $t; $i++) { 
			$getrows = fgets($handle);
			$rows[] = str_split(trim($getrows));
		}			
		$this->calcCavity($rows, $t);
	}
}
$map = new CavityMap();
$map ->handleInput();
/*
8
63456754
68335522
25482912
54429472
35416147
75848666
41633675
82511989


63456754
6X335522
254X2X12
5442X4X2
35416147
75X4X666
41633675
82511989
*/

?>


