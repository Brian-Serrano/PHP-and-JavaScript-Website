const dec = document.getElementById('dec');
const bin = document.getElementById('bin');
const oct = document.getElementById('oct');
const hex = document.getElementById('hex');

function Dec(){
    const b = parseInt(dec.value).toString(2);
    const o = parseInt(dec.value).toString(8);
    const h = parseInt(dec.value).toString(16);
    document.getElementById("res1").value = "Binary: " + b + "\nOctal: " + o + "\nHexadecimal: " + h;
}
function Bin(){
    const d = parseInt(bin.value, 2);
    const o = parseInt(bin.value, 2).toString(8);
    const h = parseInt(bin.value, 2).toString(16);
    document.getElementById("res2").value = "Decimal: " + d + "\nOctal: " + o + "\nHexadecimal: " + h;
}
function Oct(){
    const d = parseInt(oct.value, 8);
    const b = parseInt(oct.value, 8).toString(2);
    const h = parseInt(oct.value, 8).toString(16);
    document.getElementById("res3").value = "Decimal: " + d + "\nBinary: " + b + "\nHexadecimal: " + h;
}
function Hex(){
    const d = parseInt(hex.value, 16);
    const b = parseInt(hex.value, 16).toString(2);
    const o = parseInt(hex.value, 16).toString(8);
    document.getElementById("res4").value = "Decimal: " + d + "\nBinary: " + b + "\nOctal: " + o;
}
