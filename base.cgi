#!/usr/bin/perl
package busqueda;
use busqueda;
my $variable = <STDIN>;
$op = busqueda->new($variable);
if($variable != "")
{
my @variable = split(/[=&+]/, $variable);
$op->guardar(@variable[0],@variable[1],@variable[2],@variable[3],@variable[4],@variable[5],@variable[6]);
}
my @arr = $op->consulta();
$op->xml(@variable[0],@variable[1],@variable[2],@variable[3],@variable[4],@variable[5],@variable[6]);
print "Content-type: text/html\n\n";
print "<html>\n";
print " <head>\n";
print "   <title>Buscador de bandas</title>\n";
print "  </head>\n";
print "  <body  BGCOLOR='#CEE3F6'>\n";
print "<center>\n";
print "      <p><h1>Resultado de la consulta</h1></p>\n";
print "      <p>@arr[0]\n@arr[1]\n@arr[2]\n@arr[3]\n@arr[4]\n@arr[5]\n</p>\n";
print "<center>\n";
print "<p></p>\n";
print "  </body>\n";
print "</html>\n";
