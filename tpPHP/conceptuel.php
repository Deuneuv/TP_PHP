<?php
	include "std.php";
	ul();
	debutli();
	p();
	echo"Voir le fichier\n";
	ahref('montresource.php?nomfic=combien.php',"combien.php");
	echo"La commande " .b("mysqldump")." fournit le code-source pour la recreation ";
	echo" de la table et du remplissage avec les données soit ici:\n ";
	ahref('elf.mysql.txt',"elf.mysql");
	finp();
	finli();
	finul();
?>
