<?php
	error_reporting(E_ALL | E_NOTICE | E_STRICT ) ;
	include "std.php";
     ##############################################################################
	
	anonymousConnect("test") ;
	#creation de la table Service serv225
	 $crt  = "" ;
	 $crt .= " create table serv225 (        "  ;
	 $crt .= "  nom VARCHAR(50),             "  ;
	 $crt .= "  numero INT auto_increment,   "  ;
	 $crt .= "  PRIMARY KEY (numero)         "  ;
	 $crt .= " )                             "  ;
	 $supr = "";
	 $supr .= " drop table if exists serv225 ";
	 $sql = mysql_query("$supr");
	 $sql = mysql_query("$crt") ;
	if(!$sql){
		p(); echo "La table n'a pas &eacute;t&eacute; cr&eacute;&eacute;\n";
		echo mysql_error();
		die("Fin de programme, code -1");
		finp();
 	}
	else{
		p(); echo "Table cr&eacute;&eacute;"; finp();
	}; # fin du si
##################### ajout de données ###########################################
	$ajout = " insert into serv225 values (\"Achats\",1)";
	$sql = mysql_query("$ajout");
	if (!$sql) {
	   p();
	   echo "L'insertion dans la table Serv225 s'est mal pass&eacute;e, le message d'erreur est : " ;
	   echo mysql_error() ;
	   die("Fin de programme, code -2") ;
	   finp();
	} ; # fin si
	p(); echo "Le service Achats a &eacute;t&eacute; cr&eacute;&eacute;"; finp();

	$ajout = " insert into serv225 values (\"Ventes\",2)";
	$sql = mysql_query("$ajout"); 
	if (!$sql) {
	   p();
	   echo "L'insertion dans la table Serv225 s'est mal pass&eacute;e, le message d'erreur est : " ;
	   echo mysql_error() ;
	   die("Fin de programme, code -3") ;
	   finp();
	} ; # fin si
	p(); echo "Le service Ventes a &eacute;t&eacute; cr&eacute;&eacute;"; finp();
	
	$ajout = " insert into serv225 values (\"Marketing\",3)";
	$sql = @mysql_query("$ajout");
	if (!$sql) {
	   p();
	   echo "L'insertion dans la table Serv225 s'est mal pass&eacute;e, le message d'erreur est : " ;
	   echo mysql_error() ;
	   die("Fin de programme, code -4") ;
	   finp();
	} ; # fin si
	p(); echo "Le service Marketing a &eacute;t&eacute; cr&eacute;&eacute;"; finp();

?>
