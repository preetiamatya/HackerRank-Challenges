var readlineSync = require('readline-sync');

function readLine() {
    return readlineSync.question('');
}
/////////////// ignore above this line ////////////////////
function xor(left, right) {
	var convert_right = convertDectoBin(right);	
	var convert_left = convertDectoBin(left);
	var result_xor = performXOR(convertDectoBin(left),convertDectoBin(right));		
	var result_xor_num = ConvertBintoDec(result_xor);
	var xor_a = convert_left;
	var xor_b = convert_right;
	var result_xor_arr = [];
	var result_xor =[];
	var result_xor_num=[];
	for (var j =left; j<=right; ++j){
		for(var l =left; l<=right; ++l){
			xor_a = convertDectoBin(j);				
			xor_b = convertDectoBin(l);
			result_xor = performXOR(xor_a,xor_b);
			result_xor_num = ConvertBintoDec(result_xor);
			result_xor_arr.push(result_xor_num);
			}
	}
	var largest_num = result_xor_arr.sort( function(a,b) { return b - a; } );
	console.log(largest_num[0]);
}

function performXOR(a,b){
	if (a.length!=b.length){
		var difflength =Math.abs(b.length-a.length);
		for(var m=1; m<=difflength;++m){
			if(a.length < b.length){
				a.splice(0, 0, "0");
			}
			if(b.length < a.length){
				b.splice(0, 0, "0");	
			}
		}
	}
	var xor_result = [];
	for(var k =0; k<a.length; ++k){
		if(a[k] == b[k]){
			xor_result.push(parseInt("0"));
		}
		else{
			xor_result.push(parseInt("1"));
		}
	}
	return xor_result;
}
function convertDectoBin(num){
	var possibledigits = [];
	var remaining = 0;
	for (var i=1;i<5;i--) {
		if(num ==1 ){
			possibledigits.push(parseInt("1"));
			break;
		}
		if(num % 2 == 0){
			possibledigits.push(parseInt("0"));
			num = num/2;
		}
		else{
			possibledigits.push(parseInt("1"));
			num = (num-1)/2;
		}

	}
	return possibledigits.reverse();
}
function ConvertBintoDec(num){	 
	var counter = 0;
	var maxPow = num.length -1;
	for (var m = 0 ; m <= maxPow; ++m){
		counter = counter + (num[m] * Math.pow(2, maxPow - m)); 	
	}	
	return parseInt(counter);
}
function main() {
    // write your code here.
    // call `readLine()` to read a line.
    // use console.log() to write to stdout

    var a = parseInt(readLine());
    var b = parseInt(readLine());
    var res = xor(a, b);
  
}

main();

