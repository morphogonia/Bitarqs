<html>
<head>
	<title>Bitar Arquitectos</title>
	<?php include('inc/head.inc'); ?>	
</head>
<body>
<?php include('inc/conection.inc'); ?>
<?php include('inc/headeren.inc'); ?>

<div class="franja_blue"><div class="wrapper">
	<h2>Projects</h2>
	<?php
	$categorias = "SELECT * FROM tb_categorias ORDER BY id ASC";
	$result = mysql_query($categorias);
	$i=1;
	while ($line = mysql_fetch_array($result)) {
		if($i==1) { echo('<div class="bloqueIndex mr10 ml20">'); $i++; } else if($i<3) { echo('<div class="bloqueIndex mr10">'); $i++; } else { echo('<div class="bloqueIndex">'); }		
		echo('<a href="projects.php?id='. utf8_encode($line['id']) .'" target="_self">');
		echo('<img src="images/'. utf8_encode($line['image']) .'" alt="Bitarqs Arquitectura'. utf8_encode($line['label']) .'" /><p>'. utf8_encode($line['labelen']).'</p>');
		echo('</a><div class="bloqueIndexHover"></div></div>');
	}	
	?>
<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER --></div><!-- / franja_blue -->

<div class="franja_gray"><div class="wrapper">
<div class="w450 floatl">
	<p class="trojo mt50">Founded by <strong>Héctor Bitar</strong> in 2002, formed by architects, engineers and designers. We are dedicated to architecture and interior design.</p>
</div><!-- -->

<div class="w450 floatr">
	<p class="mt20 mb16">Integrating our client's needs with the ideal relation of spaces, we create enticing ambiances in complete harmony.</p>
	<p>Our activities include conceptualization, architectural project, interior design, furniture design, decoration, museography, scenography and construction supervision.</p>
</div><!-- -->
<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER --></div><!-- / franja_gray -->

<?php include('inc/footeren.inc'); ?>
</body>
</html>
