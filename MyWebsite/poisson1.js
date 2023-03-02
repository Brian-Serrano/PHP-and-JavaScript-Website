function poissonProbability(mean, occurrences) {
    let factorial = 1;
    for (let i = 1; i <= occurrences; i++) {
        factorial *= i;
    }
    let probability = (Math.exp(-mean) * (mean ** occurrences)) / factorial;
  
    return probability;
}
function Poisson(){
    const mean = Number(document.getElementById('m').value);
    const occurrences = Number(document.getElementById('x').value);
	document.getElementById("demo").value = poissonProbability(mean, occurrences);
}