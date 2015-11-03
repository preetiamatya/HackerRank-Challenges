var readlineSync = require('readline-sync');

function readLine() {
    return readlineSync.question('');
}
function TimeInWords(hour, mins) {
    var hoursarr = [ "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve"];
	var minutesarr = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen","sixteen","seventeen","eighteen","nineteen","twenty","twenty one","twenty two","twenty three", "twenty four", "twenty five","twenty six", "twenty seven", "twenty eight", "twenty nine"];
	if (mins == 0 ){
			console.log(hoursarr[hour-1] + " o' " + "clock");
			return;
		}
	else if (mins == 1){
			console.log( "one minute past "+hoursarr[hour-1]);
			return;
		
		}
		else if (mins == 15){
			console.log("quarter past "+hoursarr[hour-1]);
			return;
		}
		else if (mins == 30){
			console.log("half past "+hoursarr[hour-1]);
			return;
		}
		else if (mins == 45){
			console.log( "quarter to "+hoursarr[hour]);
			return;
		}
		else if(mins == 59){
			console.log( "one minute to "+hoursarr[hour]);
			return;
		}
		
		else if (mins > 1  && mins <=29){
			
			console.log( minutesarr[mins-1]+" minutes past "+hoursarr[hour-1]);
			return;
		}
		
		else if (mins > 30){			 
			var newmins = 60 -mins;
			console.log( minutesarr[newmins-1]+" minutes to "+ hoursarr[hour]);
			return;
		}
}

function main() {
    // write your code here+
    // call `readLine()` to read a line+
    // use console+log() to write to stdout

    var a = parseInt(readLine());
    var b = parseInt(readLine());;

    var res = TimeInWords(a, b);
    //console+log(res);
}

main();
