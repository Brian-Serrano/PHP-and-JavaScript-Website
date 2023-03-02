function findTransposition(plain1){
    const plain3 = plain1.split(' ').join('').toUpperCase().split('');
    var res = plain3.filter((_, i) => i % 2 === 0)
                    .concat(plain3.filter((_, i) => i % 2 === 1));
    return res.join('');
}

function Transposition(){
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findTransposition(plain1);
}