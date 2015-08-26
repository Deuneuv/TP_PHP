<?php
	function creerPile() {
		return (array());
	}

	function pileVide($p) {
     
       return( count($p)==0 ) ;
     
    }
	function montrerPile($pile){
		$n = count($pile) ;
       if (pileVide($pile)) {
          echo "la pile est vide.\n" ;
       } else {
         echo "Contenu de la pile :\n" ;
         for ($i=$n-1;$i>=0;$i--) {
           echo "  valeur numéro ".sprintf("%2d",$i)." : ".sprintf("%4d",$pile[$i]) ;
           if ($i==$n-1) { echo " (haut de la pile)" ; } ;
           if ($i==0)      { echo " (bas  de la pile)" ; } ;
           echo "\n" ;
         } ; # fin pour i
       } ; # finsi
   	}

	function empiler($nbre,$pile){
		$pile[ count($pile) ] = $nbre ;
     
       	return( $pile ) ;
     
     } # fin de fonction empiler

	function depiler($pile){
		$idd = count($pile) - 1 ; # idd : indice du dernier
     
       if ($idd>=0) {
          $dep = $pile[ $idd ] ;
          unset( $pile[ $idd ]  ) ;
       } else {
          $dep = "" ;
       } # finsi
     
       return( array($dep,$pile) ) ;
	}
	$p = creerPile();
	montrerPile($p);
	$p = empiler(5,$p);
	$p = empiler(2,$p);
	montrerPile($p);
	list($x,$p) = depiler($p);
	echo"on a enlev&eacute; $x (du haut) de la pile\n";
	list($x,$p) = depiler($p);
	list($x,$p) = depiler($p);
?>
