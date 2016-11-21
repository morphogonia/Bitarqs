<html>
<head>
	<title>Bitar Arquitectos</title>
	<?php include('inc/head.inc'); ?>
	<script type="text/javascript" src="js/jquery.antesydespues.js"></script>
</head>

<body id="azul">
<?php include('inc/conection.inc'); ?>

<div id="parche">
<?php include('inc/headeren.inc'); ?>
</div>

<div class="franja_blue"><div class="wrapper">
	<h2>Before and After</h2>
	
	<?php
	$label = array();
	$img = array();
	echo('<script>
	var label=[];
	var img=[];
	</script>');
	
	$publicaciones = "SELECT * FROM tb_antesydespues ORDER BY id DESC";
	$result = mysql_query($publicaciones);
	while ($line = mysql_fetch_array($result)) {
		$label[] = $line['label'];
		$img[] = $line['image_eng'];
	}
		
	for($a=0; $a < count($img); ++$a) {
    	echo("<script>
    	label.push('". $label[$a] ."');
    	img.push('images/". $img[$a] ."');
    	</script>");
	}
	?>
	
<div id="wrapperFranjaPublicaciones">

<a href="#" id="hsiguiente">Siguiente</a>

<div id="contentImg"></div><!-- / contentImg -->

<a href="#" id="anterior">Back</a>
<a href="#" id="siguiente">Next</a>
<div class="clearfix"></div>

<div id="datosProyectos"></div><!-- / datosProyecto -->

</div><!-- / wrapperFranjaProyectos -->

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER --></div><!-- / franja_blue -->

</body>
</html>

