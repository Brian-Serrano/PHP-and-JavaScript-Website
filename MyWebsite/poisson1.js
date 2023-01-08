function poissonProbability(mean, occurrences) {
    // Compute the factorial of the number of occurrences
    let factorial = 1;
    for (let i = 1; i <= occurrences; i++) {
        factorial *= i;
    }
  
    // Compute the probability of the Poisson distribution
    let probability = (Math.exp(-mean) * (mean ** occurrences)) / factorial;
  
    return probability;
}
function Poisson(){
    const mean = Number(document.getElementById('m').value);
    const occurrences = Number(document.getElementById('x').value);
	document.getElementById("demo").value = poissonProbability(mean, occurrences);
}