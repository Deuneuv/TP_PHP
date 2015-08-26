<?php
if($argc<3){
echo"Nombres d'arguments insuffisants.\n";
echo"Si c'est php tp1Exo2.php 26 cm par exemple qui est saissi, 26 cm sera converti en pouces.\n"; 
}
else{
$unity = $argv[2];
if($unity=="cm"){
	$converse = $argv[1]/2.54;
	echo $argv[1]," cm vaut $converse pouces.\n";
}
else{
	$converse = $argv[1]*2.54;
	echo $argv[1]," pouces vaut $converse cm.\n";
}
}
?>
