<div id="header" class="wrapper">

<div id="logo">
	<a href="index.php" target="_self"><img src="images/Bitarqs_logo.png" alt="Bitarqs Arquitectos" /></a>	
	<p><a href="indexesp.php" target="_self">ESPAÑOL</a></p>
</div><!-- / logo -->

<ul id="nav">
	<li class="color1"><a href="index.php" target="_self" class="ver">Home</a><div class="navHover"></div></li>
	<li class="color2"><a href="#">Projects</a><div class="navHover"></div>
		<ul class="subnav">
			<?php
			$categorias = "SELECT * FROM tb_categorias ORDER BY id ASC";
			$result = mysql_query($categorias);
			while ($line = mysql_fetch_array($result)) {
				echo('<li class="color'. utf8_encode($line['id']) .'"><a href="projects.php?id='. utf8_encode($line['id']) .'" target="_self">'. utf8_encode($line['labelen']) .'</a></li>');
			}	
			?>
		</ul>
	</li>
	<li class="color3"><a href="publications.php" target="_self" class="ver">Publications</a><div class="navHover"></div></li>
	<li class="color4"><a href="beforeandafter.php" target="_self" class="ver">Before & After</a><div class="navHover"></div></li>
	<li class="color5"><a href="contact.php" target="_self" class="ver">Contact</a><div class="navHover"></div></li>
    <div class="clearfix"></div><!-- /clearfix -->
</ul>

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / HEADER & WRAPPER -->
