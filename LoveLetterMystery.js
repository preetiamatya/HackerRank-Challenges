var readlineSync = require('readline-sync');

function readLine() {
    return readlineSync.question('');
}
function loveletterMystery(letters){
	if(checkPalindrome(letters)){
		console.log(0);
		return;
	}
	doPrank(letters);
	

}
function checkPalindrome(letters){
	var chars = letters.toString().split('');
	var reverse = chars.reverse(); 
	var reversestring = reverse.join("");
	if(letters === reversestring){		
		return true;
	}
	return false;
}

function doPrank(letters){
	var alphabets = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];	
	var chars = letters.toString().split('');
	var char_length = chars.length;
	
	if (char_length >= 2){
		var floorvalue  = Math.floor(char_length/2);
		var first_split = chars.splice(0,floorvalue);		
		var counter = 0;
		for( var j = 0; j < floorvalue ; j++){	
			var lastchar_index =0;			
			var firstchar_index = alphabets.indexOf(first_split[j]);
				if (char_length % 2 == 0){
					lastchar_index = alphabets.indexOf(chars[floorvalue-1-j]);
			}
			else{
				lastchar_index = alphabets.indexOf(chars[floorvalue-j]);
			}
			if (firstchar_index != lastchar_index){
				var difference = Math.abs(firstchar_index - lastchar_index);
				counter += difference;	
			}			
		}
	}	
console.log(counter);
}	
function main() {
    // write your code here.
    // call `readLine()` to read a line.
    // use console.log() to write to stdout
    var count = parseInt(readLine());
	for ( var i =0; i<count; i++){
		var letters = readLine();
		var chars = letters.toString().split('');
		var char_length = chars.length;	
		var res = loveletterMystery(letters);
	}
}

main();
