<?php
	error_reporting(E_ALL | E_NOTICE | E_STRICT ) ;
	include "std.php";
	debutPage("Des services et des personnes - Mise &agrave; jour","strict") ;
     	debutSection() ;
     ##################### ajout de données ###########################################
	anonymousConnect("test") ;
	#on test le paramètre passé dans url
	if(isset($_POST["nomServ"])){
		$nomServ = $_POST["nomServ"];

	#ajout du champ dans la table
		$ajout = " insert into serv225 (nom) values (\"$nomServ\")";
		$sql = mysql_query("$ajout");
		if (!$sql) {
		   p();
		   echo "L'insertion dans la table Serv225 s'est mal pass&eacute;e, le message d'erreur est : " ;
		   echo mysql_error() ;
		   die("\nInsertion &eacute;chou&eacute") ;
		   finp();
		} ; # fin si
		p(); echo "Le service $nomServ a &eacute;t&eacute; cr&eacute;&eacute;"; finp();

	}
	
	finSection();
	finPage();
?>
