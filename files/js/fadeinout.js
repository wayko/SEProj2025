$(document).ready(function(){
	setInterval(function(){
		$('body').animate({backgroundColor:"black"},3000).delay(10000).animate({backgroundColor:"white"},3000).delay(10000);
	},5000);
});