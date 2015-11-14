<?php
class CaesarCiper{
	function calcCiper($input_letters, $rotation){
		$lowercase= array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");		
		$uppercase = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		$input_lettersarr= str_split(trim($input_letters));		
		for ( $i =0; $i<sizeof($input_lettersarr); $i++){
			if(in_array($input_lettersarr[$i], $lowercase)){			
				$lowerindex =  array_search($input_lettersarr[$i], $lowercase);						
				$index = $this->rotate_letters( $lowerindex, $rotation);	
				echo $lowercase[$index];			
			}
			else if(in_array($input_lettersarr[$i], $uppercase)) {
				$upperindex =  array_search($input_lettersarr[$i], $uppercase);								
				$upperindex = $this->rotate_letters( $upperindex, $rotation);	
				echo $uppercase[$upperindex];							
			}
			else{
				echo $input_lettersarr[$i];
			}
		}
	}
	function rotate_letters($index, $rotation){
		if ($rotation >=26){
			$rotation = $rotation % 26;
		}
		$newindex = $index + $rotation;
		if ($newindex >=26){
			$newindex = $newindex - 26;	
		}
		return $newindex;		
	}



	function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$letters = fgets($handle);
		$input_letters = fgets($handle);
		$rotation =fgets($handle);
		$this->calcCiper($input_letters, $rotation);
	}
}
$map = new CaesarCiper();
$map ->handleInput();
/*
10
www.abc.xy
87

fff.jkl.gh*/
?>