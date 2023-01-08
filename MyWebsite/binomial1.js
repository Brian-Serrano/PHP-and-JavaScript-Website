function binomialProbability(trials, probability, successes) {
    // Compute the factorial of the number of trials
    let factorial = 1;
    for (let i = 1; i <= trials; i++) {
        factorial *= i;
    }
  
    // Compute the factorial of the number of successes
    let successesFactorial = 1;
    for (let i = 1; i <= successes; i++) {
        successesFactorial *= i;
    }
  
    // Compute the factorial of the number of failures
    let failures = trials - successes;
    let failuresFactorial = 1;
    for (let i = 1; i <= failures; i++) {
        failuresFactorial *= i;
    }
  
    // Compute the probability of the binomial distribution
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