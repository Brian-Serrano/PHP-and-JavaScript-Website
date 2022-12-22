const n = document.querySelector('#n');
const r = document.querySelector('#r');

function getComb(n1, r1) {
	var fact = 1;
	var fact2 = 1;
	for(var i = n1-r1+1;i <= n1; i++){    
		fact *= i;
	}
	for(var j = 1;j <= r1; j++){    
		fact2 *= j;
	}
	return fact/fact2;
}
function Comb(){
	const n1 = n.value;
	const r1 = r.value;
	document.getElementById("demo").value = getComb(n1, r1);
}