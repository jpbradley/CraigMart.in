$(document).ready(function () {
	
	adjustApplicationHeight();
	
	$(window).resize(function() {
		adjustApplicationHeight();
	});
		
	function adjustApplicationHeight(){
		if($(window).height() > 500){
			$(".application").height($(window).height() / 2);}
		else{
			$(".application").height(250);}
	}
});
