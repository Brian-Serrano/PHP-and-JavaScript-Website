function findTransposition(plain1){
    const plain2 = plain1.split(' ');
    const plain4 = plain2.join('').toUpperCase();
    const plain3 = plain4.split('');
    var res = [];
    for (let i = 0; i < plain3.length; i+=2){
        res.push(plain3[i]);
    }
    for (let j = 1; j < plain3.length; j+=2){
        res.push(plain3[j]);
    }
    return res.join('');
}

function Transposition(){
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findTransposition(plain1);
}