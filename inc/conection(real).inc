<?php
$bdconex = @mysql_connect('mysql','ushbitar','w3bm4st3r');

if (!$bdconex) {
	echo '<h1>Por el momento la base de datos no est&aacute; disponible.</h1> ';
	exit();
}

if (! @mysql_select_db('dbbitarqs', $bdconex)){
	echo '<h1>ERROR3: Imposible localizar la base de datos en este momento.</h1>';
	exit();
}
?>

