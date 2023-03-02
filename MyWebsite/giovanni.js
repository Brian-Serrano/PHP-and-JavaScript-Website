function findGiovanni(cha1, shift3, key1, plain1){
    const cha = cha1.toUpperCase().split('');
    const shift = cha.indexOf(shift3.toUpperCase());
    const key = [...new Set(key1.toUpperCase())];
    const cha2 = key.concat(cha.filter(ch => !key.includes(ch)));
    const cha3 = cha1.toUpperCase();
    const shift1 = cha3.length - shift;
    const plain2 = plain1.toUpperCase().split('');
    const res = plain2.map(ch => {
        const index = cha.indexOf(ch);
        return index !== -1 ? cha2[(index + shift1) % cha.length] : ch;
    });
    return res.join('');
  }

function Giovanni(){
    const cha1 = document.getElementById('cha').value;
    const shift3 = document.getElementById('shift').value;
    const key1 = document.getElementById('key').value;
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findGiovanni(cha1, shift3, key1, plain1);
}