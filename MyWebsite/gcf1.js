function gcd(a, b) {
    if (a == 0)
        return b;
    return gcd(b % a, a);
}
function findGCF(array) {
    let result = array[0];
    for (let i = 1; i < array.length; i++) {
        result = gcd(array[i], result);

        if (result == 1) {
            return 1;
        }
    }
    return result;
}
function GCF(){
    var g = document.getElementById('gcf').value;
    var arr = g.split(' ');
    var array = arr.map(Number);
	document.getElementById("demo").value = findGCF(array);
}