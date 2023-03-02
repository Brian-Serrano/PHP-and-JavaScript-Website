function binomialProbability(trials, probability, successes) {
    let factorial = 1;
    for (let i = 1; i <= trials; i++) {
        factorial *= i;
    }
    let successesFactorial = 1;
    for (let i = 1; i <= successes; i++) {
        successesFactorial *= i;
    }
    let failures = trials - successes;
    let failuresFactorial = 1;
    for (let i = 1; i <= failures; i++) {
        failuresFactorial *= i;
    }
    let p = probability;
    let q = 1 - probability;
    let probabilityRes = (factorial / (successesFactorial * failuresFactorial)) * (p ** successes) * (q ** failures);
  
    return probabilityRes;
}
function Binomial(){
    const trials = Number(document.getElementById('trials').value);
    const probabilities = Number(document.getElementById('probabilities').value);
    const successes = Number(document.getElementById('successes').value);
	document.getElementById("demo").value = binomialProbability(trials, probabilities, successes);
}