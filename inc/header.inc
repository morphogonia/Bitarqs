<div id="header" class="wrapper">

<div id="logo">
	<a href="indexesp.php" target="_self"><img src="images/Bitarqs_logo.png" alt="Bitarqs Arquitectos" /></a>	
	<p><a href="index.php" target="_self">ENGLISH</a></p>
</div><!-- / logo -->

<ul id="nav">
	<li class="color1"><a href="indexesp.php" target="_self" class="ver">Inicio</a><div class="navHover"></div></li>
	<li class="color2"><a href="#">Proyectos</a><div class="navHover"></div>
		<ul class="subnav">
			<?php
			$categorias = "SELECT * FROM tb_categorias ORDER BY id ASC";
			$result = mysql_query($categorias);
			while ($line = mysql_fetch_array($result)) {
				echo('<li class="color'. utf8_encode($line['id']) .'"><a href="proyectos.php?id='. utf8_encode($line['id']) .'" target="_self">'. utf8_encode($line['label']) .'</a></li>');
			}	
			?>
		</ul>
	</li>
	<li class="color3"><a href="publicaciones.php" target="_self" class="ver">Publicaciones</a><div class="navHover"></div></li>
	<li class="color4"><a href="antesydespues.php" target="_self" class="ver">Antes & Después</a><div class="navHover"></div></li>
	<li class="color5"><a href="contacto.php" target="_self" class="ver">Contacto</a><div class="navHover"></div></li>
    <div class="clearfix"></div><!-- /clearfix -->
</ul>

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / HEADER & WRAPPER -->
