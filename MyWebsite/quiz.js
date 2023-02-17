const question = document.getElementById("question");
var div = document.querySelectorAll("#div2");
const submit = document.getElementById("submit");
const next = document.getElementById("next");
const start = document.getElementById("start");
var div1 = document.getElementById("div1");
var error = document.getElementById("error");
var inform = document.getElementById("inform");

function fetchQuiz(){
    fetch(`https://the-trivia-api.com/api/questions?limit=20`)
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            let i = 0;
            var score = 0;
            
            function create(){
                question.innerHTML = data[i].question;
                const array = [data[i].correctAnswer, data[i].incorrectAnswers[0], data[i].incorrectAnswers[1], data[i].incorrectAnswers[2]];
                shuffle(array);
                for(let j=0; j<div.length; j++){
                    var id = document.createAttribute("id");
                    var draggable = document.createAttribute("draggable");
                    var ondragstart = document.createAttribute("ondragstart");
                    id.value = j;
                    draggable.value = "true";
                    ondragstart.value = "drag(event)";
                    var p = document.createElement("p");
                    p.setAttributeNode(id);
                    p.setAttributeNode(draggable);
                    p.setAttributeNode(ondragstart);
                    p.innerText = array[j];
                    div[j].appendChild(p);
                }
            }

            function remove(){
                if(div1.hasChildNodes()) {
                    div1.removeChild(div1.children[0]);
                }
                for(let j=0; j<div.length; j++){
                    if(div[j].hasChildNodes()) {
                        div[j].removeChild(div[j].children[0]);
                    }
                }
            }

            submit.addEventListener("click", () => {
                if(div1.hasChildNodes()) {
                    const answer = div1.children;
                    if(answer[0].innerText == data[i].correctAnswer){
                        score++;
                        alert("Correct Answer");
                    } else {
                        alert("Wrong Answer. The Correct Answer is: " + data[i].correctAnswer);
                    }
                } else {
                    alert("You Didnt Select Answer");
                }
                document.getElementById("score").innerHTML = score+"/"+(i+1);
                submit.style.display = "none";
                next.style.display = "inline";
            });

            next.addEventListener("click", () => {
                i++;
                if (i>=20){
                    inform.style.display = "block";
                    save.style.display = "inline";
                    next.style.display = "none";
                    div1.style.display = "none";
                    question.style.display = "none";
                    for(let j=0; j<div.length; j++){
                        div[j].style.display = "none";
                    }
                    inform.innerHTML = "Congratulations! You got "+score+" points. Save the score then reload new questions";
                } else {
                    submit.style.display = "inline";
                    next.style.display = "none";
                    remove();
                    create();
                }
            });

            start.addEventListener("click", () => {
                submit.style.display = "inline";
                question.style.display = "block";
                div1.style.display = "block";
                for(let j=0; j<div.length; j++){
                    div[j].style.display = "block";
                }
                inform.style.display = "none";
                start.style.display = "none";
                create();
            });

            save.addEventListener("click", () => {
                var xmlhttp = new XMLHttpRequest();
                var param = "score="+score;
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert("Score Saved Successfully");
                        window.location.href = "quiz.php";
                    }
                }
                xmlhttp.open("POST", "savescore.php", true);
                xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xmlhttp.send(param);
            });
        })
        .catch(() => {
            error.innerHTML = "Cannot load questions";
        });
}

fetchQuiz();

function allowDrop(ev) {
    ev.preventDefault();
}
  
function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}
  
function drop(ev) {
    ev.preventDefault();
    if (ev.target.tagName=="P") { return; }
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

function shuffle(array) {
    let currentIndex = array.length,  randomIndex;

    while (currentIndex != 0) {

        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]];
    }
  
    return array;
}