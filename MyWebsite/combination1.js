function getComb(n1, r1) {
	let numerator = 1;
	let denominator = 1;
	for (let i = 1; i <= r1; i++) {
		numerator *= n1 - r1 + i;
		denominator *= i;
	}
	return numerator / denominator;
}
function Comb(){
	const n1 = document.getElementById('n').value;
	const r1 = document.getElementById('r').value;
	document.getElementById("demo").value = getComb(n1, r1);
}