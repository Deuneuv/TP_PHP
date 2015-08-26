<?php
	error_reporting(E_ALL | E_NOTICE | E_STRICT ) ;
	include "std.php";
	debutPage("Des services et des personnes","strict") ;
	anonymousConnect("test") ;
     	debutSection() ;
     	
     ################## formulaires #########################################
	h2("Ajouter un service");	
	form("MiseAjour.php","post"); 
		blockquote();
			p(); echo "Nom su service\n"; finp();
			echo input_text("nomServ","","15","tajaunec");
			p(); echo input_submit("Enregistrez!"); finp();
		finblockquote();
	finform();
	h2("Ajouter d'une personne connaissant son service");	
	form("#","post"); 
		blockquote();
			p(); echo "Nom de la personne\n"; finp();
			echo input_text("nomPers","","15","tajaunec");
			p(); input_select("serv");
			listeSelectFromChampMySql("nom","serv225","listServices");
			input_select_fin();
			echo input_submit("Enregistrez!"); finp();
		finblockquote();
	finform();
	h2("R&eacute;initialisez les services");
	form("creationTable.php","post"); 
		blockquote();
			p(); echo input_submit("R&eacute;initialisez!"); finp();
		finblockquote();
	finform();
	finSection();
	finPage();
?>
