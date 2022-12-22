const red = document.querySelector('#red');
const green = document.querySelector('#green');
const blue = document.querySelector('#blue');

function valueToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}
function rgbToHex(r, g, b) {
    return "#" + valueToHex(r) + valueToHex(g) + valueToHex(b);
}
function Hex(){
    const r = Number(red.value);
    const g = Number(green.value);
    const b = Number(blue.value);
	document.getElementById("demo").value = rgbToHex(r, g, b);
}