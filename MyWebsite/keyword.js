function findKeyword(cha1, key1, plain1) {
    const cha2 = cha1.toUpperCase().split('');
    const plain2 = plain1.toUpperCase().split('');
    const key2 = Array.from(new Set(key1.toUpperCase().split(''))).toString();
    let res = '';
    let toIndex = 0;
    for (let i = 0; i < key2.length; i++) {
        const fromIndex = cha2.indexOf(key2[i]);
        if (fromIndex !== -1) {
            cha2.splice(toIndex, 0, cha2.splice(fromIndex, 1)[0]);
            toIndex++;
        }
    }
    for (let i = 0; i < plain2.length; i++) {
        const index = cha1.toUpperCase().indexOf(plain2[i]);
        if (index === -1) {
            res += plain2[i];
        } else {
            res += cha2[index];
        }
    }
    return res;
  }

function Keyword(){
    const cha1 = document.getElementById('cha').value;
    const key1 = document.getElementById('key').value;
    const plain1 = document.getElementById('plain').value;
	document.getElementById("demo").value = findKeyword(cha1, key1, plain1);
}