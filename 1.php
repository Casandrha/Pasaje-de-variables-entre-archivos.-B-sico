<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pasar variables de un archivo a otro</title>
</head>

<body bgcolor=#F2F5A9>
<?php

$producto = $_GET["producto"];
$caracteristicas = $_GET["caracteristicas"];
$precio = $_GET["precio"];
$imagen = $_GET["imagen"];

echo ("<b>El producto elegido es:</b> "."".$producto);
echo ("<br/>");
echo ("<br/>");
echo ("<b>Características principales:</b> "."<br/>".$caracteristicas);
echo ("<br/>");
echo ("<br/>");
echo ("<b>Su precio es</b>: " .$precio );
echo ("<br/>");
echo ("<br/>");
?> 
<br/>
<br/>
<br/>
<br/>
<img src="<?php echo $imagen; ?>.jpg" />
<br/>
<br/>
<a href="ejercicio.html">Volver a la página anterior</a></p>
</body>
</html>
