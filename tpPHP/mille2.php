<?php

require "debutpage.php" ;

echo "<h1>Milles terrestres</h1>\n" ;

echo "<blockquote>\n" ;
echo "<p><span class='gbleu'>Rappel&nbsp;</span>: un <em>mille terrestre</em> vaut 1&nbsp;609 mètres.</p>\n" ;
echo "</blockquote>\n" ;

# début de tableau

echo "<blockquote>\n" ;
echo " <table border='1' class='collapse' cellpadding='10' cellspacing='10'>\n" ;

# entetes des colonnes

echo "  <tr class='jaune_pastel'>\n" ;
echo "    <th>Miles</th>\n" ;
echo "    <th>Km</th>\n" ;
echo "  </tr>\n" ;

# remplissage du tableau

for ($idb=1;$idb<=15;$idb++) {
  if ($idb<=10) {
    $miles = $idb ;
  } else {
    $miles = $miles*2 ;
  } ; # fin si
  $km    = sprintf("%0.2f",$miles*1.609) ;
  echo "  <tr>\n" ;
  echo "    <td align='right'> $miles </td>\n" ;
  echo "    <td align='right'> $km    </td>\n" ;
  echo "  </tr>\n" ;
} ; # fin pour idb

# fin de tableau

echo "</table>\n" ;
echo "</blockquote>\n" ;

require "finpage.php" ;
?> 