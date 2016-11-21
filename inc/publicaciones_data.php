
<!-- div que cierra franja_proyectos -->
<div id="franja_proyectos_close"></div>

<div id="wrapperFranjaProyectos">

<?php
include('inc/conection.inc');
$id = $_GET['id'];

$idm = $id-1;
echo('<script>var i='.$idm.';</script>');

echo('<div id="imagenProyectos">');
echo('<a href="#" class="cerrar">CERRAR</a>');

/* Se crea el array de images */
$images = "SELECT * FROM tb_publicacionespaginas ORDER BY id ASC";
$result = mysql_query($images);
$imgs = array();
$titus = array();
$anii = array();
while($line = mysql_fetch_array($result)){
	$imgs[$line['id']] = $line['image'];
	$ctt = $line['cat'];
	$ttitus = "SELECT * FROM tb_publicaciones WHERE id = '$ctt'";
	$resulti = mysql_query($ttitus);
	while($linii = mysql_fetch_array($resulti)){
		$titus[$line['id']] = utf8_encode($linii['label']);
		$anii[$line['id']] = utf8_encode($linii['year']);
	}
}
echo('<script>var images=[];</script>');
echo('<script>var titus=[];</script>');
echo('<script>var anii=[];</script>');
for($i = 1; $i < 45; ++$i) {
    echo("<script>images.push('images/". $imgs[$i] ."');</script>");
    echo("<script>titus.push('". $titus[$i] ."');</script>");
    echo("<script>anii.push('". $anii[$i] ."');</script>");
}
/**/

echo('<a href="#" id="hsiguiente">Siguiente</a>');

echo('<div id="foto">');
echo('<img src="" alt="Bitarqs Arquitectura" id="imagen" />');
echo('</div>');

echo('<a href="#" id="anterior">Anterior</a>');
echo('<a href="#" id="siguiente">Siguiente</a>');

echo('<div class="clearfix"></div>');
echo('</div>');

/**/

$pass = @mysql_query("SELECT * FROM tb_publicacionespaginas WHERE id = '$id'");
$var_pass = mysql_fetch_array($pass);
$ct = $var_pass['cat'];
$title = @mysql_query("SELECT * FROM tb_publicaciones WHERE id = '$ct'");
$var_title = mysql_fetch_array($title);

echo('<div id="datosProyectos">');
echo('<p><span>'. utf8_encode($var_title['label']).'</span>, '. utf8_encode($var_title['year']));

echo('</p></div>');

/**/
echo('<div class="clearfix"></div>');
?>

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / wrapperFranjaProyectos -->
<div class="clearfix"></div><!-- /clearfix -->

<script>
$(document).ready(function(){

	var total=images.length;
		
	$('div#foto').hide();
	$('div#datosProyectos, a#anterior, a#siguiente, a.cerrar, a#hsiguiente').hide();
	
	var primImg = images[i];
	var img = new Image();
	$(img).load(function () {
		$('div#foto').html(this);
		var ancho = this.width+8;
		var alto = this.height;
		var altoTotal = $(window).height();
		var mtop = ((altoTotal-alto)/2)-30;
		if (altoTotal<=alto) {
			var mtop = 10;
		}
		
		$('div#wrapperFranjaProyectos').css({'width' : ancho, 'margin' : '0 auto 0 auto', 'margin-top' : mtop});
		$('a#hsiguiente, a#hanterior').css({'height' : alto});
		$('div#foto').fadeIn('slow', function(){
			$('div#datosProyectos').fadeIn('fast');
			$('a#hsiguiente').show();
			$('a#anterior, a#siguiente, a.cerrar').fadeIn('fast');
		});		
	}).attr('src', primImg);
	
	$('a#siguiente, a#hsiguiente').click(function(){	
		$('div#foto').hide();
		$('div#datosProyectos').hide();
		$('a#anterior, a#siguiente, a.cerrar, a#hanterior, a#hsiguiente').hide();
				
		i--;
		if (i<0) {
			i=total-1;
		}
		
		var sigImg = images[i];		
		var img = new Image();
		$(img).load(function () {
			$('div#foto').html(this);
			$('div#datosProyectos').html('<p><span>'+titus[i]+'</span>, '+anii[i]);
			var ancho = this.width+8;
			var alto = this.height;
			var altoTotal = $(window).height();
			var mtop = ((altoTotal-alto)/2)-30;
			if (altoTotal<=alto) {
				var mtop = 10;
			}
			
			$('div#wrapperFranjaProyectos').css({'width' : ancho, 'margin' : '0 auto 0 auto', 'margin-top' : mtop});
			$('a#hsiguiente').css({'height' : alto});
			$('div#foto').fadeIn('slow', function(){
				$('div#datosProyectos').fadeIn('fast');
				$('a#hsiguiente, a#hanterior').show();
				$('a#anterior, a#siguiente, a.cerrar').fadeIn('fast');
			});		
		}).attr('src', sigImg);	
	});

	$('a#anterior').click(function(){
		$('div#foto').hide();
		$('div#datosProyectos').hide();
		$('a#anterior, a#siguiente, a.cerrar, a#hsiguiente').hide();
		
		i++;
		if (i>=total) {
			i=0;
		}
		
		var sigImg = images[i];
		var img = new Image();
		$(img).load(function () {
			$('div#foto').html(this);
			$('div#datosProyectos').html('<p><span>'+titus[i]+'</span>, '+anii[i]);
			var ancho = this.width+8;
			var alto = this.height;
			var altoTotal = $(window).height();
			var mtop = ((altoTotal-alto)/2)-30;
			if (altoTotal<=alto) {
				var mtop = 10;
			}			
			$('div#wrapperFranjaProyectos').css({'width' : ancho, 'margin' : '0 auto 0 auto', 'margin-top' : mtop});
			$('a#hsiguiente, a#hanterior').css({'height' : alto});
			$('div#foto').fadeIn('slow', function(){
				$('div#datosProyectos').fadeIn('fast');
				$('a#hsiguiente').show();
				$('a#anterior, a#siguiente, a.cerrar').fadeIn('fast');
			});		
		}).attr('src', sigImg);
	
	});
	
	$('div#franja_proyectos_close, a.cerrar').click(function(){
		$('div#franja_proyectos').fadeOut(300);
	});	
	
});
</script>



