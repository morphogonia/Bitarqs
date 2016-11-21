<html>
<head>
	<title>Bitar Arquitectos</title>
	<?php include('inc/head.inc'); ?>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.contacto.js"></script>
</head>
<body>
<?php include('inc/conection.inc'); ?>
<?php include('inc/headeren.inc'); ?>

<div class="franja_gray tl"><div id="wrapperContacto">

<div class="w450 floatl">
	<h2 class="tsw mt20 mb20">Bitar Arquitectos</h2>
	<p class="trojo">Milton 51, col. Anzures, México, D.F.</p>
	<p class="trojo">Tel +52 (55) 5520-1500</p>
	<p class="trojo"><a href="mailto:info@bitarqs.com" target="_blank" class="contacto">info@bitarqs.com</a></p>
	<a href="https://www.facebook.com/pages/Bitar-Arquitectos/198317376958816" target="_blank" id="c_facebook">Like us in Facebook</a>
</div><!-- -->

<div class="w450 tl floatr">

<!-- FORM -->
<form id="myform" name="myform" action="#" method="POST">
	
<label>Name</label>
<input type="text" name="nombre" id="nombre" class="requerido"/>
					
<label>E-mail</label>
<input type="text" name="email" id="email" class="requerido"/>
			
<label>Message</label>
<textarea name="comments" id="comments" class="requerido"></textarea>
		
<div id="thx"></div>	
<input type="submit" value="Send" name="submit" id="submit" class="boton"/>
<div class="clearfix"></div><!-- /clearfix -->

</form><!-- FORM -->	
</div><!-- -->

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER --></div><!-- / franja_gray -->

<?php include('inc/footeren.inc'); ?>
</body>
</html>
