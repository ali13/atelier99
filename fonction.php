<?php
//for( $nom = 1 ; $nom <= 99 ; $nom++ ){
//echo '<div id="nom_'. $nom .'">'. $nom .'</div>';
//}

// function
function ajouter_ligne( $nom ){
echo '<div id="nom_'. $nom .'">'. $nom .'</div>';
$nom++;
if( $nom < 100)
ajouter_ligne ($nom );
}
ajouter_ligne( 1 );

?>
