function evaluatePostfix(exp) {
    let stack = [];
    for (let i = 0; i < exp.length; i++) {
        let c = exp[i];
        if (c == ' ') {
            continue;
        }
        else if (c >= '0' && c <= '9') {
            let n = 0;
            while (c >= '0' && c <= '9') {
                n = n * 10 + (c - '0');
                i++;
                c = exp[i];
            }
            i--;
            stack.push(n);
        }
        else {
            let val1 = stack.pop();
            let val2 = stack.pop();
            switch (c) {
                case '+':
                    stack.push(val2 + val1);
                    break;
                case '-':
                    stack.push(val2 - val1);
                    break;
                case '/':
                    stack.push(parseInt(val2 / val1, 10));
                    break;
                case '*':
                    stack.push(val2 * val1);
                    break;
            }
        }
    }
    return stack.pop();
}
function Postfix(){
	const exp = document.getElementById('postfix').value;
	document.getElementById("demo").value = evaluatePostfix(exp);
}