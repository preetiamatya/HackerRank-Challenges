var readlineSync = require('readline-sync');

function readLine() {
    return readlineSync.question('');
}

/////////////// ignore above this line ////////////////////

function lonelyInteger(a, b) {
	var res = b.split(" ").map(Number);	
	var res = res.sort();
	if (a == 1){
		console.log(b);
	}
	var possiblenum = [];
	for ( var i = 0; i<a-1; ++i){
		if (res[i]!= res[i+1]){
			possiblenum.push(res[i+1]);	
		}
		else{
			if (typeof possiblenum !== 'undefined' && possiblenum.length > 0) {				
				possiblenum.splice(-1,1);				
			}
		}
	}
	console.log(possiblenum.toString());	
}




function main() {
    // write your code here.
    // call `readLine()` to read a line.
    // use console.log() to write to stdout

    var a = parseInt(readLine());
    var b = (readLine());
    var res = lonelyInteger(a, b);  
}

main();
