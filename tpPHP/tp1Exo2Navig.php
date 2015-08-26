<?php
require "debutpage.php";
$test = (isset($_GET["val"]) and isset($_GET["unit"]));

if($test==0){
echo"Nombres d'arguments insuffisants.\n";
}
else{
echo"<h2>Conversion</h2>";

$unity = $_GET["unit"];
$valeur = $_GET["val"];
if($unity=="cm"){
	$converse = $valeur/2.54;
	$arrondi = sprintf("%0.2f",$converse);
	echo $valeur," cm vaut $arrondi pouces.\n";
}
else{
	$converse = $valeur*2.54;
	$arrondi = sprintf("%0.2f",$converse);
	echo $valeur," pouces vaut $arrondi cm.\n";
};
}
require "finpage.php";
?>
