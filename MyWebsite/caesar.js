function findCaesar(cha1, shift1, plain1){
    const cha3 = cha1.toUpperCase();
    const cha2 = cha3.split('');
    const plain3 = plain1.toUpperCase();
    const plain2 = plain3.split('');
    const res = [];
    for(let i = 0; i < plain2.length; i++){
        for(let j = 0; j < cha2.length; j++){
            if (cha2[j] === plain2[i]){
                if (j >= cha2.length-shift1){
                    res.push(cha2[j + shift1 - cha2.length]);
                } else {
                    res.push(cha2[j + shift1]);
                }
            }
        }
        if (cha2.indexOf(plain2[i]) === -1){
            res.push(plain2[i]);
        }
    }
    return res.join('');
}

function Caesar(){
    const cha1 = document.getElementById('cha').value;
    const shift1 = parseInt(document.getElementById('shift').value);
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findCaesar(cha1, shift1, plain1);
}