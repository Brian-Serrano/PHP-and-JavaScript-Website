function getPerm(n1, r1) {
	var fact = 1;
	for(var i = n1-r1+1;i <= n1; i++){    
		fact *= i;
	}
	return fact;
}
function Perm(){
	const n1 = document.getElementById('n').value;
	const r1 = document.getElementById('r').value;
	document.getElementById("demo").value = getPerm(n1, r1);
}