function gcd(a, b) {
    return a === 0 ? b : gcd(b % a, a);
}
  
function findGCF(array) {
    return array.reduce(gcd);
}
function GCF(){
    var g = document.getElementById('gcf').value;
    var arr = g.split(' ');
    var array = arr.map(Number);
	document.getElementById("demo").value = findGCF(array);
}