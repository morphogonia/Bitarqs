
<!-- div que cierra franja_proyectos -->
<div id="franja_proyectos_close"></div>

<div id="wrapperFranjaProyectos">

<?php
include('inc/conection.inc');
$id = $_GET['id'];

echo('<div id="imagenProyectos">');
echo('<a href="#" class="cerrar">CERRAR</a>');

/* Se crea el array de images */
$images = "SELECT * FROM tb_images WHERE proyecto='$id' order by id";
$result = mysql_query($images);
$imgs = array();
while($line = mysql_fetch_array($result)){
	$imgs[] = $line['image'];
}
echo('<script>var images=[];</script>');
for($i = 0; $i < count($imgs); ++$i) {
    echo("<script>images.push('images/". $imgs[$i] ."');</script>");
}
/**/

echo('<a href="#" id="hsiguiente">Siguiente</a>');

echo('<div id="foto">');
echo('<img src="" alt="Bitarqs Arquitectura" id="imagen" />');
echo('</div>');

echo('<a href="#" id="anterior">Atrás</a>');
echo('<a href="#" id="siguiente">Siguiente</a>');
echo('<div class="clearfix"></div>');
echo('</div>');

$title = @mysql_query("SELECT * FROM tb_proyectos WHERE id = '$id'");
$var_title = mysql_fetch_array($title);

echo('<div id="datosProyectos">');
echo('<p><span>'. utf8_encode($var_title['label']).'</span>, '. utf8_encode($var_title['year']));

if ($var_title['ubicacion'] != NULL) {
	echo(', '. utf8_encode($var_title['ubicacion']));
}

if ($var_title['medidas'] != NULL) {
	echo(', '. utf8_encode($var_title['medidas']).' m<superscript>2</superscript>');
}
echo('</p></div>');

echo('<div class="clearfix"></div>');
?>

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / wrapperFranjaProyectos -->
<div class="clearfix"></div><!-- /clearfix -->

<script>
$(document).ready(function(){
	
	var i=0;
	var total=images.length;
		
	$('div#foto').hide();
	$('div#datosProyectos, a#anterior, a#siguiente, a.cerrar, a#hanterior, a#hsiguiente').hide();
	
	var primImg = images[i];
	var img = new Image();
	$(img).load(function () {
		$('div#foto').html(this);
		var ancho = this.width+8;
		var alto = this.height;
		var altoTotal = $(window).height();
		var mtop = ((altoTotal-alto)/2)-40;
		if (altoTotal<=alto) {
			var mtop = 10;
		}
		
		$('div#wrapperFranjaProyectos').css({'width' : ancho, 'margin' : '0 auto 0 auto', 'margin-top' : mtop});
		$('a#hsiguiente, a#hanterior').css({'height' : alto});
		$('div#foto').fadeIn('slow', function(){
			$('div#datosProyectos').fadeIn('fast');
			$('a#hsiguiente').show();
			$('a#siguiente, a.cerrar').fadeIn('fast');
		});		
	}).attr('src', primImg);
	
	$('a#siguiente, a#hsiguiente').click(function(){
		$('div#datosProyectos').hide();
		$('div#foto').html('');
		$('div#foto').hide();
		$('a#anterior, a#siguiente, a.cerrar, a#hanterior, a#hsiguiente').hide();
		
		i++;
		if (i>=total) {
			i=0;
		}
		
		$('#tracer').html(i);
		
		var sigImg = images[i];
		var img = new Image();
		$(img).load(function () {
			$('div#foto').html(this);
			var ancho = this.width+8;
			var alto = this.height;
			var altoTotal = $(window).height();
			var mtop = ((altoTotal-alto)/2)-20;
			if (altoTotal<=alto) {
				var mtop = 10;
			}
			
			$('div#wrapperFranjaProyectos').css({'width' : ancho, 'margin' : '0 auto 0 auto', 'margin-top' : mtop});
			$('a#hsiguiente, a#hanterior').css({'height' : alto});
			$('div#foto').fadeIn('slow', function(){
				$('div#datosProyectos').fadeIn('fast');
				$('a#hsiguiente').show();
				$('a#siguiente, a.cerrar').fadeIn('fast');
				if (i==0) {
					$('a#anterior').hide();
				} else {
					$('a#anterior').show();
				}
			});		
		}).attr('src', sigImg);	
	});

	$('a#anterior, a#hanterior').click(function(){
		$('div#datosProyectos').hide();
		$('div#foto').html('');
		$('div#foto').hide();
		$('a#anterior, a#siguiente, a.cerrar, a#hanterior, a#hsiguiente').hide();
		
		i--;
		if (i<0) {
			i=total-1;
		}
				
		var sigImg = images[i];
		var img = new Image();
		$(img).load(function () {
			$('div#foto').html(this);
			var ancho = this.width+8;
			var alto = this.height;
			var altoTotal = $(window).height();
			var mtop = ((altoTotal-alto)/2)-20;
			if (altoTotal<=alto) {
				var mtop = 10;
			}			
			$('div#wrapperFranjaProyectos').css({'width' : ancho, 'margin' : '0 auto 0 auto', 'margin-top' : mtop});
			$('a#hsiguiente, a#hanterior').css({'height' : alto});
			$('div#foto').fadeIn('slow', function(){
				$('div#datosProyectos').fadeIn('fast');
				$('a#hsiguiente').show();
				$('a#siguiente, a.cerrar').fadeIn('fast');
				if (i==0) {
					$('a#anterior').hide();
				} else {
					$('a#anterior').show();
				}
			});		
		}).attr('src', sigImg);
	
	});
	
	$('div#franja_proyectos_close, a.cerrar').click(function(){
		$('div#datosProyectos').fadeOut(300);
		$('div#foto').html('');
		$('div#franja_proyectos').fadeOut(300);
	});	
	
});
</script>



