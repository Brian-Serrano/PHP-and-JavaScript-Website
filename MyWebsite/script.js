function Nav() {
	var x = document.getElementById("myNav");
	if (x.className === "nav") {
		x.className += " responsive";
	} else {
		x.className = "nav";
	}
}
function Header() {
	var x = document.getElementById("myHeader");
	if (x.className === "header") {
		x.className += " responsive";
	} else {
		x.className = "header";
	}
}


window.onscroll = function() {myFunction()};

var nav = document.getElementById("myNav");
var sticky = nav.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    nav.classList.add("sticky")
  } else {
    nav.classList.remove("sticky");
  }
}