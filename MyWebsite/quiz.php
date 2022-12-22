<?php

session_start(); 

if (isset($_SESSION["id"])){

?>
<!DOCTYPE html>
<html>
	<head>
		<title>BSS My Website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include 'headerandnav.php'; ?>
		<div class="main">
			<?php include 'quizaside.php'; ?>
			<div class="article">
				<h1>Quiz</h1><hr>
				<p id="inform">Get as many scores as you can in 20 items quiz. For correct answer just click inspect then go to console. Drag and drop the choices to the box above.</p>
                <p id="question" style="display:none;"></p>
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <button id="submit" class="button-15" role="button" style="display:none;">Submit Answer</button>
                <button id="next" class="button-15" role="button" style="display:none;">Next Question</button>
                <button id="start" class="button-15" role="button">Start Quiz</button>
				<button id="save" class="button-15" role="button" style="display:none;">Save Score</button>
                <p id="score"></p>
				<p id="error"></p>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
        <script src="quiz.js"></script>
	</body>
</html>


<?php

} 
else {
    header('location:login.php?login=youdidntlogin');
}

?>