$(document).ready(function() {
	var i = 0;
	var colors = ['#e00','#0c0'];
	setInterval(function() {
		changeColor('h1')
	}, 600);	

	function changeColor(element) {
	console.log('test');
		$(element).animate({
			color: colors[i]
			}, 
			500
		);
		if(i < colors.length - 1) {
			i++;
		} else {
			i = 0;
		}
	}
});