var readlineSync = require('readline-sync');

function readLine() {
    return readlineSync.question('');
}
function libraryFine(actual_return, expected_return){
	var actual_date = actual_return.split(" ").map(Number);	
	var expected_date = expected_return.split(" ").map(Number);
	var expected_dt = new Date(expected_date[0]+"-"+expected_date[1]+"-"+expected_date[2]);
	var actual_dt = new Date(actual_date[0]+"-"+actual_date[1]+"-"+actual_date[2]);	
	if (expected_date[2] > actual_date[2]){
		console.log("0");
	}
	
	else if((actual_date[0] <= expected_date[0] && actual_date[1] <= expected_date[1] && actual_date[2] <= expected_date[2])) {
		console.log("0");
	}
	else if ((actual_date[1] <expected_date[1] && actual_date[2] <= expected_date[2])){
		console.log("0");
	}
	else if( actual_date[1] == expected_date[1] && actual_date[2] == expected_date[2] ){
		var day_diff =  actual_date[0]- expected_date[0];
		var fine = (15*day_diff);		
		console.log(fine);	
	}
	else if ( actual_date[2] == expected_date[2] ){
		var month_diff =  actual_date[1]- expected_date[1];
		var fine = (500*month_diff);
		console.log(fine);	
	}
	else {
		console.log("10000");
	}
}

function main() {
    // write your code here.
    // call `readLine()` to read a line.
    // use console.log() to write to stdout

    var actual_return = (readLine());
    var expected_return = (readLine());
    var res = libraryFine(actual_return, expected_return);   
}
main();
