package busqueda;
use strict; 
use DBI;
use busqueda;
sub new {
    my $this=shift; #Cogemos la clase que somos o una referencia a la clase (si soy un objeto)
    my $class = ref($this) || $this; #Averiguo la clase a la que pertenezco

    my $self={}; #Inicializamos la tabla hash que contendrá las var. de instancia (NOMBRE Y EDAD)
    $self ->{VAL1} =0 ; #La clase Persona nace sin nombre  
    $self ->{VAL2} =0 ; #La clase Persona se construye con 0 años

    bless $self, $class; #Perl nos tiene que dar el visto bueno (bendecirla)
    return ($self); #Devolvemos la clase recién construida
  }

sub guardar{
       my $self=shift; #El primer parámetro de un metodo es la  clase
       #$self->{VAL1}=shift if (@_);
       my @arr;
       my $var = shift if (@_);
       my $var2 = shift if (@_); 
       my $var3 = shift if (@_); 
       my $var4 = shift if (@_); 
       my $var5 = shift if (@_); 
       my $var6 = shift if (@_); 
       my $var7 = shift if (@_);
       $db="Bandas"; 
       $tabla="banda";
       $userid="root"; 
       $passwd="root";
       $connectionInfo="DBI:mysql:database=$db"; 
       # Realizamos la conexión a la base de datos 
       $dbh = DBI->connect($connectionInfo,$userid,$passwd); 
       # Preparar la sentencia de insercion en la base de datos
       $sth = $dbh->prepare(
         "insert into $tabla (nombre, pais,local, estado, origen, genero, temas, actividad) values ($var,$var2,$var3,$var4,$var5,$var6, $var7)"
         );
 ## Insertar un registro en la tabla
      $sth->execute();
      $sth->finish();
      $dbh->disconnect;
}

sub consulta
{
     my $var = shift if (@_);
     $db="Bandas";
     $tabla="banda";
     $userid="root"; 
     $passwd="root";                  
     $connectionInfo="DBI:mysql:database=$db"; 
     # Realizamos la conexión a la base de datos 
     $dbh = DBI->connect($connectionInfo,$userid,$passwd);  
     # Cierra el archivo
     $query = "SELECT from $tabla nombre, pais,local, estado, origen, genero, temas, actividad where nombre = '$var'";
     $sth->execute();
     $sth->blind_column($undef, $nombre, $pais,$local, $estado, $origen, $genero,$temas, $actividad);
     my @arr = ($nombre, $pais,$local, $estado, $origen, $genero,$temas, $actividad);
     # Indicamos que hemos acabado y desconectamos
     $sth->finish();
     $dbh->disconnect;
     return @arr;
}

sub xml{
       my $self=shift; #El primer parámetro de un metodo es la  clase
       #$self->{VAL1}=shift if (@_);
       my @arr;
       my $var = shift if (@_);
       my $var2 = shift if (@_); 
       my $var3 = shift if (@_); 
       my $var4 = shift if (@_); 
       my $var5 = shift if (@_); 
       my $var6 = shift if (@_);  
       # Abre el archivo (o lo crea si no existe)
       # Abre el archivo (o lo crea si no existe)
       open (FILE, ">>/home/david/Documentos/perl/bandas$var.xml");
       print FILE "<Historial>\n";       
       print FILE "      <Banda>$var</Banda>\n";
       print FILE "             <pais>$var2 </pais>\n";
       print FILE "             <local>$var3</local>\n";      
       print FILE "             <estado>$var4</estado>\n";
       print FILE "             <origen>$var5</origen>\n";
       print FILE "             <temas>$var6</temas>\n";
       print FILE "             <actividad>$var7</actividad>\n";
       print FILE "</Historial>\n";
  #Cierra el archivo
      close FILE;  
 # Cierra el archivo
}
1;
