const n = document.querySelector('#n');
const r = document.querySelector('#r');

function getPerm(n1, r1) {
	var fact = 1;
	for(var i = n1-r1+1;i <= n1; i++){    
		fact *= i;
	}
	return fact;
}
function Perm(){
	const n1 = n.value;
	const r1 = r.value;
	document.getElementById("demo").value = getPerm(n1, r1);
}