var readlineSync = require('readline-sync');

function readLine() {
    return readlineSync.question('');
}

/////////////// ignore above this line ////////////////////

function plusminus(a, b) {			
	var res = b.split(" ").map(Number); 
	var countpositive = 0;
	var countnegative = 0;
	var countzero = 0;
	for (i = 0; i < res.length; ++i) {	
		
		if(res[i] > 0){
			countpositive++;		
		}
		if(res[i] == 0){
			countzero++;
		} 
		if(res[i] < 0){
			countnegative++;
		}
	}
	console.log(Math.round((countpositive/a) * 10000) / 10000);
	console.log(Math.round((countzero/a) * 10000) / 10000);
}

function main() {
    // write your code here.
    // call `readLine()` to read a line.
    // use console.log() to write to stdout

    var a = parseInt(readLine());
    var b = (readLine());
    var res = plusminus(a, b);
}
main();