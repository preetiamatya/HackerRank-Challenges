<?php
class ChocolateFeast{
var $counter;
function __construct(){
$counter = 0;
}

function calcPossibleCases($input) {
	$arr = explode(" ",$input);
	$this->calculate($arr[0],$arr[1],$arr[2]);

}
function calculate($money, $unitcost, $wrapper){	
	$checkifdivisible = $money % $unitcost;	
	$moneyused = $money - $checkifdivisible;
	$initialnoofChocs = $moneyused/$unitcost;
	$temp =$initialnoofChocs;
	$this->counter = $this->counter+ $initialnoofChocs;
	while (true ){
	
	if ($initialnoofChocs != 0 && $initialnoofChocs >= $wrapper){
		$initialnoofChocs = $this->getchocsfromwrapper($initialnoofChocs,$wrapper);
	}
	else
	{
		break;
	}
	}
	echo ($this->counter)."\n";
	$this->counter =0;
	
}
 function getchocsfromwrapper($initialnoofChocs, $wrapper){	
	$isWrapperremainig = ($initialnoofChocs % $wrapper);
	$possiblewrappers = $initialnoofChocs - $isWrapperremainig;
	$getnewchocs = $possiblewrappers / $wrapper;	
	$this->counter = $this->counter + $getnewchocs;	
	$isWrapperremainig = $isWrapperremainig+ $getnewchocs;
	$initialnoofChocs = $isWrapperremainig;	
	return $initialnoofChocs;
 }


function handleInput() {		
		$handle = fopen("php://stdin", "r");
		/* Enter your code here. Read input from STDIN. Print output to STDOUT */
		$t = fgets($handle);

		for ($testcase = 0; $testcase < $t; $testcase++) { 
			$input = fgets($handle);	
			$this -> calcPossibleCases($input);
		}
	}
}

$choclate = new ChocolateFeast();
$choclate -> handleInput();

?>