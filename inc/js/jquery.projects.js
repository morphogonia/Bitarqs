
$(document).ready(function(){

$('div#cargando').hide();
$('div#franja_proyectos').hide();

function Hide_Load() {
	$('div#cargando').fadeOut('slow');
	$('div#franja_proyectos').fadeIn(400);
};

$('a.proj').click(function(){
	
	var id = $(this).attr('rel');
	$('div#cargando').fadeIn('fast');
	$('div#franja_proyectos').load('project_data.php?id='+id, Hide_Load());
	
	var alto = $(document).height();
	$('div#franja_proyectos').css('height', alto);

	
});
	
}); /* / document ready */



