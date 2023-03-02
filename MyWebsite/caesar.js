function findCaesar(cha1, shift1, plain1){
    const cha2 = cha1.toUpperCase().split('');
    const plain2 = plain1.toUpperCase().split('');
    const res = plain2.map(c => {
        const idx = cha2.indexOf(c);
        if (idx === -1) return c;
        const shiftedIdx = (idx + shift1) % cha2.length;
        return cha2[shiftedIdx];
    });
    return res.join('');
}

function Caesar(){
    const cha1 = document.getElementById('cha').value;
    const shift1 = parseInt(document.getElementById('shift').value);
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findCaesar(cha1, shift1, plain1);
}