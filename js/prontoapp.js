$('document').ready(function(){
	
	$('#btnShowMenu').click(function(e){
		$('body').toggleClass('menu-opened');
	});
	
	$('#appOverlay').click(function(e){
		$('body').removeClass('menu-opened');
	});
	
	
	//$('#appContainer nav').hover(function(e){
		//$('#appContainer nav').toggleClass('closed');
	//});
	
});