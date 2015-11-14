<?php
class Gemstone{
	var $element;
	var $counter;
	var $zero;
	var $size;
	function __construct(){
	$element = 0;
	$counter =0;
	$zero = false;	
	}
	function calc_Occurence($input, $t){
			$this->size = 0;
		    $arr = array();
			$arr = str_split(trim($input));
			//$zero = false;
			$unique = array_unique($arr);	
			$unique_values = array_values($unique);		
			if ($t == 1){
				$this->zero =true;
			}
			if (sizeof($this->element)> 0){
				$result = array_intersect($this->element, $unique_values);
				if (empty($result)){
				$this->zero =true;	
				}	
				if ( $this->zero == false){
				$this->element  = $result;
				$this->size = sizeof($result);
				$this->counter = $this->counter +1;
				if ($this->counter == ($t-1)) echo $this->size."\n";							
				}				
				return;				
			}
			$this->element  = $unique_values;
	}

	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);
		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$input = fgets($handle);	
			
			$this -> calc_Occurence($input, $t);
		}	
		if ($this->zero =true && $this->size==0) echo "0"."\n";
	}
}
$gem = new Gemstone();
$gem ->HandleInput();
?>