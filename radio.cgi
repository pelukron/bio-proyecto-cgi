#!/usr/bin/perl
#use DBI;
print "Content-type: text/html\n\n"; 
#Datos de la conexión
print "<html>\n";
print " <head>\n";
print "   <title>Buscador de bandas lml!!</title>\n";
print "  </head>\n";
print "  <body  BGCOLOR='#151515'>\n";
print "<center>\n";
print "      <p><h1><span style='color:#8A0808;'>Ingrese el nombre de la banda: </span></h1></p>\n";
print "<form action='programa.php' method = 'post' name='input'>\n";
print "<p>Seleccione el nombre de la banda: <br></p>\n";
print "<input type='text' name='banda' size='20'><br>";
print "<input type='submit'  value='Buscar en web'>\n";
print "<input type='submit' value='Buscar en base de datos'>\n";
print "<br><img src='head.jpg'>";
print "</center>\n";
print "  </body>\n";
print "</html>\n";
