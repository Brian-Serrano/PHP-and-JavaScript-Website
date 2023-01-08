function findKeyword(cha1, key1, plain1){
    const cha3 = cha1.toUpperCase();
    const cha2 = cha3.split('');
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
    const cha4 = cha3.split('');
    for(let k = 0; k < plain2.length; k++){
        for(let l = 0; l < cha4.length; l++){
            if(plain2[k] === cha4[l]){
                res.push(cha2[l]);
            }
        }
        if (cha2.indexOf(plain2[k]) === -1){
            res.push(plain2[k]);
        }
    }
    return res.join('');
}

function Keyword(){
    const cha1 = document.getElementById('cha').value;
    const key1 = document.getElementById('key').value;
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findKeyword(cha1, key1, plain1);
}