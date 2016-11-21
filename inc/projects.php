<html>
<head>
	<title>Bitar Arquitectos</title>
	<?php include('inc/head.inc'); ?>	
	<script type="text/javascript" src="js/jquery.projects.js"></script>
</head>
<body>
<?php include('inc/conection.inc'); ?>
<?php include('inc/headeren.inc'); ?>

<!-- CONTENIDO CARGA JQUERY -->
<div id="franja_proyectos"></div><!-- / franja_proyectos -->

<div class="franja_blue"><div class="wrapper">
<?php
$id = $_GET['id'];
$title = @mysql_query("SELECT * FROM tb_categorias WHERE id = '$id'");
$var_title = mysql_fetch_array($title);
echo('<h2>'. utf8_encode($var_title['labelen']). '</h2>');

$proyectos = "SELECT * FROM tb_proyectos WHERE categoria='$id' ORDER BY orden DESC";
$result = mysql_query($proyectos);
$i=1;

while ($line = mysql_fetch_array($result)) {
	if($i<3) { echo('<div class="bloqueProyectos mr10">'); $i++; } else { echo('<div class="bloqueProyectos">'); $i=1; }
	echo('<a href="#" target="_self" rel="'. utf8_encode($line['id']) .'" class="proj">');
	echo('<div class="bloqueProyectosImgs">');
	echo('<img src="images/'. utf8_encode($line['image']) .'" alt="Bitarqs Arquitectura'. utf8_encode($line['label']) .'" />');
	echo('</div>');
	echo('<h2>'. utf8_encode($line['labelen']) .'</h2>');
	echo('</a><div class="bloqueProyectosHover"></div></div>');
}	
?>
<div class="clearfix"></div><!-- /clearfix -->
<div id="cargando"><img src="images/ajax-loader.gif" alt="Cargando contenido"/></div><!-- / preloader -->
</div><!-- / WRAPPER --></div><!-- / franja_blue -->

<?php include('inc/footeren.inc'); ?>
</body>
</html>
