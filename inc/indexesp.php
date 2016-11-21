<html>
<head>
	<title>Bitar Arquitectos</title>
	<?php include('inc/head.inc'); ?>	
</head>
<body>
<?php include('inc/conection.inc'); ?>
<?php include('inc/header.inc'); ?>

<div class="franja_blue"><div class="wrapper">
	<h2>Proyectos</h2>
	<?php
	$categorias = "SELECT * FROM tb_categorias ORDER BY id ASC";
	$result = mysql_query($categorias);
	$i=1;
	while ($line = mysql_fetch_array($result)) {
		if($i==1) { echo('<div class="bloqueIndex mr10 ml20">'); $i++; } else if($i<3) { echo('<div class="bloqueIndex mr10">'); $i++; } else { echo('<div class="bloqueIndex">'); }		
		echo('<a href="proyectos.php?id='. utf8_encode($line['id']) .'" target="_self">');
		echo('<img src="images/'. utf8_encode($line['image']) .'" alt="Bitarqs Arquitectura'. utf8_encode($line['label']) .'" /><p>'. utf8_encode($line['label']).'</p>');
		echo('</a><div class="bloqueIndexHover"></div></div>');
	}	
	?>
<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER --></div><!-- / franja_blue -->

<div class="franja_gray"><div class="wrapper">
<div class="w450 floatl">
	<p class="trojo mt50">Grupo fundado por <strong>Héctor Bitar</strong> en el 2002, formado por arquitectos, ingenieros y diseñadores, dedicados a la arquitectura y diseño de interiores.</p>
</div><!-- -->

<div class="w450 floatr">
	<p class="mt20 mb16">Integramos las necesidades de nuestros clientes a la relación ideal de espacios, creando atmósferas en completa armonía.</p>
	<p>Nuestras actividades incluyen la conceptualización, desarrollo de proyectos arquitectónicos, diseño de interiores, diseño de mobiliario, decoración, museografía, escenografía y supervisión de construcción.</p>
</div><!-- -->
<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER --></div><!-- / franja_gray -->

<?php include('inc/footer.inc'); ?>
</body>
</html>
