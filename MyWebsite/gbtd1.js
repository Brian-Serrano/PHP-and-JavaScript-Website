const dat1 = document.querySelector('#date1');
const dat2 = document.querySelector('#date2');

function getDays(date1, date2) {
	const oneDay = 24 * 60 * 60 * 1000;
	const diffDays = Math.round(Math.abs((date1 - date2) / oneDay));
	return diffDays;
}
function Days(){
	const date1 = new Date(dat1.value);
	const date2 = new Date(dat2.value);
	document.getElementById("demo").value = getDays(date1, date2);
}