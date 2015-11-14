<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($handle);

for ($i = 0; $i < $t; $i++) {
    $lis =  trim(fgets($handle));
    echo checkFunny($lis);
}

function checkFunny($word) {
    $revword = strrev($word);   
    $result = false;
    $arr = str_split($word, 1);
    $revarr = str_split($revword, 1);
    $counter = 0;    
    for ($i = 0; $i < sizeof($arr) - 1; $i++){
        $x = abs((ord($arr[$i+1])- ord($arr[$i])));
        $revx = abs(ord($revarr[$i+1])- ord($revarr[$i]));   
        if($x == $revx) {
           $counter = $counter + 1;     
           $result = true;
        } else {
           return "Not Funny\n";
        }
    }

    if($counter = sizeof($arr) - 1 && $result == true) {
        return "Funny\n";
    }
}
?>