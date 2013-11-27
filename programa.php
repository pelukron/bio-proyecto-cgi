<html>
<head>
<title>Respuesta</title>
</head>
<body  BGCOLOR='#151515'>
<center>
<br><br>
<p><span style='color:#FBF2EF;'>
<?php
$var= $_REQUEST['banda'];
echo nl2br("Banda: $var\n\n");
$pagina = file_get_contents("http://www.metal-archives.com/bands/$var");
//$patron = '|<dd><a href="http://www.metal-archives.com/lists/US">(.*?)</a></dd>|';
if(preg_match('|<dd><a href="http://www.metal-archives.com/lists/US">(.*?)</a></dd>|', $pagina, $pais) == true)
{
//busca el pais de origen
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
//busca la localidad de la banda
$local = $local[1];
echo nl2br("Local: $local\n");
$patron = '|<dt>Status:</dt>\s+<dd class="active">(.*?)</dd>|is';
preg_match($patron, $pagina, $estado);
//busca el estado de proveniencia
$estado = $estado[1];
echo nl2br("Estado: $estado\n");
$patron = '|<dt>Formed in:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $anio);
//busca el anio de inicio
$anio = $anio[1];
echo nl2br("Inicio: $anio\n");
$patron = '|<dt>Genre:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $genero);
//busca el genero 
$genero = $genero[1];
echo nl2br("Genero: $genero\n");
$patron = '|<dt>Lyrical themes:</dt>\s+<dd>(.*?)</dd>|is';
preg_match($patron, $pagina, $temas);
//busca los temas hablados en las canciones
$temas = $temas[1];
echo nl2br("Temas hablados: $temas\n");
$arr = array($pais, $local, $estado, $anio, $genero, $temas);
?>
</p>
</span>
<form action="base.cgi"                                                                                                                                                                                                                                                                                                                                                                                               method = "post" name="$arr">
<input align = "right" type = "submit" value= "Regresar"></center><br>
<center><img src = "des.gif"></center>
</body>
</html>

