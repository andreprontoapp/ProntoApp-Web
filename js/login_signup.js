$('document').ready(function(){
	$('#loginSignup #newAccount').click(function(){
		$('#loginSignup #login').toggleClass('active');
		$('#loginSignup #signup').toggleClass('active');
	});
	
	$('#loginSignup #backLogin').click(function(){
		$('#loginSignup #login').toggleClass('active');
		$('#loginSignup #signup').toggleClass('active');
	});
	
});
//function imageUrl(img){
	//return img;
//}