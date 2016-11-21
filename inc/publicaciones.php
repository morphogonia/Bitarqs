<html>
<head>
	<title>Bitar Arquitectos</title>
	<?php include('inc/head.inc'); ?>
	<script type="text/javascript" src="js/jquery.publicaciones.js"></script>
</head>

<body>
<?php include('inc/conection.inc'); ?>
<?php include('inc/header.inc'); ?>

<!-- CONTENIDO CARGA JQUERY -->
<div id="franja_proyectos"></div><!-- / franja_proyectos -->

<div class="franja_blue"><div class="wrapper">
<h2>Publicaciones</h2>
	
<?php
$publicaciones = "SELECT * FROM tb_publicacionespaginas ORDER BY id DESC";
$result = mysql_query($publicaciones);
while ($line = mysql_fetch_array($result)) {
	echo('<div class="bloquePublicaciones mr10">');
	echo('<a href="#" target="_self" rel="'. utf8_encode($line['id']) .'" class="pub">');
	echo('<div class="bloquePublicacionesImgs">');
	echo('<img src="images/'. utf8_encode($line['thumbnail']) .'" alt="Bitarqs Arquitectura" />');
	echo('</div>');
		
	$temp = $line['cat'];
	$paginas = "SELECT * FROM tb_publicaciones WHERE id='$temp'";
	$resultt = mysql_query($paginas);
	while ($lline = mysql_fetch_array($resultt)) {
		echo('<h2>'. utf8_encode($lline['year']) .'</h2>');
	}
	
	echo('</a><div class="bloquePublicacionesHover"></div></div>');
}
?>
	
<div class="clearfix"></div><!-- /clearfix -->
<div id="cargando"><img src="images/ajax-loader.gif" alt="Cargando contenido"/></div><!-- / preloader -->
</div><!-- / WRAPPER --></div><!-- / franja_blue -->

<?php include('inc/footer.inc'); ?>
</body>
</html>

