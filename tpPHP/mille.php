<?php
require "debutpage.php"

echo "<h1>Milles</h1>\n";
echo "<blockquote>\n";
echo "<p><span class='gbleu'>Rappel&nbsp;:</span> un <em>mille terrestre</em> vaut 1 609 m&egrave;tres.</p>\n";
echo "</blockquote>\n";

# début du tableau

echo "<table border = '1' class='collapse' cellpadding='10' cellspacing='10'>\n";

# entetes des colonnes

echo "<tr class='jaune_paqstel'>\n";
echo "	<th>Miles</th>\n";
echo "	<th>Km</th>\n";
echo "</tr>\n";

#Remplissage du tableau
for($i=1;i<=15;$i++;){
	if($i<=10){
		$mile = $i;
	}
	else{
		$mile = $mile*2;
	};#finSi
$km = sprintf("%0.2f",$mile*1.609);
echo "  <tr>\n" ;
echo "    <td align='right'> $miles </td>\n" ;
echo "    <td align='right'> $km </td>\n" ;
echo "  </tr>\n" ; 
}; #finPour

require "finpage.php"
?>
