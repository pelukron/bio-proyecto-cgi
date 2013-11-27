<html>
<head>
<title>Respuesta</title>
</head>
<body  bBGCOLOR='#CEE3F6'>
<center>
<br><br>
<?php
$var= $_REQUEST['banda'];
echo nl2br("Banda: $var\n\n");
$pagina = file_get_contents("http://www.metal-archives.com/bands/$var");
//$patron = '|<dd><a href="http://www.metal-archives.com/lists/US">(.*?)</a></dd>|';
if(preg_match('|<dd><a href="http://www.metal-archives.com/lists/US">(.*?)</a></dd>|', $pagina, $pais) == true)
{
$pais = $pais[1];
echo nl2br("Pais: $pais\n");
}
$patron = '|<dd><a href="http://www.metal-archives.com/lists/CH">(.*?)</a></dd>|';
if(preg_match($patron, $pagina, $pais) == true)
{
$pais = $pais[1];
echo nl2br("Pais: $pais\n");
}
$patron = '|<dd><a href="http://www.metal-archives.com/lists/GB">(.*?)</a></dd>|';
if(preg_match($patron, $pagina, $pais) == true)
{
$pais = $pais[1];
echo nl2br("Pais: $pais\n");
}
$patron = '|<dd><a href="http://www.metal-archives.com/lists/SE">(.*?)</a></dd>|';
if(preg_match($patron, $pagina, $pais) == true)
{
$pais = $pais[1];
echo nl2br("Pais: $pais\n");
}
$patron = '|<dt>Location:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $local);
$local = $local[1];
echo nl2br("Local: $local\n");
$patron = '|<dt>Status:</dt>\s+<dd class="active">(.*?)</dd>|is';
preg_match($patron, $pagina, $estado);
$estado = $estado[1];
echo nl2br("Estado: $estado\n");
$patron = '|<dt>Formed in:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $anio);
$anio = $anio[1];
echo nl2br("Inicio: $anio\n");
$patron = '|<dt>Genre:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $genero);
$genero = $genero[1];
echo nl2br("Genero: $genero\n");
$patron = '|<dt>Lyrical themes:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $temas);
$temas = $temas[1];
echo nl2br("Temas hablados: $temas\n");
//$piezas = explode(" ", $pagina);
//$piezas = explode($patron, $pagina);
//echo " $pagina[$pos]";
//echo "$pagina";
//(.*?)
?>
<form action="otro.cgi" method = "post" name="input">
<input align = "right" type = "submit" value= "Guardar"></center>
</center>
</body>
</html>

