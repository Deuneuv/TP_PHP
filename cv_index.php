<?php
//============================================================+
// File name   : cv_index.php
// Begin       : 2013/04/11
// Last Update : 2013-04-15
//
// Description : Page web d'un cv
//
//============================================================+
/**
 * Programme	: G�n�re une page html d'un cv
 * @author	: Deuneuv Makoundou
 * @version	: 1.1
 * @since	: 11/04/2013
 */
/*******************************************************************************
*                                                                              *
*                 D�but du fichier				                       *
*                                                                              *
*******************************************************************************/

include_once(dirname(__FILE__).'/progs/cv_sprogs.php'); //inclusion du fichier contenant les balises html & autres fonctions php

/**********D�marage de la mise en memoire tampon de la page web si l'on demande sa version pdf**********/	
if (isset ($_GET ['pdf'])) {
	ob_start ();
	debutPage("CV - Deuneuv Makoundou","","css/style_pdf.css","","");	//Inclusion du css pour la mise en forme PDF
}
else{
	debutPage("CV - Deuneuv Makoundou","","css/style.css","","");	//Inclusion du fichier css de la page web
} #fin du si
	cmt("Conteneur de tous les blocs sauf celui du pied de page (footer)");
	div("","container");
	
/******************************bloc de pr�sentation*****************************/	
		cmt("bloc de pr�sentation");
		div("","topbar");
			//img("dmakoundou/photo.jpg","photo","155","110","photo","","photo");
			p("","presentation");
				texte(b("Deuneuv Makoundou","bleue")); br();
				texte("4 rue de la source"); br();
				texte("49120 Chemill�"); br();
				texte("06-26-xx-xx-xx"); br();
				texte("dmakoundou@etud.univ-angers.fr"); br();
				/*s_span("Actuellement �tudante en 2".sup("�me ")." ann�e de licence informatique, mon projet professionnel est d'int�grer des �quipes de programmeurs dynamiques"); br();*/
			finp();
		findiv();
		
/****************************************Titre du CV**********************************************/	
		cmt("titre cv");
		$title = b("etudiante en informatique", "bleue");
		h('1',$title,"","titre");
		
/**********************D�but du bloc principal contenant les autres infos*************************/	
		div("","main");				
			div("","column_left");	//Colonne de gauche
/*************************************cadre formations********************************************/
				cmt("paragraphes sur les formations");
				h("2","Formations","titre2");
				p("","formation");
					texte(b("2012 - 2013 : ", "bleue"));
					texte(b(" L2 MPCIE ", "bleue"));
					texte(" (2".sup("�me ")." ann�e de Licence MPCIE "); br();texte("( Math�matique, Physique, Chimie, Informatique, Economie), ");
					texte(" UFR de sciences de l'Universit� d'Angers.");br();br();				 
					texte(b("2010 - 2012 : ", "bleue"));
					texte(b(" BTS IRIS ", "bleue"));
					texte("(Brevet de Technicien Sup�rieur en Informatique et R�seaux pour l'industrie et");br();texte(" les services techniques), ");
					texte(" Lyc�e de l'Hyr�me, Chemill�."); br();br();
					texte(b("2009 : ", "bleue"));
					texte(b (" BAC S ", "bleue"));
					texte("(Baccalaur�at Scientifique) au Lyc�e Moderne de Koumassi, Abidjan (C�te d'Ivoire)."); br();	
				finp();
				if(!isset($_GET['pdf'])){
					pvide();
				}
				
/***********************************cadre exp�riences professionnelles*****************************/
				cmt("Paragraphe sur les exp�riences professionnelles");
				h("2","Exp�riences Professionnelles","titre2");
				p("","experience");
					texte(b("Mai - Juin 2011 : ","bleue"));
					texte("Stagiaire technicien de maintenance informatique au sein du service de recyclage");
					texte(" informatique de JERAF Recycling, les Sorini�res (44)."); br();
				finp();
				ul();
					debutli("R�ception du mat�riel informatique (unit�s centrales, �crans)"); finli();
					debutli("Test sur le mat�riel (recherche de pannes possibles)"); finli();
					debutli("R�paration, d�pannage"); finli();
					debutli("Recyclage."); finli();
				finul();
				if(!isset($_GET['pdf'])){
					pvide();pvide();
				}
			findiv();	//Fin de la colonne de gauche
			div("","column_right");	//colone de droite
/**************************************cadre autres exp�riences*************************************/
				h("2","Autres exp�riences", "titre2");
				p();
					texte(b("Octobre 2011 - Aujourd'hui : ", "bleue"));
					texte("Equipi�re polyvalente au McDonald's de Chemill�."); br();br();
					texte(b("Janvier - Juin 2012 : ", "bleue"));
					texte("Projet informatique BTS IRIS :  ");
				finp();
				ul();
					debutli("R�alisation d'une application embarqu�e sur une maquette de v�hicule."); finli();
					debutli("Application r�alisant le tableau de bord du v�hicule."); finli();
					debutli("Utilisation de la carte de d�veloppement ");
						ancre("http://www.armadeus.com/english/products-development_boards-apf27_dev.html"," Armadeus."); 
					finli();
				finul();
				texte(b("Mars 2011 : ", "bleue"));
				texte("Stagiaire au studio de photographie \"Arr�t sur image\", Cambrai (59).");
				texte("Apprentissage du logiciel Photoshop CS5, tirage de photos, contact avec la client�le."); br();

/*************************************cadre comp�tences*******************************************/	
				h("2","Domaines de comp�tences","titre2");
				p("","compentence");
					texte(b("Logiciels (IDE de programmation): ", "bleue"));
					texte("NetBeans IDE 7.3, Eclipse, C++ Builder 6, Qt Creator, StarUML, phpDesigner 2008, DBDesigner."); br();br();
					texte(b("Langages de programmation : ", "bleue"));
					texte("C/C++, JAVA, PHP, (X)HTML/CSS/JAVASCRIPT, XML, SQL.");br();br();
					texte(b("Administration r�seaux et base de donn�es : ","bleue"));
					texte("Windows Server 2008, SQL Server, MySQL, PostgreSQL."); br();br();
					texte(b("Langues : ","bleue"));
					texte("Anglais, niveau interm�diare.");br(); br();
				finp();
			findiv();	//fin de la colonne de droite
			cmt("Ce bloc div permet d'aligner les deux blocs pr�c�dents en colonne");
			div("spacer");findiv();

/***************************cadre centres d'int�r�t*************************************************/
			div("","centreInteret");
				h('2',"Centres d'int�r�t","titre2");	
				ul();
					debutli(b("Musique et chant","bleue"));texte(" - Langage d'�me."); finli();
					debutli(b("Lecture ","bleue"));texte(" - Les livres renferment des tr�sors de toutes sortes."); finli();
					debutli(b("Loisirs cr�atifs" ,"bleue"));texte(" - Quel plaisir que de cr�er!"); finli();
					debutli(b("Voyage ","bleue"));texte(" - La seule chose que l'on paye et qui nous rend riche."); finli();
					debutli(b("Cin�ma ", "bleue"));texte(" - &Eacute;vasion!"); finli();
					debutli(b("Yoga","bleue")); nbsp(3);texte("- Stimule l'esprit."); finli();
					debutli(b("Sport","bleue")); nbsp(2);texte("- Stimule le corps."); finli();
					debutli(b("Danse","bleue")); nbsp();texte("- Expression du corps."); finli();
				finul();
			findiv();	//fin du bloc des centres d'int�r�ts
			div("spacer");findiv();	//bloc s�parateur
		findiv();	//Fin du bloc principal
	findiv();	//Fin du container
	
/**********************************Sauvegarde en PDF*****************************************/	
	if (isset($_GET['pdf'])){	//test si l'on demande la sauvegarde en pdf
	
		$content = ob_get_clean();		// met  le contenu de la memoire tampon dans la variable content et ensuite le vide 
		backupPdf('CV_Makoundou.pdf', $content); //sauvegarde du CV en pdf
		#echo $content;	//r�affiche le contenu de la variable, la page web du cv.
	}; #fin du si
	
finPage();	//Fin de la page web avec le bloc footer
/**************************Fin de la page cv_index.php***************************************/
?>
