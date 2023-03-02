function getDays(date1, date2) {
	const oneDay = 24 * 60 * 60 * 1000;
	return Math.round(Math.abs((date1 - date2) / oneDay));
}
function Days(){
	const date1 = new Date(document.getElementById('date1').value);
	const date2 = new Date(document.getElementById('date2').value);
	document.getElementById("demo").value = getDays(date1, date2);
}