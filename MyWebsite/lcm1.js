function findLCM(numbers) {
    if (numbers.length === 0) {
        return undefined;
    }
    if (numbers.length === 1) {
        return numbers[0];
    }
    let min = Math.min(...numbers);
    let max = Math.max(...numbers);
    let lcm = max;
    while (!numbers.every(num => lcm % num === 0)) {
        lcm += max;
    }
  
    return lcm;
}
function LCM(){
    var l = document.getElementById('lcm').value;
    var arr = l.split(' ');
    var numbers = arr.map(Number);
	document.getElementById("demo").value = findLCM(numbers);
}