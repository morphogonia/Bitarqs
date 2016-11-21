
$(document).ready(function(){

if (screen.width>=920) {

/* Navigation */
$('ul#nav li a').hover(function(){
	$(this).parent().find('div.navHover').fadeIn(400);
	}, function(){
	$('div.navHover').fadeOut(100);	
});

$('ul#nav li a.ver').hover(function(){
	$('ul.subNav').fadeOut(100);
});

$('ul#nav li.color2 a').hover(function(){
	$('ul.subNav').fadeIn('slow');
});

$('ul#nav ul.subNav li a').hover(function () {
	$('ul.subNav').fadeIn('fast');
});

$('ul#nav ul.subNav').hover(function () {
	$(this).show();        
}, function () {
	$(this).fadeOut('fast');
});

/* Bloques */
$('div.bloqueIndex a').hover(function(){
	$(this).parent().find('div.bloqueIndexHover').fadeIn(300);	
}, function(){
	$('div.bloqueIndexHover').fadeOut(200);	
});

$('div.bloqueProyectos a').hover(function(){
	$(this).parent().find('div.bloqueProyectosHover').fadeIn(300);	
}, function(){
	$('div.bloqueProyectosHover').fadeOut(200);	
});

$('div.bloquePublicaciones a').hover(function(){
	$(this).parent().find('div.bloquePublicacionesHover').fadeIn(300);	
}, function(){
	$('div.bloquePublicacionesHover').fadeOut(200);	
});

} else {

	$('ul#nav li.color2 a').click(function(){
		$('ul.subNav').fadeIn('slow');
	});

}

}); /* / document ready */



