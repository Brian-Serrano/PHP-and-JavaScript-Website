function valueToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}
function rgbToHex(r, g, b) {
    return "#" + valueToHex(r) + valueToHex(g) + valueToHex(b);
}
function Hex(){
    const r = parseInt(document.getElementById('red').value);
    const g = parseInt(document.getElementById('green').value);
    const b = parseInt(document.getElementById('blue').value);
	document.getElementById("demo").value = rgbToHex(r, g, b);
}