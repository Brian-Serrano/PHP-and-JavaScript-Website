const lcm = document.querySelector('#lcm');

function findLCM(array) {
    var r1 = 0;
    var r2 = 0;
    var l = array.length;
    for(i = 0; i < l; i++) {
        r1 = array[i] % array[i + 1];
        if(r1 === 0) {
            array[i + 1] = (array[i] * array[i+1]) / array[i + 1];
        }
        else {
            r2 = array[i + 1] % r1;
            if(r2 === 0) {
                array[i + 1] = (array[i] * array[i + 1]) / r1;
            }
            else {
                array[i+1] = (array[i] * array[i + 1]) / r2;
            }
        }
    }
    return array[l - 1];
}
function LCM(){
    var l = lcm.value;
    var arr = l.split(' ');
    var array = arr.map(Number);
	document.getElementById("demo").value = findLCM(array);
}