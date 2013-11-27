#!/usr/bin/perl
#use DBI;
print "Content-type: text/html\n\n"; 
#Datos de la conexiÃ³n
print "<html>\n";
print " <head>\n";
print "   <title>Buscador de bandas lml!!</title>\n";
print "  </head>\n";
print "  <body  BGCOLOR='#CEE3F6 '>\n";
print "<center>\n";
print "      <p><h1>Ingrese el nombre de la banda: </h1></p>\n";
print "<form action='base.cgi' method = 'post' name='input'>\n";
print "<input type='text' name='banda' size='20'>";
print "<input type='submit'  value='Buscar'>\n";
print "</center>\n";
print "  </body>\n";
print "</html>\n";
