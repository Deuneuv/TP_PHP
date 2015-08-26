<?php

# ceci est une page standard pour obtenir une page XHTML Strict avec php

error_reporting(E_ALL | E_NOTICE | E_STRICT ) ;

$titre = "" ; # compléter le titre de la page ici

echo "<?xml version='1.0' encoding='ISO-8859-1' ?>\n" ;
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>\n" ;
echo "<html xmlns='http://www.w3.org/1999/xhtml' lang='fr' xml:lang='fr'>\n" ;
echo "<head>\n" ;
echo "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />\n" ;
echo "<link rel='stylesheet' type='text/css' href='std.css'  title='gh' />\n" ;
echo "<title>  $titre </title>\n" ;
echo "</head>\n" ;
echo "<body>\n" ;

# pour finir la page, il faut inclure finpage.php

?>
