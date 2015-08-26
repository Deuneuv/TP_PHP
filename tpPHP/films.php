<?php
	include "std.php";
	debutPage("Connexion &agrave; une base de donn&eacute;es");
	#connexion sur forge pour l'utilisateur anonymous
	debutSection();
	$connect1 = @mysql_connect("forge","anonymous","anonymous");
	if(!connect1){
	p();
		echo "La connexion a &eacute;chou&eacute; , le message d'erreur &eacute;tait : ";
		echo mysql_error();
		die("Fin de programme, code -1");
	finp();
	}; #fin du si
	p();
		echo "Connexion &agrave; forge r&eacute;ussi";
	finp();
	finSection();
	#ouverture de la base de données
	debutSection();
	$connect2 = @mysql_select_db("statdata");
	if(!$connect2){
		p();
			echo "Impossible d'utiliser la base statdata";
			echo mysql_error();
		die("Fin de programme, code -2");
		finp();
	};#fin du si
	p();
		echo "Connexion &agrave; statdata r&eacute;ussie";
	finp();
	finSection();
		#interrogation et récupartion des données
		$question = "Select titre, annee from statdata.films order by anne limit 15";
		$reponse = @mysql_querry($question);
		if(!reponse){
			p();
				echo "L'interrogation de la table a &eacute;chou&eacute;";
				echo mysql_error();
				die("Fin de programme, code -6");
			finp();
		}; #fin du si
		h1("Les quinze premiers films");
     		table(1,15,"collapse");
     		entetesTableau("Num&eacute;ro Date Film","jaune_pastel");
		$ch1   = "annee" ;
     		$ch2   = "titre" ;
		$num      = 0 ;
	     	while ($ligneResultat=@mysql_fetch_array($reponse)){
			$num++ ;
			tr() ;
			 td("R") ; echo $num                 ; fintd();
			 td("R") ; echo $ligneResultat[$ch1] ; fintd();
			 td()    ; echo $ligneResultat[$ch2] ; fintd();
		       	fintr() ;
	     	}; # fin tant que
     
     		fintable() ;
	finPage();

?>
