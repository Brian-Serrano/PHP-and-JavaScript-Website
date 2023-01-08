function solve(a, b, c) {
    var result = (-1 * b + Math.sqrt(Math.pow(b, 2) - (4 * a * c))) / (2 * a);
    var result2 = (-1 * b - Math.sqrt(Math.pow(b, 2) - (4 * a * c))) / (2 * a);
    return "The roots are: " + result + " and " + result2;
}
function Quad(){
	const a = Number(document.getElementById('num1').value);
    const b = Number(document.getElementById('num2').value);
    const c = Number(document.getElementById('num3').value);
	document.getElementById("demo").value = solve(a, b, c);
}