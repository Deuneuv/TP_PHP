<?php
//============================================================+
// File name   : cv_sprogs.php
// Begin       : 2013/04/11
// Last Update : 2013/04/15
//
// Description : Fonctions pour générer la page web de mon CV.
//		   Elles sont tirées de std.php écrit par Gilles Hunault, réécrites pour adapter un autre style à la page,
//		   vu que toutes les fonctions de sdt.php ne seront pas utilisées.
//
//============================================================+
/**
 * Programme	: Contient les balises html ainsi que des fonctions php
 * @author	: Deuneuv Makoundou
 * @version	: 1.1
 * @since	: 11/04/2013
 */
/*******************************************************************************
*                                                                              *
*                 Début du fichier				               	  *
*                                                                              *
*******************************************************************************/

include_once("strfun.php"); //Fichier contenant des fonctions php sur les chaînes, utilisées par des fonctions de std.php

################# Fonction debutPage - Génère les balises de début de page jusqu'au <body>#################
function debutPage($titre="",$grm="std",$styl="",$js="",$favicon="") {

	if  ($grm=="svg") {
		 header("Content-type: image/svg+xml") ; 
	} ; # fin de si
	echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n" ;
	if ($grm=="std") {
	   echo "<!DOCTYPE html \n" ;
	   echo "   PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \n" ;
	   echo "   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"> \n" ;
	   echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"fr\" xml:lang=\"fr\"> \n" ;
	} elseif ($grm=="svg") {
	   echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">'."\n" ;
	   echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n" ;
	} else {
	   echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n" ;
	   echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"fr\" xml:lang=\"fr\">\n" ;
	} ; # fin de si
	echo "<head> \n" ;
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />\n" ;
	#liens pour la police des titres
	echo "<!--lien pour la police des titres -->\n";
	echo "<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Crafty+Girls\" type=\"text/css\" title=\"style\" />";

	# chargement d'un ou plusieurs fichiers javascript
	
	if ($js!="") {
	   $tjs = preg_split("/\s+/",trim($js)) ;
	   foreach($tjs as $fjs) {
	      echo "<script type='text/javascript' src='$fjs'></script>\n" ;
	   } ; # fin pour
	} ; # fin de si
	
	# chargement de l'icône
	
	if ($favicon!="") {
	   echo "<link rel='icon' type='image/png' href='$favicon' />\n" ;
	} ; # fin de si
	
	# chargement de style(s) personnalisé(s)
	
	if ($styl!="") {
	   $tstyl = preg_split("/\s+/",trim($styl)) ;
	   foreach ($tstyl as $fstyl) {
	     echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$fstyl\" title=\"style\" /> \n" ;
	   } ; # fin pour
	} ; # fin de si
		
	echo "<title>\n" ;
	echo " $titre" ;
	echo "\n</title>\n" ;
	echo "</head>\n" ;
 	echo "<body class=\"ciel\">\n" ;
}; # fin de fonction debutPage
################# Fonction finPage - Génère les balises de fin de page #################

function finPage() {
	div("centrer","footer");
	echo "<a href=\"http://forge.info.univ-angers.fr/~gh/internet/l2a_cc.php\"> \n" ;
	echo "<img src=\"img/retour.png\" alt=\"retour page du CC Dev Web avanc&eacute;e L2\" /></a> |\n";
	echo "<a href=\"dmakoundou.zip\" title=\"Archive zip codes sources\"> \n";
	echo "<img src=\"img/zip_image.jpg\" alt=\"Archive du code source\" /></a> |\n"; 
	echo "<a href=\"?pdf\">";
	echo "<img src=\"img/pdf_image.jpg\" alt=\"CV en version PDF\" /> | </a>";
	echo "<a href=\"http://validator.w3.org/check/referer\" title=\"This page validates as XHTML 1.0 Strict\"><img src=\"img/xhtml.png\" alt=\"XHTML Valide\" /></a>\n |"; 
	echo "<a href=\"http://jigsaw.w3.org/css-validator/check/referer\" title=\"This page validates as CSS\"><img  src=\"img/css.jpg\" alt=\"CSS Valide\" /></a>\n";
	echo "<br />";
	echo "<p>&copy; - Deuneuv M.| Chemillé le 15/04/2013</p>";
	findiv();
	
	echo "</body> \n" ;
	echo "</html> \n" ;

} ; # fin de fonction finPage
################# Fonctions div - findiv #################

function div($cla="",$id="") {
  $attr = "" ;
  if (!$cla=="") {
      $attr .= " class='$cla'" ;
  } ; # fin de si
  if (!$id=="") {
      $attr .= " id='$id'" ;
  } ; # fin de si
  echo "<div$attr>\n" ;
} ; # fin de fonction div

function findiv() {
  echo "</div>\n" ;
} ; # fin de fonction findiv
################### fonction ancre pour inclure un lien #########################################

function ancre( $href , $nomh="",$cla="",$id="",$xtra="") {

  $attr = "" ;
  if ($nomh=="")  { $nomh=$href ;};
  if (!$href=="") { $attr .= " href='$href'" ; } ;
  if (!$cla=="")  { $attr .= " class='$cla'" ; } ;
  if (!$id=="")   { $attr .= " id='$id'"     ; } ;
  if (!$xtra=="") { $attr .= " $xtra"     ; } ;
  echo "<a $attr>$nomh</a>" ;

} ; # fin de fonction ancre
################# Fonction hr pour une barre horizontale ################# 

function hr($cla="") {
  if (strlen($cla)==0) {
    echo "<hr />\n" ;
  } else {
    echo "<hr class='$cla' />\n" ;
  } ; # fin si
} ; # fin de fonction hr
################# Fonctions abbr pour une abbréviation ################# 

function abbr($bulle) {
  echo "<abbr title='$bulle'>" ;
} ; # fin de fonction abbr

function finabbr() {
  echo "</abbr>\n" ;
} ; # fin de fonction finabbr
################# Fonction pour mettre en gras #################

function b($chen="&nbsp;", $clas="") {
	if(!$clas==""){return "<strong class='$clas'>$chen</strong>" ;}
  	return "<strong>$chen</strong>" ;
} ; # fin de fonction b

################# Fonction em comme "emphase"#################

function em($chen="&nbsp;") {
  return "<em>$chen</em>" ;
} ; # fin de fonction em
################## fonction générique pour titre de niveau i #################

function h($nivi=1,$chen="&nbsp;",$cla="",$id="") {
  $attr = "" ;
  if (!$cla=="") {
      $attr .= " class='$cla'" ;
  } ; # fin de si
  if (!$id=="") {
      $attr .= " id='$id'" ;
  } ; # fin de si
  echo "<h$nivi$attr>$chen</h$nivi>\n" ;
} ; # fin de fonction h
################## fonction pour générer un commentaire #################

function cmt($chen="&nbsp;") {
  echo "\n<!-- $chen -->\n" ;
} ; # fin de fonction cmt
################## fonction pour mettre en indice #################

function sub($chen="&nbsp;") {
  return "<sub>$chen</sub>" ;
} ; # fin de fonction sub
################## fonction pour mettre en exposant#################

function sup($chen="&nbsp;") {
  return "<sup>$chen</sup>" ;
} ; # fin de fonction sup
################## fonction pourle retour à la ligne#################

function br() {
  echo "<br />\n" ;
} ; # fin de fonction br
####################fonction pour générer des espaces######################
function nbsp($rep=1) {
  echo copies("&nbsp;",$rep) ;
} ; # fin de fonction nbsp
################## fonction pour une liste non-ordonnée #################

function ul($xtra="") {
  if ($xtra=="") {
     echo "<ul>\n" ;
  } else {
     echo "<ul $xtra>\n" ;
  } ; # fin de si
} ; # fin de fonction ul

function finul() {
  echo "</ul>\n" ;
} ; # fin de fonction finul
################## fonction pour une liste ordonnée #################

function ol($xtra="") {
  if ($xtra=="") {
     echo "<ol>\n" ;
  } else {
     echo "<ol $xtra>\n" ;
  } ; # fin de si
} ; # fin de fonction ol

function finol() {
  echo "</ol>\n" ;
} ; # fin de fonction finol
################## fonction pour un item de liste #################

function debutli($cntli="",$xtra="") {
  echo "<li $xtra>$cntli" ;
} ; # fin de fonction debutli

function finli() {
  echo "</li>\n" ;
} ; # fin de fonction finli
################## fonction span #################

function s_span($chen,$cla,$id="") {
  $attr = "" ;
  if (!$cla=="") {
      $attr .= " class='$cla'" ;
  } ; # fin de si
  if (!$id=="") {
      $attr .= " id='$id'" ;
  } ; # fin de si
  echo "<span $attr>$chen</span>" ;
} ; # fin de fonction s_span

function span($cla, $id=""){
	$attr = "" ;
  	if (!$cla=="") {
	    $attr .= " class='$cla'" ;
	} ; # fin de si
	if (!$id=="") {
	    $attr .= " id='$id'" ;
	} ; # fin de si
	echo "<span $attr>\n";
	
}; #fin de la fonction span

function finspan(){
	echo "</span>\n";
	
}
################## fonction pour générer un paragraphe #################

function p($cla="",$id="") {
  $attr = "" ;
  if (!$cla=="") {
      $attr .= " class='$cla'" ;
  } ; # fin de si
  if (!$id=="") {
      $attr .= " id='$id'" ;
  } ; # fin de si
  echo "<p$attr>\n" ;
} ; # fin de fonction p

function finp() {
  echo "\n</p>\n" ;
} ; # fin de fonction finp

function pvide() {
  echo "<p>&nbsp;</p>\n" ;
} ; # fin de fonction pvide
################## fonction pour une citation #################

function blockquote() {
  echo "<blockquote>\n" ;
} ; # fin de fonction blockquote

function finblockquote() {
  echo "</blockquote>\n" ;
} ; # fin de fonction finblockquote

################## fonction img pour inclure une image ##########################
function img( $src , $alt="",$wi="",$he="", $id="",$cla="",$tit='') {
  if ($alt=="") {
  	 $alt  = "image" ; 
  } ; #fin de si
  $attr  = "src='$src'" ;
  $attr .= " alt='$alt'" ;
  if (!$wi=="")   { $attr .= " width='$wi'" ; } ;
  if (!$id=="")   { $attr .= " id='$id'"    ; } ;
  if (!$cla=="")  { $attr .= " class='$cla'"    ; } ;
  if (!$tit=="")  { $attr .= " title='$tit'" ; } ;
  if (!$hei=="") { $attr .= " height='$he'" ; } ;

  echo "<img $attr />" ;
} ; # fin de fonction img
###################### fonction pour écrire une ligne ##################

function texte($line){
	echo $line;
}
######################fonctions pour un tableau#########################

function table($bord=0,$pad=0,$cla="",$resum="?",$xtra="") {
  $defcla = "" ;
  if (strlen($cla)>0) { $defcla = "class='$cla'" ; } ;
  echo "<table border=\"$bord\" cellpadding=\"$pad\" $defcla summary=\"$resum\" $xtra>\n" ;
} ; # fin de fonction table

function fintable() {
  echo "</table>\n" ;
} ; # fin de fonction fintable

function tr($cla="",$xtra="") {
  $defcla = "" ;
  if (strlen($cla)>0) { $defcla = "class='$cla'" ; } ;
  echo "<tr $defcla $xtra>\n" ;
} ; # fin de fonction tr

function fintr() {
  echo "</tr>\n" ;
} ; # fin de fonction fintr

function td($aligne="L",$cla="",$colspan="",$xtra="") {
  $defcla = "" ;
  if (strlen($cla)>0)     { $defcla  = " class='$cla'" ; } ;
  if (strlen($colspan)>0) { $defcla .= " colspan='$colspan'" ; } ;
  if (strtoupper($aligne)=="R") {
     echo "<td align='right' $defcla $xtra>\n" ;
  } elseif (strtoupper($aligne)=="C") {
     echo "<td align='center' $defcla $xtra>\n" ;
  } else {
     echo "<td align='left' $defcla $xtra>\n" ;
  } ; # fin si
} ; # fin de fonction td

function th($aligne="L",$cla="",$colspan="",$xtra="") {
  $defcla = "" ;
  if (strlen($cla)>0)     { $defcla  = " class='$cla'" ; } ;
  if (strlen($colspan)>0) { $defcla .= " colspan='$colspan'" ; } ;
  if (strtoupper($aligne)=="R") {
     echo "<th align='right' $defcla $xtra>\n" ;
  } elseif (strtoupper($aligne)=="C") {
     echo "<th align='center' $defcla $xtra>\n" ;
  } else {
     echo "<th align='left' $defcla $xtra>\n" ;
  } ; # fin si
} ; # fin de fonction th

function fintd() {
  echo "</td>\n" ;
} ; # fin de fonction fintd

function tdvide() {
  echo "<td>&nbsp;</td>\n" ;
} ; # fin de fonction tdvide

function finth() {
  echo "</th>\n" ;
} ; # fin de fonction finth
################### fonctionpour sauvegarder la page en PDF #########################################

include_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');

function backupPdf($nom,$contents){
	 try { 
      $html2pdf = new HTML2PDF('P', 'A4', 'fr','','ISO-8859-1',array(5,5,30,8)) ;	// creation d'un nouvel objet HTML2PDF, l'encodage est précisé car différente de l'utf-8 et le tableau précise les marges Left Top Right Bottom
	  $html2pdf->pdf->SetAuthor('Makoundou Deuneuv');
      $html2pdf->pdf->SetTitle('CV - Mak.');
	  $html2pdf->pdf->SetSubject('Version PDF'); 
	  $html2pdf->pdf->SetDisplayMode('fullpage') ;   

      // transformation du fichier en pdf 
      $html2pdf->writeHTML($contents) ; 

      // insertion de la date et de l'heure 
      $html2pdf->writeHTML('Fichier généré le '.date("d/m/Y ").' à '.date(" H:i:s")) ; 

      // affichage a l'ecran 
      $html2pdf->Output($nom) ; 

   	  // gestion des erreurs eventuelles 
    } catch(HTML2PDF_exception $e) { 
        echo $e ; 
        //exit ;
	}
}

?>
