function findGiovanni(cha1, shift3, key1, plain1){
    const cha3 = cha1.toUpperCase();
    const cha2 = cha3.split('');
    const shift2 = shift3.toUpperCase();
    const plain3 = plain1.toUpperCase();
    const plain2 = plain3.split('');
    const key3 = key1.toUpperCase();
    const key2 = Array.from(new Set(key3.split(''))).toString();
    var res = [];
    var toIndex = 0;
    for(let i = 0; i < key2.length; i++){
        for(let j = 0; j < cha2.length; j++){
            if(key2[i] === cha2[j]){
                const fromIndex = j;
                const element = cha2.splice(fromIndex, 1)[0];
                cha2.splice(toIndex, 0, element);
                toIndex++;
            }
        }
    }
    var cha4 = cha3.split('');
    for(let m = 0; m < cha4.length; m++){
        if(shift2 === cha4[m]){
            var shift1 = cha4.length-m;
        }
    }
    var cha5 = [];
    for(let n = 0; n < cha2.length; n++){
        if (n >= cha2.length-shift1){
            cha5.push(cha2[n + shift1 - cha2.length]);
        } else {
            cha5.push(cha2[n + shift1]);
        }
    }
    for(let k = 0; k < plain2.length; k++){
        for(let l = 0; l < cha4.length; l++){
            if(plain2[k] === cha4[l]){
                res.push(cha5[l]);
            }
        }
        if (cha2.indexOf(plain2[k]) === -1){
            res.push(plain2[k]);
        }
    }
    return res.join('');
}

function Giovanni(){
    const cha1 = document.getElementById('cha').value;
    const shift3 = document.getElementById('shift').value;
    const key1 = document.getElementById('key').value;
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findGiovanni(cha1, shift3, key1, plain1);
}